CREATE TABLE `buses` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `drivername` varchar(100) NOT NULL UNIQUE,
    `plateno` varchar(100) NOT NULL UNIQUE
)