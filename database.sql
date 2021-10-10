
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users` (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(30) NOT NULL,
    `last_name` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `products` (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `product_name` VARCHAR(30) NOT NULL,
    `description` TEXT(200),
    `price` DECIMAL(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `product_name`, `description`, `price`) VALUES
--     VALUES ('$_POST[name]','$_POST[description]','$_POST[price]');
        (1, 'toy', 'nice toy', '2500'),
        (2, 'car', 'nice car', '25000'),
        (3, 'soap', 'nice soap', '25040'),
        (4, 'book', 'nice book', '12500');

CREATE TABLE `orders` (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT(6) NOT NULL,
    `order_sum` DECIMAL(5,2) NOT NULL,
    `order_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `order_products` (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `order_id` INT(6) NOT NULL,
    `product_id` INT(6) NOT NULL,
    `qty` INT(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

