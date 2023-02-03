CREATE DATABASE database_name;

USE database_name;

CREATE TABLE table_name (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL
);

INSERT INTO table_name (name, email)
VALUES ('John Doe', 'john@example.com'),
       ('Jane Doe', 'jane@example.com');
