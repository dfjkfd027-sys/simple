CREATE TABLE users (
  id INT PRIMARY KEY,
  name VARCHAR(50),
  admin INT
);

INSERT INTO users VALUES
(1, 'admin', 1),
(2, 'ahmad', 0),
(3, 'mohammad', 0),
(4, 'sara', 0),
(5, 'root', 1),
(6, 'test', 0),
(7, 'ahmad', 1);
