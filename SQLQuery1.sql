DROP TABLE IF EXISTS medical_system;
go;
CREATE DATABASE medical_system;
go;

-- DROP TABLE IF EXISTS admins;
-- CREATE TABLE admins(
-- 	admin_id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
-- 	admin_email VARCHAR(255) NOT NULL,
-- 	admin_password VARCHAR(255) NOT NULL,
-- );
-- go;
-- INSERT INTO admins VALUES (1,"admin@admin.com","admin123");

-- DROP TABLE IF EXISTS countries;
-- CREATE TABLE countries(
-- 	country_id INT IDENTITY(1,1) PRIMARY KEY,
-- 	country VARCHAR(50) NOT NULL
-- );
-- go;
-- INSERT INTO countries VALUES (1,"Colombia"),(1,"Mexico");

-- DROP TABLE IF EXISTS patients;
-- CREATE TABLE patients(
-- 	patient_id INT IDENTITY(1,1) PRIMARY KEY,
-- 	name VARCHAR(15) NOT NULL,
-- 	surname VARCHAR(15) NOT NULL,
-- 	email VARCHAR(255) NOT NULL,
-- 	mobile INT NOT NULL,
-- 	password VARCHAR(100) NOT NULL,
-- 	dob DATE NOT NULL,
-- 	country_id int FOREIGN KEY REFERENCES countries(country_id),
-- );
-- INSERT INTO patients VALUES (1,"David", "Gallagher", "david_gallagher@gmail.com", "91442930","davidgalla2022", "2000-10-10",1);
-- go;

-- DROP TABLE IF EXISTS doctors;
-- CREATE TABLE doctors(
-- 	doctor_id INT IDENTITY(1,1) PRIMARY KEY,
-- 	doc_email VARCHAR(255) NOT NULL,
-- 	doc_name VARCHAR(255) NOT NULL,
-- 	doc_surname VARCHAR(255) NOT NULL,
-- 	doc_mobile INT NOT NULL,
-- 	doc_password VARCHAR(100) NOT NULL,
-- 	doc_dob DATE NOT NULL,
-- 	country_id int FOREIGN KEY REFERENCES countries(country_id),
-- );
-- INSERT INTO patients VALUES (1,"Patricia", "McTominay", "patt_mctominay@gmail.com", "99005254", "patr1_22MC", "1990-12-03",2);
-- go;


-- DROP TABLE IF EXISTS appointments;
-- CREATE TABLE appointments(
-- 	appointment_id INT IDENTITY(1,1) PRIMARY KEY,
-- 	doc_id int FOREIGN KEY REFERENCES doctors(doctor_id),
-- 	patient_id int FOREIGN KEY REFERENCES patients(patient_id),
-- 	appo_creationDate DATE,
-- 	appo_date DATE
-- );
-- INSERT INTO appointments VALUES (1,1, 1, "2023-05-22", "2023-05-20", "1990-12-03");
-- go;

-- DROP TABLE IF EXISTS users;
-- CREATE TABLE users(
-- 	email VARCHAR(255) NOT NULL, 
-- 	numberPhone INT ,
-- 	usersType  CHAR(1) NOT NULL
-- );
-- go;
-- INSERT INTO users VALUES ("admin@admin.com",NULL,'a'),
-- ("patt_mctominay@gmail.com","99005254",'p'),
-- ("david_gallagher@gmail.com","91442930",'d');
