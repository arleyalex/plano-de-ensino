CREATE TABLE curso (
	numero INT PRIMARY KEY NOT NULL,
	nome VARCHAR (150) NOT NULL,
	sigla CHAR(3) NOT NULL,
	tipo CHAR(1) NOT NULL,
	matricula INT FOREIGN KEY (matricula) REFERENCES (professor)
	)