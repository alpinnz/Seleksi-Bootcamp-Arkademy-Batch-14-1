-- Buat database
CREATE DATABASE toko;

-- mengunakan database toko
USE toko;

-- Buat Table Product berserta atributnya
CREATE TABLE Product(
    id int PRIMARY KEY NOT NULL,
    name varchar(25) NOT NULL,
    price int NOT NULL,
    id_category int NOT NULL,
    id_cashier int NOT NULL
);

-- Buat Table Category berserta atributnya
CREATE TABLE Category(
    id int PRIMARY KEY NOT NULL,
    name varchar(25) NOT NULL
);

-- Buat Table Cashier berserta atributnya
CREATE TABLE Cashier(
    id int PRIMARY KEY NOT NULL,
    name varchar(25) NOT NULL
);

ALTER TABLE Product MODIFY id INT UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE Category MODIFY id INT UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE Cashier MODIFY id INT UNSIGNED NOT NULL AUTO_INCREMENT;

-- menambahkan Foregnkey
ALTER TABLE Product ADD FOREIGN KEY (id_category) REFERENCES Category(id);
ALTER TABLE Product ADD FOREIGN KEY (id_cashier) REFERENCES Cashier(id);

-- menambahnakn data (table yang relasi dengan forenky haris terisi dahulu)
INSERT INTO Category (id, name) 
VALUES 
('1', 'Food'),
('2', 'Drink');

SELECT * FROM Category;

-- menambahnakn data (table yang relasi dengan forenky haris terisi dahulu)
INSERT INTO Cashier (id, name) 
VALUES 
('1', 'Pevita Pearce'),
('2', 'Raisa Andriana'),
('3', 'Alfin NoviAji');

SELECT * FROM Cashier;

-- menambahnakn data
INSERT INTO Product (id, name, price, id_category, id_cashier) 
VALUES 
('1', 'Latte', '10000', '2', '1'),
('2', 'Cake', '20000', '1', '2'),
('3', 'Puding', '45000', '1','3');

SELECT * FROM Product;

-- Buatlah query untuk menghasilkan tampilan seperti ini :
SELECT
Cashier.name AS cashier, 
Product.name AS product, 
Category.name AS category, 
Product.price AS price
FROM Product 
INNER JOIN Category ON Product.id_category = Category.id 
INNER JOIN Cashier ON Product.id_cashier = Cashier.id ;

