CREATE DATABASE IF NOT EXISTS trabalhophp;

USE trabalhophp;

CREATE TABLE IF NOT EXISTS disciplina(
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS professor(
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    sobrenome varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    id_disciplina int NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(id_disciplina) REFERENCES disciplina(id)
);

CREATE TABLE IF NOT EXISTS aluno(
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    sobrenome varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS horario (
    id_h int NOT NULL AUTO_INCREMENT,
    dia date NOT NULL,
    hora time NOT NULL,
    id_professor int NOT NULL,
    PRIMARY KEY(id_h),
    FOREIGN KEY(id_professor) REFERENCES professor(id)
);

CREATE TABLE IF NOT EXISTS horarioaluno (
    id_aluno int NOT NULL,
    id_horario int NOT NULL,
    FOREIGN KEY(id_aluno) REFERENCES aluno(id),
    FOREIGN KEY(id_horario) REFERENCES horario(id_h)
);

insert into disciplina (nome) values ('Matematica');
insert into disciplina (nome) values ('Lingua Portuguesa');
insert into disciplina (nome) values ('Fisica');
insert into disciplina (nome) values ('PHP');
