CREATE DATABASE normalizacao;


USE normalizacao;


CREATE TABLE login (
    log_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    log_email VARCHAR(100),
    log_senha VARCHAR(100)
);

CREATE TABLE clientes (
    cli_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cli_nome VARCHAR(100),
    cli_idade INT ,
    cli_cpf VARCHAR(50),
    fk_log_id INT
);

CREATE TABLE endereco (
    end_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    end_cobranca VARCHAR(100),
    end_num_cobranca VARCHAR(10),
    end_cidade_cobranca VARCHAR(100),
    end_entrega VARCHAR(100),
    fk_log_id INT
)