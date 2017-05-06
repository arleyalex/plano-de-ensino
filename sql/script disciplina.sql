CREATE DATABASE disciplina
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Portuguese_Brazil.1252'
       LC_CTYPE = 'Portuguese_Brazil.1252'
       CONNECTION LIMIT = -1;

CREATE TABLE curso (
	codigo INT PRIMARY KEY NOT NULL,
	nome VARCHAR (150) NOT NULL,
	ch INT(60) NOT NULL,
	ementa VARCHAR(600) NOT NULL,
	objetivo VARCHAR (600) NOT NULL,
	bibliografia_basica VARCHAR (200) NOT NULL,
	bibliografia_complementar VARCHAR (200) NOT NULL,
	)
	