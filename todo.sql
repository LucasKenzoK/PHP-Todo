CREATE DATABASE IF NOT EXISTS todo;
USE todo;

CREATE TABLE IF NOT EXISTS tasks (
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    task VARCHAR(255) NOT NULL
);