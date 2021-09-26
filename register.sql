CREATE DATABASE IF NOT EXISTS register; 
 
CREATE TABLE IF NOT EXISTS users ( 
    id int(11) NOT NULL AUTO_INCREMENT, 
    username varchar(255) NOT NULL, 
    email varchar(255) NOT NULL, 
    password varchar(255) NOT NULL, 
    trn_date datetime NOT NULL, 
    PRIMARY KEY (id)
); 