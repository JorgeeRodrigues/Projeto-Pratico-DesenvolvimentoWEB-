
CREATE DATABASE petshop;


CREATE TABLE clientes(

id SERIAL PRIMARY KEY,
nome VARCHAR(100),
cpf VARCHAR(20),
telefone VARCHAR(20),
cep VARCHAR(10),
rua VARCHAR(100),
bairro VARCHAR(100),
cidade VARCHAR(100),
estado VARCHAR(2)

);


CREATE TABLE pets(

id SERIAL PRIMARY KEY,
nome_pet VARCHAR(100),
especie VARCHAR(50),
idade INT,
dono_pet VARCHAR(100)

);