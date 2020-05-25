CREATE DATABASE IF NOT EXISTS dbaudax;
USE audax;

CREATE TABLE IF NOT EXISTS users(
id		 			serial PRIMARY KEY,
name				varchar(100),
email				varchar(255),
password			varchar(255),
created_at			date,
updated_at			date,
remember_token		varchar(255));


CREATE TABLE IF NOT EXISTS contratos(
id 			serial PRIMARY KEY,
tipo		varchar(255),
clientesid  int NOT NULL
);

CREATE TABLE IF NOT EXISTS clientes(
id 			serial PRIMARY KEY,
contrato_id int(255),
nombre		varchar(255));
CONSTRAINT fk_clientes contratos FOREIGN KEY (contrato_id) REFERENCES ccontrato(id),

