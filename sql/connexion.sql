CREATE TABLE administrateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO administrateurs (username, email, password) 
VALUES ('administrateur', 'admin@exemple.com', 'administrateur');
