START TRANSACTION;

CREATE TABLE IF NOT EXISTS parks (
                                     id BIGINT AUTO_INCREMENT PRIMARY KEY,
                                     address_park VARCHAR(255) NOT NULL UNIQUE
    );

CREATE TABLE IF NOT EXISTS cars (
                                    id BIGINT AUTO_INCREMENT PRIMARY KEY,
                                    park_id BIGINT,
                                    model VARCHAR(100) NOT NULL,
    price DECIMAL(8, 2) UNSIGNED NOT NULL,
    FOREIGN KEY (park_id) REFERENCES parks(id) ON DELETE SET NULL
    );

CREATE TABLE IF NOT EXISTS drivers (
                                       id BIGINT AUTO_INCREMENT PRIMARY KEY,
                                       car_id BIGINT,
                                       name VARCHAR(70) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    FOREIGN KEY (car_id) REFERENCES cars(id) ON DELETE SET NULL
    );

CREATE TABLE IF NOT EXISTS customers (
                                         id BIGINT AUTO_INCREMENT PRIMARY KEY,
                                         name VARCHAR(70) NOT NULL,
    phone VARCHAR(30) NOT NULL
    );

CREATE TABLE IF NOT EXISTS orders (
                                      id BIGINT AUTO_INCREMENT PRIMARY KEY,
                                      driver_id BIGINT,
                                      customer_id BIGINT,
                                      start MEDIUMTEXT NOT NULL,
                                      finish MEDIUMTEXT NOT NULL,
                                      total DECIMAL(8, 2) UNSIGNED NOT NULL,
    FOREIGN KEY (driver_id) REFERENCES drivers(id) ON DELETE SET NULL,
    FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE SET NULL
    );

COMMIT;