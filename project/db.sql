CREATE DATABASE product_db;

USE product_db;

CREATE TABLE product (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    description TEXT NULL DEFAULT NULL,
    PRIMARY KEY (id)
);

CREATE USER product_db_user@db IDENTIFIED BY 'secret';
GRANT ALL PRIVILEGES ON product_db.* TO product_db_user@db;

INSERT INTO product VALUES (NULL, 'Product One', 'This is product one'),
                           (NULL, 'Second Product', 'A second product here'),
                           (NULL, 'Product #3', ''),
                           (NULL, 'The 4th one', 'Some <b>HTML</b> in the description');