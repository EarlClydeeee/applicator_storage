CREATE DATABASE IF NOT EXISTS storage_system;
USE storage_system;

CREATE TABLE applicators (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    type VARCHAR(50) NOT NULL,
    output_count INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO applicators (name, type, output_count) VALUES
('Applicator A', 'Strip Blade', 500000),
('Applicator B', 'Cut Blade', 1200000),
('Applicator C', 'Custom', 300000);
