-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 11:10 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dragonfoods`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ADD_CATEGORY` (`CAT_Name` VARCHAR(250))  BEGIN
INSERT INTO category_table(cat_name) VALUES (CAT_Name);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ADD_PRODUCT` (IN `product_name` VARCHAR(250), IN `category` VARCHAR(250), IN `description` VARCHAR(250), IN `price` DOUBLE, IN `size` INT(100), IN `satus` VARCHAR(100))  BEGIN
INSERT INTO produc_table(p_name,category,description,price,size,satus) VALUES (product_name,category,description,price,size,satus);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Average_Price` (IN `id` INT(11))  begin
     declare pric Double;
     declare addi Double;
     declare fiv Double;
     set addi = 0;
     set addi = 5;
     set fiv = 5;
    
     myloop: WHILE addi < 1000 DO
     if addi > 1000 THEN
      LEAVE myloop;
     END if;     
     select price from produc_table WHERE p_id = id into pric;
     set addi = pric + fiv;
     update produc_table set price = addi where p_id = id; 
     END WHILE myloop;
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CAT_Change` (`id` INT(11))  begin
    DECLARE result varchar(250);
	select cat_name INTO result from category_table where cat_id = id;

	if result = 'Pizza' THEN
			update category_table set cat_name = 'Burger' where cat_id = id;

	elseif result = 'Burger' THEN
			update category_table set cat_name = 'Pizza' where cat_id = id;

    end if;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CAT_DELETE` (IN `C_ID` INT(11))  BEGIN

  DELETE FROM category_table WHERE cat_id=C_ID;

  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CAT_READ` ()  BEGIN
Select * from category_table order by cat_id DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CAT_UPDATE` (IN `c_id` INT(11), `C_Name` VARCHAR(250))  begin

  update category_table set cat_name = C_Name where cat_id = c_id;
	
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Change_Price` (IN `id` INT(11))  begin
    DECLARE p_price DOUBLE;
    DECLARE u_price DOUBLE;
    
    DECLARE less_p DOUBLE;
    DECLARE more_p DOUBLE;
    
    set less_p = 700;
    set more_p = 800;
    
	select price INTO p_price from produc_table where p_id = id;

	if p_price < less_p THEN
            set u_price = p_price + 10;
			update produc_table set price = u_price where p_id = id;

	elseif p_price > more_p THEN
            set u_price = p_price - 10;
			update produc_table set price = u_price where p_id = id;

    end if;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MANAGER_READ` ()  NO SQL
BEGIN
Select * from manager_info order by id DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ORDER_DELETE` (IN `id` INT(11))  BEGIN

  DELETE FROM orders_table WHERE o_id = id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ORDER_READ` ()  BEGIN
Select * from orders_table order by o_id DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ORDER_UPDATE` (IN `id` INT(11), `product_name` VARCHAR(250), `price` DOUBLE, `quantitys` INT(4), `t_prices` DOUBLE)  begin

  update orders_table set p_Name = product_name, p_price = price, quantity = quantitys, t_price = t_prices  
  where o_id   = id;
	
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `name`, `email`, `password`) VALUES
(172, 'Akash Sheikh', 'akash@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`cat_id`, `cat_name`) VALUES
(36, 'oil'),
(37, 'T-Shirt'),
(38, 'chair');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `u_name`, `email`, `password`) VALUES
(1, 'SKY FAR', 'akashahmed628@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Devil Sakib', 'devilsakib@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'raihan', 'raihan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `manager_info`
--

CREATE TABLE `manager_info` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `age` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_info`
--

INSERT INTO `manager_info` (`id`, `user_name`, `address`, `phone_number`, `age`, `email`, `password`, `status`, `picture`) VALUES
(53, 'akash', 'pangsa', '0198646732', '25', 'akash@gmail.com', '202cb962ac59075b964b07152d234b70', 'true', ''),
(55, 'raihan', 'feni', '01851932715', '32', 'ruyhanur@gmail.com', '202cb962ac59075b964b07152d234b70', 'true', ''),
(65, 'SkyFar', 'asas', '12345678', '22', 'rounikniloy628@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'false', '1585644942_test.png'),
(66, 'SkyFar', 'asas', '12345678', '22', 'rounikniloy628@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'false', '1585644966_test.png'),
(67, 'SkyFar', 'cvxvsd', '12345678', '219', 'akashahmed628@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'false', '1585759491_IMG_1754.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `orders_table`
--

CREATE TABLE `orders_table` (
  `o_id` int(11) NOT NULL,
  `p_Name` varchar(250) NOT NULL,
  `p_price` double NOT NULL,
  `quantity` int(4) NOT NULL,
  `t_price` double NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produc_table`
--

CREATE TABLE `produc_table` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` double NOT NULL,
  `size` varchar(100) NOT NULL,
  `img_1` varchar(250) NOT NULL,
  `img_2` varchar(250) NOT NULL,
  `img_3` varchar(250) NOT NULL,
  `img_4` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produc_table`
--

INSERT INTO `produc_table` (`p_id`, `p_name`, `category`, `description`, `price`, `size`, `img_1`, `img_2`, `img_3`, `img_4`, `status`) VALUES
(22, 'Table', 'chair', 'vghvvb', 1000, 'Mid', '1585946401_92160473_2312705242355164_3058578002553077760_n.jpg', '1585946401_91786969_2615203415358193_6868805488411148288_o.png', '1585946401_91531229_2938080939548592_3861444176293920768_o.jpg', '1585946401_91560370_2627025990868840_6486741153562492928_n.jpg', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `manager_info`
--
ALTER TABLE `manager_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_table`
--
ALTER TABLE `orders_table`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `produc_table`
--
ALTER TABLE `produc_table`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manager_info`
--
ALTER TABLE `manager_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `orders_table`
--
ALTER TABLE `orders_table`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produc_table`
--
ALTER TABLE `produc_table`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders_table`
--
ALTER TABLE `orders_table`
  ADD CONSTRAINT `orders_table_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `produc_table` (`p_id`),
  ADD CONSTRAINT `orders_table_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
