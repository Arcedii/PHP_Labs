-- Создаем базу данных "event_platform", если её еще нет
CREATE DATABASE IF NOT EXISTS event_platform;

-- Используем созданную базу данных
USE event_platform;

-- Создаем таблицу "users" (пользователи)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE (email)
);

-- Создаем таблицу "events" (мероприятия)
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    number_seats INT NOT NULL,
    date DATETIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Создаем таблицу "event_records" (записи на мероприятие)
CREATE TABLE event_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    event_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (event_id) REFERENCES events(id)
);

-- Создаем таблицу "roles" (роли пользователей)
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

-- Создаем таблицу "events" (мероприятия)
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    number_seats INT NOT NULL,
    date DATETIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Создаем таблицу "event_records" (записи на мероприятие)
CREATE TABLE event_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    event_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (event_id) REFERENCES events(id)
);

-- Создаем таблицу "roles" (роли пользователей)
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);


-- Добавляем поле role_id в таблицу users
ALTER TABLE users
ADD COLUMN role_id INT NOT NULL;

-- Связываем поле role_id с таблицей roles
ALTER TABLE users
ADD CONSTRAINT fk_role_id FOREIGN KEY (role_id) REFERENCES roles(id);

