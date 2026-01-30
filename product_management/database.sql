CREATE DATABASE IF NOT EXISTS product_db;
USE product_db;

DROP TABLE IF EXISTS products;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    buying_price INT NOT NULL,
    selling_price INT NOT NULL,
    display VARCHAR(5) NOT NULL
);

INSERT INTO products (name, buying_price, selling_price, display) VALUES
('Samsung', 20000, 25000, 'Yes'),
('Nokia', 10000, 11500, 'Yes'),
('Xiaomi', 12000, 15300, 'Yes'),
('Hidden Product', 5000, 7000, 'No');
