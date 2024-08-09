CREATE TABLE `blogers` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(50)
);

CREATE TABLE `product` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
  `bloger_id` INTEGER,
  `name` VARCHAR(255),
  `price` INTEGER,
  `color` VARCHAR(255),
  `size` VARCHAR(255)
);

CREATE TABLE `basket` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `product_id` INT,
  `count` INT
);

CREATE TABLE `client` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `basket_id` INT,
  `balance` FLOAT
);

ALTER TABLE `product` ADD CONSTRAINT `fk_product_bloger`
    FOREIGN KEY (`bloger_id`) REFERENCES `blogers` (`id`);

ALTER TABLE `basket` ADD CONSTRAINT `fk_basket_product`
    FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

ALTER TABLE `basket` ADD CONSTRAINT `fk_basket_blogers`
    FOREIGN KEY (`id`) REFERENCES `blogers` (`id`);

ALTER TABLE `client` ADD CONSTRAINT `fk_client_basket`
    FOREIGN KEY (`basket_id`) REFERENCES `basket` (`id`);