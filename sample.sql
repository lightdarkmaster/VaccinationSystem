CREATE TABLE `user` (
  `userid` INT(100) NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(30) NOT NULL,
  `lastname` VARCHAR(30) NOT NULL,
  `middlename` VARCHAR(30) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `firstdose` DATE NOT NULL,
  `seconddose` DATE NOT NULL,

PRIMARY KEY(`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;