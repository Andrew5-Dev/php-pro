START TRANSACTION;

DROP TABLE IF EXISTS drivers;

ALTER TABLE orders MODIFY COLUMN start DATE;
ALTER TABLE customers RENAME COLUMN phone TO contact_number;

INSERT INTO parks (address_park)
VALUES ('вул. Хрещатик, 12'),
       ('вул. Лесі Українки, 45'),
       ('вул. Шевченка, 44');


INSERT INTO cars (park_id, model, price)
VALUES (1, 'BMW X5', 80000.00),
       (2, 'Honda Accord', 30000.00),
       (3, 'Audi A4', 50000.00);

INSERT INTO drivers (car_id, name, phone)
VALUES (1, 'Іван Петров', '063-123-4567'),
       (2, 'Марія Іванова', '097-654-3210'),
       (3, 'Петро Петренко', '050789-0123');

INSERT INTO customers (name, phone)
VALUES ('Миколай Кузьмич', '066-222-3333'),
       ('Олександр Петренко', '066-555-6666'),
       ('Іван Іванов', '050-888-9999');

INSERT INTO orders (driver_id, customer_id, start, finish, total)
VALUES (1, 1, '2024-11-28', '2024-11-28', 150.00),
       (2, 2, '2024-11-28', '2024-11-28', 200.00),
       (3, 3, '2024-11-28', '2024-11-28', 180.00);

UPDATE parks
SET address_park = 'вул. Микитенка, 89'
WHERE id = 1;

DELETE
FROM customers
WHERE id = 3;


SELECT *
FROM parks;

SELECT drivers.name AS driver_name, cars.model, cars.price
FROM drivers
         JOIN cars ON drivers.car_id = cars.id;

SELECT customers.name AS customer_name, orders.total
FROM customers
         JOIN orders ON customers.id = orders.customer_id;

SELECT drivers.name AS driver_name, orders.total
FROM drivers
         JOIN orders ON drivers.id = orders.driver_id;

SELECT orders.id AS order_id, drivers.name AS driver_name, customers.name AS customer_name, orders.total
FROM orders
         JOIN drivers ON orders.driver_id = drivers.id
         JOIN customers ON orders.customer_id = customers.id;

SELECT cars.model, parks.address_park
FROM cars
         JOIN parks ON cars.park_id = parks.id;

SELECT cars.model, parks.address_park
FROM cars
         JOIN parks ON cars.park_id = parks.id
WHERE parks.address_park = 'вул. Лесі Українки, 45';

ALTER TABLE customers ADD COLUMN email VARCHAR(100);

ALTER TABLE drivers MODIFY COLUMN phone VARCHAR(50);

SELECT park_id, COUNT(*) AS car_count
FROM cars
GROUP BY park_id;

SELECT customers.name, orders.total
FROM customers
         JOIN orders ON customers.id = orders.customer_id
WHERE orders.total > 150;

SELECT drivers.name, cars.model
FROM drivers
         JOIN cars ON drivers.car_id = cars.id
WHERE cars.price > 40000;

SELECT drivers.name, cars.model
FROM drivers
         JOIN cars ON drivers.car_id = cars.id
WHERE cars.price < 50000;

SELECT drivers.name, cars.model
FROM drivers
         JOIN cars ON drivers.car_id = cars.id
WHERE cars.price BETWEEN 30000 AND 60000;

COMMIT;