

CREATE TABLE IF NOT EXISTS `payment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_name` varchar(50) NOT NULL,
  `cardno` int(16) NOT NULL,
  `cvv` int(15) NOT NULL,
  `date_&_time` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `payment_details` (`id`, `card_name`, `cardno`, `cvv`) VALUES
(1, 'haruna yusuf', '23456790098', '345');