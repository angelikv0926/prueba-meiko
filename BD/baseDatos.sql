CREATE DATABASE `prueba_meiko`;

USE `prueba_meiko`;

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usu` INT(11) NOT NULL AUTO_INCREMENT,
  `nomn_usu` VARCHAR(30) COLLATE latin1_spanish_ci NOT NULL,
  `ape_usu` VARCHAR(30) COLLATE latin1_spanish_ci NOT NULL,
  `email` VARCHAR(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `pais_usu` VARCHAR(3) COLLATE latin1_spanish_ci DEFAULT NULL,
  `pass_usu` VARCHAR(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cod_Roll` INT(11) DEFAULT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=INNODB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT  INTO `usuarios`(`id_usu`,`nomn_usu`,`ape_usu`,`email`,`pais_usu`,`pass_usu`,`cod_Roll`) VALUES 

(1,'admin','admin','admin@gmail.com','co','admin',1);