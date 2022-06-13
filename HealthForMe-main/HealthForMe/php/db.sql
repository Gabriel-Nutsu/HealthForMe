CREATE TABLE IF NOT EXISTS `comentarios` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nome` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `comentario` varchar(255) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);