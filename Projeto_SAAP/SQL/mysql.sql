CREATE DATABASE IF NOT EXISTS trabalhophp;

USE DATABASE trabalhophp;

CREATE TABLE IF NOT EXISTS professor(
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    sobrenome varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    telefone varchar(50) NOT NULL,
    id_disciplina int NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(id_disciplina) REFERENCES disciplina(id)
);

CREATE TABLE IF NOT EXISTS professor(
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    sobrenome varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    telefone varchar(50) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS disciplina(
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS horario (
    id int NOT NULL AUTO_INCREMENT,
    dia date NOT NULL,
    hora time NOT NULL,
    PRIMARY KEY(id)
);
