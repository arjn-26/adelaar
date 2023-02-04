create database loginss;
use loginss;
CREATE TABLE `loginss` (
`user_id` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(45) NOT NULL,
`dob` date NOT NULL,
`password` varchar(45) NOT NULL,
`fullname` varchar(45) NOT NULL,
`email` varchar(45) NOT NULL,
PRIMARY KEY (`user_id`)
);
INSERT INTO loginss (username,dob,password,fullname,email) VALUES ('Alok','1998/10/2','happy','Alok varma','alpk@gmail.com');
INSERT INTO loginss (username,dob,password, fullname,email) VALUES ('Vasuzz','2000/10/2','hapy','Vasu prakash','vasup@gmail.com');

