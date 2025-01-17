create database cigarettes_db;
use cigarettes_db;

create table prices (
    id int AUTO_INCREMENT primary key,
    type varchar(255) not null,
    brand varchar(255) not null,
    price decimal(10,2) not null,
    cigarettes_per_pack int not null
);

insert into prices (type, brand, price, cigarettes_per_pack) values
('Industrielle', 'Benson & Edges', 12.0, 20),
('Industrielle', 'Camel Essential', 11.50, 20),
('Industrielle', 'Camel Blue', 11.50, 20),
('Industrielle', 'Chesterfield', 12.0, 20),
('Industrielle', 'Gauloises', 11.50, 20),
('Industrielle', 'Gitanes', 13.60, 20),
('Industrielle', 'Malboro Red', 12.50, 20),
('Industrielle', 'Malboro Gold', 12.50, 20),
('Industrielle', 'Lucky Strike', 11.50, 20),
('Industrielle', 'Phillip Morris', 12.0, 20),
('Industrielle', 'Vogue', 12.0, 20),
('Industrielle', 'Winston', 11.50, 20),
('Roulée', 'Amsterdamer', 16.0, 65),
('Roulée', 'Camel Essential', 17.10, 65),
('Roulée', 'Camel Jaune', 17.10, 65),
('Roulée', 'Fleur du Pays', 17.10, 65),
('Roulée', 'Golden Virginia original', 24.0, 85),
('Roulée', 'Malboro Gold', 17.5, 65),
('Roulée', 'Pueblo', 16.90, 65),
('Roulée', 'Winston Classic', 17.10, 65),
('Roulée', 'Winston White', 17.50, 65),
('Roulée', '1637', 14.0, 85);