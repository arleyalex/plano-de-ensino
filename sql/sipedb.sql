CREATE DATABASE sipedb
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Portuguese_Brazil.1252'
       LC_CTYPE = 'Portuguese_Brazil.1252'
       CONNECTION LIMIT = -1;

CREATE TABLE curso (
	numero INT PRIMARY KEY NOT NULL,
	nome VARCHAR (150) NOT NULL,
	sigla CHAR(3) NOT NULL,
	tipo CHAR(1) NOT NULL,
	matricula INT FOREIGN KEY (matricula) REFERENCES (professor)
	)
	
CREATE TABLE planoensino (
	codigo SERIAL PRIMARY KEY NOT NULL,
	turno CHAR(1) NOT NULL,
	competencia VARCHAR(2000) NOT NULL,
	conteudo_programatico VARCHAR(4000) NOT NULL,
	recurso_metodologico VARCHAR(400) NOT NULL,
	criterio_avaliacao VARCHAR(2000) NOT NULL,
	instrumento_avaliacao VARCHAR(2000) NOT NULL,
	aec VARCHAR(4000) NOT NULL,
	bibliografia_sugerida VARCHAR(1000) NOT NULL,
	situacao CHAR(1),
	obs_devolucao VARCHAR(1000) NOT NULL,
	data_aprovacao DATE NOT NULL,
	id INT,
	FOREIGN KEY (id) REFERENCES planejamento(id),
	codigo_disc INT,
	FOREIGN KEY (codigo_disc) REFERENCES disciplina(codigo),
	matricula_professor INT,
	FOREIGN KEY (matricula_professor) REFERENCES professor(matricula),
	matricula_coordenador INT,
	FOREIGN KEY (matricula_coordenador) REFERENCES professor(matricula)
)

CREATE TABLE professor (
	nome VARCHAR (60) NOT NULL,
	cep INT, NOT NULL,
	logradouro VARCHAR(100) NOT NULL,
	numero VARCHAR(15) NOT NULL,
	complemento VARCHAR(100),
    bairro VARCHAR(40) NOT NULL,
	cidade VARCHAR(35) NOT NULL,
	uf CHAR(2) NOT NULL,
	id INT, NOT NULL,
	FOREIGN KEY (id) REFERENCES usuario(id)  
)

CREATE TABLE usuario (
	id SERIAL PRIMARY KEY NOT NULL,
	login VARCHAR(20) NOT NULL,
	senha VARCHAR(50) NOT NULL,
	apelido VARCHAR(60) NOT NULL,
	sexo CHAR(1),
	nivel CHAR(1)
)

