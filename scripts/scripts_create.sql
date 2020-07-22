CREATE SCHEMA aula_php;

USE aula_php;

CREATE TABLE alunos
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    data_nascimento DATE
);

CREATE TABLE cursos
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    carga_horaria INT NOT NULL
);

CREATE TABLE alunos_cursos
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_aluno INT NOT NULL,
    id_curso INT NOT NULL
);

CREATE TABLE users
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(64) NOT NULL UNIQUE KEY,
    password VARCHAR(255) NOT NULL
)

INSERT INTO users (login, password) VALUES ('admin', '827ccb0eea8a706c4c34a16891f84e7b');