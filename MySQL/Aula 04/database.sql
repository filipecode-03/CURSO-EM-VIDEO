drop DATABASE;

DROP TABLE;

CREATE DATABASE cadastro
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE nome_do_banco_de_dados;

CREATE TABLE pessoas (
    id int NOT NULL AUTO_INCREMENT,    
    nome VARCHAR(30) NOT NULL,
    nascimento date,
    sexo enum('m', 'f'),
    peso DECIMAL(5,2),
    altura DECIMAL(3,2),
    nacionalidade VARCHAR(20) DEFAULT 'Brasil',
    PRIMARY KEY (id)
)DEFAULT CHARSET = utf8;