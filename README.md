# Open MariaDB and run 'mysql -u root -p -h 127.0.0.1' by default password="" and click enter

# Enter password:

# Welcome to the MariaDB monitor. Commands end with ; or \g.

# Your MariaDB connection id is 8

# Server version: 10.4.8-MariaDB mariadb.org binary distribution

# then run MYSQL Commands to create database and the tables for the ecommerce application

create database ecommerce;

use ecommerce;

create table user_info(
First_Name char(7) not null,
Second_Name char(7) not null,
Username varchar(30) not null,
Password varchar(10) not null,
ID_Number int(8) not null,
Email varchar(30) not null,
Phone_Number int(10) not null,
County char(20) not null,
Gender char(6) not null,
Age int(2) not null,
primary key(ID_Number)
);

create table products(
product_ID int(10) AUTO_INCREMENT not null,
product_name varchar(50) not null,
image varchar(80) not null,
old_price int(10) not null,
new_price int(10) not null,
primary key(product_ID)
);

create table orders_purchased(
ID_Number int(8) not null,
Product_ID int(10) not null,
Order_ID int(10) AUTO_INCREMENT not null,
primary key(order_ID)
);

create table purchase_history(
ID_Number int(8) not null,
Product_ID int(10) not null,
Order_Time datetime not null
);

create table add_to_cart(
ID_Number int(8) not null,
Product_ID int(10) not null
);

show tables;
