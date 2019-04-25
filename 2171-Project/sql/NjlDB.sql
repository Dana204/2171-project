CREATE DATABASE IF NOT EXISTS NjlDB;
CREATE TABLE form(
   id INT AUTO_INCREMENT,
   fname VARCHAR(20),
   lname VARCHAR(20),
   email VARCHAR(320),
   department VARCHAR(20),
   location VARCHAR(20),
   category VARCHAR(20),
   description VARCHAR(256),
   PRIMARY KEY(id));	
