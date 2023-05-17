DROP TABLE IF EXISTS medical_system;
go
CREATE DATABASE medical_system;
go
DROP TABLE IF EXISTS countries;
CREATE TABLE countries(
	country_id INT IDENTITY(1,1) PRIMARY KEY,
	country VARCHAR(50) NOT NULL
)

DROP TABLE IF EXISTS patients;
CREATE TABLE patients(
	patient_id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	patient_email VARCHAR(255) NOT NULL,
	user_mobile INT NOT NULL ,
	user_session VARCHAR(2) NOT NULL
)

DROP TABLE IF EXISTS patients;
CREATE TABLE patients(
	patient_id INT IDENTITY(1,1) PRIMARY KEY,
	patient_name VARCHAR(15) NOT NULL,
	patient_surname VARCHAR(15) NOT NULL,
	patient_email VARCHAR(255) NOT NULL,
	patient_mobile INT NOT NULL,
	patient_password VARCHAR(100) NOT NULL,
	patient_dob DATE NOT NULL,
	country_id int FOREIGN KEY REFERENCES countries(country_id),
);

DROP TABLE IF EXISTS doctors;
CREATE TABLE doctors(
	doctor_id INT IDENTITY(1,1) PRIMARY KEY,
	doc_email VARCHAR(255) NOT NULL,
	doc_name VARCHAR(255) NOT NULL,
	doc_surname VARCHAR(255) NOT NULL,
	doc_mobile INT NOT NULL,
	doc_password VARCHAR(100) NOT NULL,
	doc_dob DATE NOT NULL,
	country_id int FOREIGN KEY REFERENCES countries(country_id),
);


DROP TABLE IF EXISTS appointments;
CREATE TABLE appointments(
	appointment_id INT IDENTITY(1,1) PRIMARY KEY,
	doc_id int FOREIGN KEY REFERENCES doctors(doctor_id),
	patient_id int FOREIGN KEY REFERENCES patients(patient_id),
	appo_creationDate DATE,
	appo_date DATE
);