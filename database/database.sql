CREATE DATABASE php_class;

CREATE TABLE user (
    pk_user INT PRIMARY KEY AUTO_INCREMENT,
    user_email VARCHAR(100) NOT NULL,
    password_user VARCHAR(255) NOT NULL,
    is_admin BIT(1) DEFAULT 0
);