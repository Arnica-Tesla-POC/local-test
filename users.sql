 CREATE TABLE users (
    id INT PRIMARY KEY,
    username VARCHAR(255),
    password VARCHAR(255)
);

INSERT INTO users (id, username, password) VALUES
    (1, 'admin', 'password123'),
    (2, 'user', 'password456');
