
-- Table structure for table `register`


CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
   `state`varchar(255) NOT NULL,
   `pack` int(5) NOT NULL,
   `address` varchar(255) NOT NULL,
   `zip` int(5) NOT NULL,
   `gender` char(2) NOT NULL,
   `work` varchar(255) NOT NULL,
  `date_&_time` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
