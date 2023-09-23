CREATE TABLE appointments (
   id INT AUTO_INCREMENT PRIMARY KEY,
   user_id INT NOT NULL,
   appointment_number VARCHAR(4),
   preferred_doctor VARCHAR(255),
   preferred_physician VARCHAR(255),
   reason_for_appointment TEXT,
   diagnosis_file LONGBLOB,
   FOREIGN KEY (user_id) REFERENCES users(id)
);


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    type ENUM('client', 'doctor', 'physician'),
    password VARCHAR(255)
);

