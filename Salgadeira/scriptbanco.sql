CREATE DATA BASE saguadim;
USE saguadim;

-- Criação da tabela de usuarios
CREATE TABLE usuarios (
    usu_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY
    usu_login VACHAR(20) NOT NULL,
    usu_senha VARCHAR(50) NOT NULL,
    usu_status CHAR(1) NOT NULL,
    usu_key VACHAR(10) NOT NULL
);
-- Criação da tela de Cliente
CREATE TABLE cliente (
    cli_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cli_nome VARCHAR(50) NOT NULL,
    cli_email VARCHAR(100) NOT NULL,
    cli_telefone BIGINT NOT NULL,
    cli_cpf VARCHAR(20) NOT NULL,
    cli_curso VARCHAR(50) NOT NULL,
    cli_sala INT NOT NULL,
    cli_status CHAR(1) NOT NULL,
    cli_saldo FLOAT(10,2) NOT NULL
);