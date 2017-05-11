CREATE TABLE planejamento (
	id  INT PRIMARY KEY,
	ano INT NOT NULL,
	semestre INT NOT NULL,
	data_inicio DATE NOT NULL,
	data_termino DATE NOT NULL,
	situacao CHAR (1)
	
)