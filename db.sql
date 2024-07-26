CREATE DATABASE portfolio;

USE portfolio;

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    message TEXT
);

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    password VARCHAR(255)
);

INSERT INTO admins (username, password) VALUES ('admin', 'password');  -- Replace 'password' with a secure password
