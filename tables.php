CREATE TABLE loans (
    loan_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    loan_amount DECIMAL(10, 2),
    interest_rate DECIMAL(5, 2),
    duration INT, -- duration in months
    status ENUM('pending', 'approved', 'rejected', 'repaid') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    users_id INT(11),
    PRIMARY KEY(loan_id), 
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);