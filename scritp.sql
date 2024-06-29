-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sistema_citas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sistema_citas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistema_citas` DEFAULT CHARACTER SET utf8 ;
USE `sistema_citas` ;

-- -----------------------------------------------------
-- Table `sistema_citas`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_citas`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `apelldio` VARCHAR(100) NULL,
  `perfil` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NULL,
  `contraseña` VARCHAR(45) NULL,
  PRIMARY KEY (`usuario_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_citas`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_citas`.`paciente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `apellido` VARCHAR(45) NULL,
  `celular` VARCHAR(20) NULL,
  `departamento` VARCHAR(100) NULL,
  `provincia` VARCHAR(100) NULL,
  `distrito` VARCHAR(100) NULL,
  `direccion` VARCHAR(100) NULL,
  `genero` CHAR(1) NULL,
  `fecha_nacimiento` DATE NULL,
  `dni` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_citas`.`medico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_citas`.`medico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `especialidad` VARCHAR(45) NULL,
  `turno` CHAR(1) NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_medicos_usuarios1_idx` (`usuario_id` ASC) VISIBLE,
  CONSTRAINT `fk_medicos_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `sistema_citas`.`usuario` (`usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_citas`.`cita`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_citas`.`cita` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha` VARCHAR(45) NULL,
  `hora` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `medicos_id` INT NOT NULL,
  `pacientes_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_citas_medicos1_idx` (`medicos_id` ASC) VISIBLE,
  INDEX `fk_citas_pacientes1_idx` (`pacientes_id` ASC) VISIBLE,
  CONSTRAINT `fk_citas_medicos1`
    FOREIGN KEY (`medicos_id`)
    REFERENCES `sistema_citas`.`medico` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_pacientes1`
    FOREIGN KEY (`pacientes_id`)
    REFERENCES `sistema_citas`.`paciente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_citas`.`admision`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_citas`.`admision` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_admision_usuarios1_idx` (`usuario_id` ASC) VISIBLE,
  CONSTRAINT `fk_admision_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `sistema_citas`.`usuario` (`usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
