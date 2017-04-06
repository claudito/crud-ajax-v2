CREATE TABLE IF NOT EXISTS `area` (
  `idarea` INT NOT NULL AUTO_INCREMENT,
  `descripción` VARCHAR(100) NULL,
  PRIMARY KEY (`idarea`))
ENGINE = InnoDB;




CREATE TABLE IF NOT EXISTS `personal` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(200) NULL,
  `apellidos` VARCHAR(200) NULL,
  `domicilio` VARCHAR(200) NULL,
  `email` VARCHAR(200) NULL,
  `telefono` VARCHAR(200) NULL,
  `fecha_creacion` TIMESTAMP NULL DEFAULT current_timestamp,
  `area_idarea` INT NOT NULL,
  PRIMARY KEY (`id`, `area_idarea`),
  INDEX `fk_personal_area_idx` (`area_idarea` ASC),
  CONSTRAINT `fk_personal_area`
    FOREIGN KEY (`area_idarea`)
    REFERENCES `area` (`idarea`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



INSERT INTO `area` (`descripcion`) VALUES
('SISTEMAS'),
('CONTABILIDAD');

INSERT INTO `personal` (`nombres`, `apellidos`, `domicilio`, `email`, `telefono`, `fecha_creacion`, `area_idarea`) VALUES
('LUIS  AUGUSTO', 'CLAUDIO PONCE', 'SJL', 'luis.claudio@perutec.com.pe', '998 000 123 ', '2017-04-06 01:49:20', 2),
('LUIS', 'CLAUDIO', 'PONCE', 'luis.claudio@perutec.com.pe', '000 000 000', '2017-04-06 01:49:31', 1),
('LUIS ', 'CLAUDIO', 'PONCE', 'luis.claudio@perutec.com.pe', '998 000 123 ', '2017-04-06 01:49:42', 2);
