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