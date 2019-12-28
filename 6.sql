CREATE DATABASE shop;

CREATE TABLE Product(
    id int PRIMARY KEY NOT NULL,
    name varchar(25) NOT NULL,
    price int NOT NULL,
    id_category int NOT NULL,
    id_cashier int NOT NULL
);

CREATE TABLE Category(
    id int PRIMARY KEY NOT NULL,
    name varchar(25) NOT NULL
);

CREATE TABLE Cashier(
    id int PRIMARY KEY NOT NULL,
    name varchar(25) NOT NULL
);

ALTER TABLE Product ADD FOREIGN KEY (id_category) REFERENCES Category(id);
ALTER TABLE Product ADD FOREIGN KEY (id_cashier) REFERENCES Cashier(id);

INSERT INTO Category (id, name) 
VALUES 
('1', 'Food'),
('2', 'Drink');

INSERT INTO Cashier (id, name) 
VALUES 
('1', 'Pevita Pearce'),
('2', 'Raisa Andriana'),
('3', 'Alfin NoviAji');

INSERT INTO Product (id, name, price, email, id_category, id_cashier) 
VALUES 
('1', 'Latte', '10000', '2', '1'),
('2', 'Cake', '20000', '1', '2'),
('3', 'Puding', '45000', '1','3');


