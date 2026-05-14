from flask import (
    Flask,
    render_template,
    request,
    redirect,
    url_for,
    session,
    flash,
    abort,
)

from werkzeug.security import generate_password_hash, check_password_hash
import mysql.connector

app = Flask(__name__)
app.secret_key = "segredo_super_importante"


# ========= CONEXÃO COM BANCO ==========
def conectar():
    return mysql.connector.connect(
        host="localhost",
        port=3306,
        user="root",
        password="",
        database="cifra_music_cadastro",
    )


# ========= LOGIN ==========
@app.route("/")
def login():
    if session.get("logado"):
        return redirect(url_for("index"))

    return render_template("login.html")


@app.route("/login", methods=["POST"])
def login_post():

    usuario = request.form.get("usuario")
    senha = request.form.get("senha")

    conexao = conectar()
    cursor = conexao.cursor(buffered=True, dictionary=True)

    cursor.execute(
        "SELECT * FROM tb_usuario WHERE nm_login=%s AND inadmin IN ('1','2')",
        (usuario,),
    )

    user = cursor.fetchone()

    cursor.close()
    conexao.close()

    if user and check_password_hash(user["ds_senha"], senha):

        session["logado"] = True
        session["usuario"] = user["nm_usuario"]
        session["id_usuario"] = user["id"]
        session["inadmin"] = user["inadmin"]

        if str(user["inadmin"]) == "1":
            return redirect(url_for("admin"))
        else:
            return redirect(url_for("index"))

    flash("Erro ao realizar login!", "erro")
    return redirect(url_for("login"))


# ========= LOGOUT ==========
@app.route("/logout")
def logout():
    session.clear()
    flash("Você saiu do sistema.", "info")
    return redirect(url_for("login"))


# ========= INDEX ==========
@app.route("/index")
def index():

    if not session.get("logado"):
        return redirect(url_for("login"))

    return render_template("index.html", usuario=session["usuario"])


# ========= LISTAR USUÁRIOS ==========
@app.route("/admin/listusuario")
def listusuario():

    if not session.get("logado"):
        return redirect(url_for("login"))

    conexao = conectar()
    cursor = conexao.cursor(buffered=True, dictionary=True)

    cursor.execute("SELECT * FROM tb_usuario")

    dados = cursor.fetchall()

    cursor.close()
    conexao.close()

    return render_template("admin/listarusuario.html", dados=dados)


# ========= CADASTRAR USUÁRIO ==========
@app.route("/usuario_cliente", methods=["GET", "POST"])
def usuario_cliente():

    if request.method == "POST":

        nome = request.form.get("nome")
        login = request.form.get("login")
        senha = generate_password_hash(request.form.get("senha"))

        inadmin = "2"

        conexao = conectar()
        cursor = conexao.cursor(buffered=True)

        cursor.execute(
            "SELECT * FROM tb_usuario WHERE nm_login = %s",
            (login,),
        )

        usuario_existente = cursor.fetchone()

        if usuario_existente:
            cursor.close()
            conexao.close()

            flash("Já existe um usuário com esse login!", "erro")
            return redirect(url_for("usuario_cliente"))

        sql = """
            INSERT INTO tb_usuario
            (nm_usuario, nm_login, ds_senha, inadmin)
            VALUES (%s, %s, %s, %s)
        """

        valores = (nome, login, senha, inadmin)

        cursor.execute(sql, valores)

        conexao.commit()

        cursor.close()
        conexao.close()

        flash("Usuário cadastrado com sucesso!", "sucesso")

        return redirect(url_for("login"))

    return render_template("usuario.html")


# ========= EDITAR USUÁRIO ==========
@app.route("/usuario/editar/<int:id>", methods=["GET", "POST"])
def editar_usuario(id):

    if not session.get("logado"):
        return redirect(url_for("login"))

    conexao = conectar()
    cursor = conexao.cursor(buffered=True, dictionary=True)

    if request.method == "POST":

        nome = request.form.get("nome")
        login = request.form.get("login")
        inadmin = request.form.get("inadmin")

        sql = """
            UPDATE tb_usuario
            SET nm_usuario=%s, nm_login=%s, inadmin=%s
            WHERE id=%s
        """

        valores = (nome, login, inadmin, id)

        cursor.execute(sql, valores)

        conexao.commit()

        flash("Usuário atualizado com sucesso!", "sucesso")

        return redirect(url_for("listusuario"))

    cursor.execute("SELECT * FROM tb_usuario WHERE id=%s", (id,))

    usuario = cursor.fetchone()

    cursor.close()
    conexao.close()

    return render_template(
        "admin/editar_usuario.html",
        usuario=usuario
    )


# ========= EXCLUIR USUÁRIO ==========
@app.route("/usuario/excluir/<int:id>")
def excluir_usuario(id):

    if not session.get("logado"):
        return redirect(url_for("login"))

    conexao = conectar()
    cursor = conexao.cursor(buffered=True)

    cursor.execute(
        "DELETE FROM tb_usuario WHERE id=%s",
        (id,)
    )

    conexao.commit()

    cursor.close()
    conexao.close()

    flash("Usuário excluído com sucesso!", "sucesso")

    return redirect(url_for("listusuario"))


# ========= CADASTRAR ADMIN ==========
@app.route("/admin/usuario_admin", methods=["GET", "POST"])
def usuario_admin():

    if not session.get("logado"):
        return redirect(url_for("login"))

    if request.method == "POST":

        nome = request.form.get("nome")
        login = request.form.get("login")
        senha = generate_password_hash(request.form.get("senha"))

        inadmin = "1"

        conexao = conectar()
        cursor = conexao.cursor(buffered=True)

        sql = """
            INSERT INTO tb_usuario
            (nm_usuario, nm_login, ds_senha, inadmin)
            VALUES (%s, %s, %s, %s)
        """

        valores = (nome, login, senha, inadmin)

        cursor.execute(sql, valores)

        conexao.commit()

        cursor.close()
        conexao.close()

        flash("Usuário admin cadastrado com sucesso!", "sucesso")

        return redirect(url_for("listusuario"))

    return render_template("usuario_admin.html")


# ========= LOGIN ADMIN ==========
@app.route("/login_admin", methods=["GET", "POST"])
def login_admin():

    if request.method == "POST":

        usuario = request.form.get("usuario")
        senha = request.form.get("senha")

        conexao = conectar()
        cursor = conexao.cursor(buffered=True, dictionary=True)

        cursor.execute(
            "SELECT * FROM tb_usuario WHERE nm_login=%s AND inadmin='1'",
            (usuario,),
        )

        user = cursor.fetchone()

        cursor.close()
        conexao.close()

        if user and check_password_hash(user["ds_senha"], senha):

            session["logado"] = True
            session["usuario"] = user["nm_usuario"]
            session["id_usuario"] = user["id"]
            session["inadmin"] = user["inadmin"]

            return redirect(url_for("admin"))

        flash("Credenciais inválidas!", "danger")

        return redirect(url_for("login_admin"))

    return render_template("login_admin.html")


# ========= ADMIN ==========
@app.route("/admin")
def admin():
    return render_template("admin/index.html")


@app.route("/admin/<modelo>")
def admin_modelo(modelo):

    templates_validos = {
        "editar_usuario",
        "listusuario",
        "editar",
        "listar",
        "logs",
        "usuario_admin",
    }

    if modelo not in templates_validos:
        abort(404)

    return render_template(f"admin/{modelo}.html")


# ========= GUITARRAS ==========
@app.route("/guitarras")
def guitarras():
    return render_template("instrumentos/guitarras.html")


@app.route("/guitarras/<modelo>")
def guitarra_modelo(modelo):

    templates_validos = {
        "cort",
        "fender",
        "tagima",
        "suhr",
        "gretsch",
    }

    if modelo not in templates_validos:
        abort(404)

    return render_template(
        f"instrumentos/guitarras/guitarra{modelo}.html"
    )


if __name__ == "__main__":
    app.run(debug=True)