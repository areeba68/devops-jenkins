CREATE TABLE `users` (
    `regno` varchar(100) NOT NULL PRIMARY KEY,
    `name` varchar(100) NOT NULL UNIQUE,
    `phone` varchar(100) NOT NULL UNIQUE,
    `password` varchar(100) NOT NULL,
    `userType` varchar(100) NOT NULL
)