CREATE DATABASE testePHP;

CREATE TABLE usuario (
    pk_usuario INT PRIMARY KEY AUTO_INCREMENT,
    email_usuario VARCHAR(100) NOT NULL,
    senha_usuario VARCHAR(16) NOT NULL,
    eh_adm_usuario BIT(1) DEFAULT 0
);