CREATE TABLE IF NOT EXISTS `product_table` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`description` varchar(255) NOT NULL,
`image` varchar(255) NOT NULL,
`price` double(10,2) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


