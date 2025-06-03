This is a simple example of a User Registration web application

It assumes XAMPP is running with Apache and MySQL started.

The user should have created a user_registration database with one table for users
  CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    silly_number VARCHAR(16) NOT NULL
  );

  ![image](https://github.com/user-attachments/assets/7484658b-5635-4d73-979e-757fb0505a2d)

The database will store the information, include the encrypted version of the password.
