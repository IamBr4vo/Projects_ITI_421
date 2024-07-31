CREATE DATABASE ticoride_project;

USE ticoride_project;

CREATE TABLE IF NOT EXISTS users(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    confirm_password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS rides (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_id INT NOT NULL,
    ride_name VARCHAR(255) NOT NULL,
    start_from VARCHAR(255) NOT NULL,
    end_to VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    departure_time TIME NOT NULL,
    arrival_time TIME NOT NULL,
    days VARCHAR(255) not NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE user_settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    full_name VARCHAR(255),
    speed_average INT,
    description TEXT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);