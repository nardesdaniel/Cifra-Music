from flask import Flask, render_template, request, redirect, url_for, session, flash, abort
app = Flask(__name__)
app.secret_key = 'segredo_super_importante'  # necessário para usar session
import mysql.connector


# ========= CONEXÃO COM BANCO ==========
def conectar():
    return mysql.connector.connect(
        host="localhost",
        port=3306,
        user="root",
        password="",  # coloque sua senha do MySQL
        database="cifra_music_cadastro"
    )

# ========= ROTAS ==========
@app.route('/')
def login():
    if session.get('logado'):
        return redirect(url_for('index'))
    return render_template('login.html')

@app.route('/login', methods=['POST'])
def login_post():
    if request.method == 'POST':
        usuario = request.form.get('usuario')
        senha = request.form.get('senha')

        conexao = conectar()
        cursor = conexao.cursor(buffered=True, dictionary=True)
        cursor.execute(
            "SELECT * FROM tb_usuario WHERE nm_login=%s AND ds_senha=%s AND inadmin IN ('2','1')",
            (usuario, senha)
        )
        user = cursor.fetchone()
        cursor.close()
        conexao.close()

        if user:
            session['logado'] = True
            session['usuario'] = user['nm_usuario']
            session['id_usuario'] = user['id']
            session['inadmin'] = user['inadmin']

            if str(user['inadmin']) == "1":
                return redirect(url_for('admin'))
            else:
                return redirect(url_for('index'))
        else:
            flash('Erro ao realizar login!', 'erro')
            return redirect(url_for('login'))
    
    return render_template('login.html')

#Listagem de usuários
@app.route('/admin/listusuario')
def listusuario():
    if not session.get('logado'):
        return redirect(url_for('login'))

    conexao = conectar()
    cursor = conexao.cursor(buffered=True, dictionary=True)
    cursor.execute("""
        SELECT *  from tb_usuario 
    """)
    dados = cursor.fetchall()
    cursor.close()
    conexao.close()

    return render_template('admin/listarusuario.html', dados=dados)

# ========= CADASTRAR USUÁRIO ==========
@app.route('/usuario_cliente', methods=['GET', 'POST'])
def usuario_cliente():
    # if not session.get('logado'):
    #     return redirect(url_for('login'))

    if request.method == 'POST':
        nome = request.form.get('nome')
        login = request.form.get('login')
        senha = request.form.get('senha')
        inadmin = "2"  # "1" = admin, "2" = normal
            
        if login and senha:
            conexao = conectar()
            cursor = conexao.cursor(buffered=True)

            cursor.execute("SELECT * FROM tb_usuario WHERE nm_login = %s", (login,))
            usuario_existente = cursor.fetchone()

            if usuario_existente:
                cursor.close()
                conexao.close()
                flash('Já existe um usuário com esse login!', 'erro')
                return redirect(url_for('usuario_cliente'))
            
    
            sql = "INSERT INTO tb_usuario (nm_usuario, nm_login, ds_senha, inadmin) VALUES (%s, %s, %s, %s)"
            valores = (nome, login, senha, inadmin)
            cursor.execute(sql, valores)
            conexao.commit()
            cursor.close()
            conexao.close()
            flash('Usuário cadastrado com sucesso!', 'sucesso')
            return redirect(url_for('login'))


    return render_template('usuario.html')
    
#Rota para editar usuário
@app.route('/usuario/editar/<int:id>', methods=['GET', 'POST'])
def editar_usuario(id):
    if not session.get('logado'):
        return redirect(url_for('login'))

    conexao = conectar()
    cursor = conexao.cursor(buffered=True, dictionary=True)

    if request.method == 'POST':
        nome = request.form.get('nome')
        login = request.form.get('login')
        inadmin = request.form.get('inadmin')

        sql = "UPDATE tb_usuario SET nm_usuario=%s, nm_login=%s, inadmin=%s WHERE id=%s"
        valores = (nome, login, inadmin, id)
        cursor.execute(sql, valores)
        conexao.commit()
        cursor.close()
        conexao.close()

        flash('Usuário atualizado com sucesso!', 'sucesso')
        return redirect(url_for('listusuario'))

    cursor.execute("SELECT * FROM tb_usuario WHERE id=%s", (id,))
    usuario = cursor.fetchone()
    cursor.close()
    conexao.close()

    return render_template('admin/editar_usuario.html', usuario=usuario)
#Fim da rota para editar usuário

#Rota para excluir usuário
@app.route('/usuario/excluir/<int:id>')
def excluir_usuario(id):
    if not session.get('logado'):
        return redirect(url_for('login'))

    conexao = conectar()
    cursor = conexao.cursor(buffered=True)
    cursor.execute("DELETE FROM tb_usuario WHERE id=%s", (id,))
    conexao.commit()
    cursor.close()
    conexao.close()

    flash('Usuário excluído com sucesso!', 'sucesso')
    return redirect(url_for('listusuario'))

#Fim da rota para excluir usuário

@app.route('/logout')
def logout():
    session.clear()
    flash('Você saiu do sistema.', 'info')
    return redirect(url_for('login'))

@app.route('/index')
def index():
    if not session.get('logado'):
        return redirect(url_for('login'))
    return render_template('index.html', usuario=session['usuario'])

@app.route('/excluir/<int:id>')
def excluir(id):
    if not session.get('logado'):
        return redirect(url_for('login'))

    conexao = conectar()
    cursor = conexao.cursor(buffered=True)
    cursor.execute("DELETE FROM tb_cliente WHERE id = %s", (id,))
    conexao.commit()
    cursor.close()
    conexao.close()

    flash('Cliente excluído com sucesso!', 'info')
    return redirect(url_for('listar'))

@app.route('/admin/usuario_admin', methods=['GET', 'POST'])
def usuario_admin():
    if not session.get('logado'):
        return redirect(url_for('login'))

    if request.method == 'POST':
        nome = request.form.get('nome')
        login = request.form.get('login')
        senha = request.form.get('senha')
        inadmin = "1"  # "1" = admin, "2" = normal

        if login and senha:
            conexao = conectar()
            cursor = conexao.cursor(buffered=True)
            sql = "INSERT INTO tb_usuario (nm_usuario, nm_login, ds_senha, inadmin) VALUES (%s, %s, %s, %s)"
            valores = (nome, login, senha, inadmin)
            cursor.execute(sql, valores)
            conexao.commit()
            cursor.close()
            conexao.close()
            flash('Usuário admin cadastrado com sucesso!', 'sucesso')
            return redirect(url_for('listusuario'))



    return render_template('usuario_admin.html')

@app.route('/login_admin', methods=['GET', 'POST'])
def login_admin():
    if request.method == 'POST':
        usuario = request.form.get('usuario')
        senha = request.form.get('senha')

        conexao = conectar()
        cursor = conexao.cursor(buffered=True, dictionary=True)
        cursor.execute(
            "SELECT * FROM tb_usuario WHERE nm_login=%s AND ds_senha=%s AND inadmin='1'",
            (usuario, senha)
        )
        user = cursor.fetchone()
        cursor.close()
        conexao.close()

        if user:
            session['logado'] = True
            session['usuario'] = user['nm_usuario']
            session['id_usuario'] = user['id']
            session['inadmin'] = user['inadmin']
            return redirect(url_for('admin'))
        else:
            flash('Credenciais inválidas ou usuário não é admin.', 'danger')
            return redirect(url_for('login_admin'))
    
    return render_template('login_admin.html')

@app.route('/cadastrar', methods=['GET', 'POST'])
def cadastrar():
    return render_template('cadastrar.html')

@app.route("/carrinho")
def carrinho():
    if not session.get('logado'):
        return redirect(url_for('login'))
        
    return render_template("carrinho.html")

# ======== admin ===========

@app.route('/admin')
def admin():
    return render_template('admin/index.html')

@app.route('/admin/<modelo>')
def admin_modelo(modelo):
    templates_validos = {
        "editar_usuario",
        "listusuario",
        "editar",
        "listar",
        "logs",
        "listusuario",
        "usuario_admin"
    }
                    
    if modelo not in templates_validos:
        abort(404)

    return render_template(f'admin/{modelo}.html')

# ======== guitarras ========
@app.route('/guitarras')
def guitarras():

    return render_template('instrumentos/guitarras.html')

@app.route('/guitarras/<modelo>')
def guitarra_modelo(modelo):
    templates_validos = {
        "cort",
        "fender",
        "tagima",
        "suhr",
        "gretsch"
    }

    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/guitarras/guitarra{modelo}.html')
# ======= violões ========

@app.route('/violoes')
def violoes():
    return render_template('instrumentos/violoes.html')

@app.route('/violoes/<modelo>')
def violao_modelo(modelo):
    templates_validos = {
        "takamine",
        "martin",
        "cort",
        "gibson",
        "taylor"
    }

    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/violoes/violao{modelo}.html')

# ======== acessórios ========

@app.route('/acessorios')
def acessorios():

    return render_template('instrumentos/acessorios.html')

@app.route('/acessorios/<modelo>')
def acessorio_modelo(modelo):
    templates_validos = {
        "capotraste",
        "palhetaguitarra",
        "palhetafender",
        "caseviolao",
        "caseguitarra"
    }

    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/acessorios/{modelo}.html')

# ======== teclados ========
@app.route('/teclados')
def teclados():

    return render_template('instrumentos/teclados.html')

@app.route('/teclados/<modelo>')
def teclado_modelo(modelo):
    templates_validos = {
        "yamaha",
        "casio",
        "nordstage",
        "sintetizador",
        "arranjador"
    }

    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/teclados/teclado{modelo}.html')

# =========== baterias ========
@app.route('/baterias')
def baterias():

    return render_template('instrumentos/baterias.html')

@app.route('/baterias/<modelo>')
def bateria_modelo(modelo):
    templates_validos = {
        "dw_design",
        "pearl_master",
        "eletronica_zildjian",
        "eletronica_roland",
        "eletronica_all_mesh"
    }

    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/baterias/bateria{modelo}.html')

# ======== Cordas ========
@app.route('/cordas')
def cordas():

    return render_template('instrumentos/cordas.html')

@app.route('/cordas/<modelo>')
def corda_modelo(modelo):
    templates_validos = {
        "daddario",
        "ernieball",
        "elixir",
        "solez",
        "nig"
    }
    
    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/cordas/corda{modelo}.html')

# ======== Pedais ========
@app.route('/pedais')
def pedais():

    return render_template('instrumentos/pedais.html')

@app.route('/pedais/<modelo>')
def pedal_modelo(modelo):
    templates_validos = {
        "boss",
        "dunlop",
        "electro_harmonix",
        "tc_electronic",
        "mxr"
    }
    
    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/pedais/pedal{modelo}.html')

# ======== Amplificadores ========
@app.route('/amplificadores')
def amplificadores():

    return render_template('instrumentos/amplificadores.html')

@app.route('/amplificadores/<modelo>')
def amplificador_modelo(modelo):
    templates_validos = {
        "fender",
        "marshall",
        "vox",
        "sheldon",
        "orange"
    }
    
    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/amplificadores/amplificador{modelo}.html')

# ======== Baixos ========
@app.route('/baixos')
def baixos():

    return render_template('instrumentos/baixos.html')

@app.route('/baixos/<modelo>')
def baixo_modelo(modelo):
    templates_validos = {
        "fenderjazz",
        "fenderprecision",
        "ibanez",
        "yamahabb",
        "yamahasignature"
    }
    
    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/baixos/baixo{modelo}.html')

# ======== Violinos ========
@app.route('/violinos')
def violinos():

    return render_template('instrumentos/violinos.html')

@app.route('/violinos/<modelo>')
def violino_modelo(modelo):
    templates_validos = {
        "stentor",
        "yamaha",
        "fiddlerman",
        "cort",
        "gliga"
    }
    
    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/violinos/violino{modelo}.html')

# ======== Saxofones ========
@app.route('/saxofones')
def saxofones():

    return render_template('instrumentos/saxofones.html')

@app.route('/saxofones/<modelo>')
def saxofone_modelo(modelo):
    templates_validos = {
        "yamaha",
        "selmer",
        "cannonball",
        "conn",
        "jupiter"
    }
    
    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/saxofones/saxofone{modelo}.html')

# ======== Clarinetes ========
@app.route('/clarinetes')
def clarinetes():

    return render_template('instrumentos/clarinetes.html')

@app.route('/clarinetes/<modelo>')
def clarinete_modelo(modelo):
    templates_validos = {
        "yamaha",
        "buffet",
        "selmer",
        "cannonball",
        "jupiter"
    }
    
    if modelo not in templates_validos:
        abort(404)

    return render_template(f'instrumentos/clarinetes/clarinete{modelo}.html')

if __name__ == '__main__':
    app.run(debug=True)