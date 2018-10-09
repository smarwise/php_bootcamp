CREATE TABLE ft_table (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    login varchar(255) DEFAULT 'toto' NOT NULL,
    `group` ENUM('staff', 'student', 'other') NOT NULL,
    creation_date DATE NOT NULL
);