CREATE DATABASE IF NOT EXISTS planets_db;
USE planets_db;

CREATE TABLE IF NOT EXISTS planets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    size_in_km VARCHAR(50) NOT NULL
);

INSERT INTO planets (name, description, size_in_km) VALUES
('Mars', 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.', '6779'),
('Venus', 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.', '12104'),
('Earth', 'Our home planet is the third planet from the Sun, and the only place we know of so far that’s inhabited by living things.', '12742');