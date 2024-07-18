CREATE DATABASE asset_management;

USE asset_management;

CREATE TABLE assets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    asset_name VARCHAR(255) NOT NULL,
    asset_type VARCHAR(100) NOT NULL,
    branch VARCHAR(100),
    company VARCHAR(100),
    brand VARCHAR(100),
    serial_number VARCHAR(100)
);

CREATE TABLE asset_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    asset_name VARCHAR(255) NOT NULL,
    asset_type VARCHAR(100) NOT NULL,
    department VARCHAR(100),
    requester_name VARCHAR(100),
    request_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE asset_complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    asset_id INT,
    complaint_details TEXT NOT NULL,
    complaint_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (asset_id) REFERENCES assets(id)
);
