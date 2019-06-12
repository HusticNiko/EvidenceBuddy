CREATE TABLE IF NOT EXISTS `evidence`.`uporabnik` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `ime` VARCHAR(45) NOT NULL,
  `priimek` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `uporabniskoime` VARCHAR(45) NOT NULL,
  `geslo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dsr_baza`.`galerija`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evidence`.`evidenca` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `imeevidence` VARCHAR(45) NOT NULL,
  `pot` VARCHAR(45) NOT NULL,
  `opis` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;
