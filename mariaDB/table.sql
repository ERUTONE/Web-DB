CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, email, password)
VALUES
    ('user1', 'user1@example.com', 'password123'),
    ('user2', 'user2@example.com', 'password456');