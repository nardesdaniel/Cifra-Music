-- SQLBook: Code
drop database cifra_music_cadastro;

create database cifra_music_cadastro;

use cifra_music_cadastro;
CREATE TABLE tb_usuario(
  id INT AUTO_INCREMENT,
  nm_usuario VARCHAR(40),
  nm_login VARCHAR(20),
  ds_senha VARCHAR(32),
  inadmin  ENUM("2"),
  CONSTRAINT pk_usuario PRIMARY KEY(id)
);

CREATE TABLE tb_admin(
  id INT AUTO_INCREMENT,
  nm_usuario VARCHAR(40),
  nm_login VARCHAR(20),
  ds_senha VARCHAR(32),
  inadmin  ENUM("1"),
  CONSTRAINT pk_usuario PRIMARY KEY(id)
);

INSERT INTO tb_usuario(nm_usuario,nm_login,ds_senha,inadmin)
VALUES ("Administrador","admin","admin",1)