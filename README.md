# curso_php
Aulas do curso de PHP da escola Infoserv
- Primeira aula dia 18-06-2024

------------------------------------------------------------------------------------------------------------------------------

BANCO DE DADOS

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,to%20a%20local%20MySQL%20server
BAIXAR O MARIADB E DBEAVER

sudo service mariadb start
sudo mysql -uroot

SHOW DATABASES;
CREATE DATABASE CURSO_24 (nome do Banco);
CREATE USER 'user1'@localhost IDENTIFIED BY 'password1'; (user1 = nome | password = senha)
GRANT ALL PRIVILEGES ON *.* TO 'user1'@localhost IDENTIFIED BY 'password1';
FLUSH PRIVILEGES;
exit

sudo service mariadb stop
sudo service mariadb start

------------------------------------------------------------------------------------------------------------------------------

DENTRO DO MARIA DB NO DBEAVER

INSERT INTO curso_24.Usuario
(cpf, email, senha)
VALUES('50325675821', 'stephany_silva2000@outlook.com', '1234');

DELETE FROM Usuario WHERE id = 4;

ALTER TABLE curso_24.Usuario DROP COLUMN data_criacao; --> APAGAR UMA COLUNA

ALTER TABLE curso_24.Usuario DROP COLUMN data_atualizacao; --> APAGAR UMA COLUNA

ALTER TABLE curso_24.Usuario ADD COLUMN data_criacao datetime DEFAULT CURRENT_TIMESTAMP NOT NULL;

ALTER TABLE curso_24.Usuario ADD COLUMN data_atualizacao datetime DEFAULT '0001-01-01 00:00:00' NOT NULL ON UPDATE CURRENT_TIMESTAMP;
