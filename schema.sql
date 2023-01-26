CREATE DATABASE api
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;
USE api;

CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT,
    creation_time datetime NOT NULL,
    fio varchar(122) NOT NULL,
    email varchar(64) NOT NULL UNIQUE,
    phone varchar(64) NOT NULL UNIQUE,
    password varchar(64) NOT NULL,
    filejson_path varchar(122),
    filebd_path varchar(122)
);