<?php

include('db.php');

$sql_admin = "CREATE TABLE Admin (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    name VARCHAR(255) NOT NULL
)";

$sql_custormer = "CREATE TABLE Customer (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    phone INT,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    address VARCHAR(255)
)";

$sql_category = "CREATE TABLE Category (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE
)";

$sql_product = "CREATE TABLE Product (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price INT NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES category(id)
)";

$sql_invoice = "CREATE TABLE Invoice (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date_create DATETIME,
    customer_id INT NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customer(id)
)";

$sql_invoice_item = "CREATE TABLE invoice_product (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    invoice_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (invoice_id) REFERENCES invoice(id),
    FOREIGN KEY (product_id) REFERENCES product(id)
)";

if (mysqli_query($con, $sql_custormer)
    || mysqli_query($con, $sql_category)
    || mysqli_query($con, $sql_admin)
    || mysqli_query($con, $sql_product)
    || mysqli_query($con, $sql_invoice)
    || mysqli_query($con, $sql_invoice_item)
    ) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

mysqli_close($con);
