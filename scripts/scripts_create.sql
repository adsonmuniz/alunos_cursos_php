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
