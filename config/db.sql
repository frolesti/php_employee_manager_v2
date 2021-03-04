DROP DATABASE IF EXISTS Employee_Management;
CREATE DATABASE IF NOT EXISTS employee_management;
USE employee_management;
SELECT 'CREATING DATABASE STRUCTURE' as 'INFO';

DROP TABLE IF EXISTS employees,
                    users;
/*!50503 set default_storage_engine = InnoDB */;
/*!50503 select CONCAT('storage engine: ', @@default_storage_engine) as INFO */;

CREATE TABLE employees (
    emp_no      INT             NOT NULL AUTO_INCREMENT,
    employee_name  VARCHAR(14)     NOT NULL,
    employee_last_name  VARCHAR(16)     NOT NULL,
    employee_email  VARCHAR(40)     NOT NULL,
    employee_gender      ENUM ('man','woman')  NOT NULL,
    employee_city   VARCHAR(16)     NOT NULL,
    employee_street_address   VARCHAR(16)     NOT NULL,
    employee_state   VARCHAR(16)     NOT NULL,
    employee_age   INT      NOT NULL,
    employee_postal_code   INT      NOT NULL,
    employee_phone_number  VARCHAR(40)      NOT NULL,
    PRIMARY KEY (emp_no)
);

CREATE TABLE users (
    user_no      INT             NOT NULL AUTO_INCREMENT,
    user_name    VARCHAR(40)     NOT NULL UNIQUE,
    user_password   VARCHAR(200)      NOT NULL,
    user_email   VARCHAR(40)             NOT NULL,
    PRIMARY KEY (user_no)
);
INSERT INTO employees (employee_name, employee_last_name, employee_email, employee_gender, employee_city, employee_street_address, employee_state, employee_age, employee_postal_code, employee_phone_number) VALUES
('Rack', 'Lei', 'jackon@network.com', 'man', 'San', '126', 'CA', '24', '394221', '7383627627'),
('John', 'Doe', 'jhondoe@foo.com', 'man', 'New York', '89', 'WA', '34', '09889', '1283645645'),
('Leila', 'Mills', 'mills@leila.com', 'woman', 'San Diego', '55', 'CA', '29', '098765', '9983632461'),
('Richard', 'Desmond', 'dismond@foo.com', 'man', 'Salt lake city', '30', 'UT', '90', '457320', '90876987654'),
('Susan', 'Smith', 'susanmith@baz.com', 'woman', 'Louisville', '28',  'KNT', '43', '445321', '224355488976'),
('Brad', 'Simpson', 'brad@foo.com', 'man', 'Atlanta', '40', 'GEO','128', '394221', '6854634522'),
('Neil', 'Walker', 'walkerneil@baz.com',  'man', 'Nashville','42','TN', '1',  '90143', '45372788192'),
('Robert', 'Thomson', 'rthomson@network.com', 'man', 'New Orleans', '24', 'LU','126',  '63281', '91232876454');

INSERT INTO users (user_name, user_password, user_email) VALUES
('admin', '$2y$10$nuh1LEwFt7Q2/wz9/CmTJO91stTBS4cRjiJYBY3sVCARnllI.wzBC', 'admin@assemblerschool.com');
SELECT * FROM employees;