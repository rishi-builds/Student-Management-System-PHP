-- CREATE DATABASE student_db;
CREATE DATABASE IF NOT EXISTS student_db;
USE student_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    roll VARCHAR(20),
    course VARCHAR(50),
    email VARCHAR(50)
);