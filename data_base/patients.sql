#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `hospitalE2N` CHARACTER SET 'utf8';
USE `hospitalE2N`;

#------------------------------------------------------------
# Table: hlm_patients
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `hlm_patients`(
        `id`        INT (11) AUTO_INCREMENT  NOT NULL ,
        `lastname`  VARCHAR (25) NOT NULL ,
        `firstname` VARCHAR (25) NOT NULL ,
        `birthdate` DATE NOT NULL ,
        `phone`     VARCHAR (25) ,
        `mail`      VARCHAR (100) NOT NULL ,
        PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: hlm_appointments
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `hlm_appointments`(
        `id`         INT (11) AUTO_INCREMENT  NOT NULL ,
        `dateHour`   DATETIME NOT NULL ,
        `idPatients` INT (11) NOT NULL ,
        PRIMARY KEY (`id`)
)ENGINE=InnoDB;

ALTER TABLE hlm_appointments 
ADD CONSTRAINT FK_appointments_id_patients
  FOREIGN KEY (idPatients)
  REFERENCES hlm_patients (id)
  ON DELETE CASCADE
  ON UPDATE NO ACTION;
