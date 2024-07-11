-- create database

DROP DATABASE IF EXISTS webapp;
CREATE DATABASE IF NOT EXISTS webapp;
USE webapp;

-- create table

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users(
     userId bigint(11) NOT NULL AUTO_INCREMENT,
     fullname varchar(50) NOT NULL DEFAULT'',
     username varchar(50) NOT NULL DEFAULT'',
     email varchar(50) NOT NULL DEFAULT'',
     password varchar(50) NOT NULL DEFAULT'',
     created bignit(10) NOT NULL DEFAULT 0,
     update bignit(10) NOT NULL DEFAULT 0, 
     UNIQUE KEY (username),
     UNIQUE KEY (email),
     PRIMARY KEY (userId),
    
);

