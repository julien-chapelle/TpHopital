
USE `hospitale2n`;

-- SELECT `hlm_patients`.`id`, `hlm_patients`.`lastname`,`hlm_patients`.`firstname`,`hlm_patients`.`birthdate`,`hlm_patients`.`phone`,`hlm_patients`.`mail`,`hlm_appointments`.`dateHour`
-- FROM `hlm_patients`
-- LEFT JOIN `hlm_appointments`
-- ON `hlm_patients`.`id` = `hlm_appointments`.`idPatients`;

-- SELECT `hlm_appointments`.`id`,`hlm_appointments`.`dateHour`,`hlm_patients`.`lastname`, `hlm_patients`.`firstname`
-- FROM `hlm_appointments`
-- LEFT JOIN `hlm_patients`
-- ON `hlm_patients`.`id` = `hlm_appointments`.`idPatients`;

-- SELECT * FROM `hlm_patients`
-- WHERE `id` = 1;

-- SELECT `hlm_appointments`.`id` AS `appointmentsId`,`hlm_appointments`.`dateHour`,`hlm_patients`.`lastname`, `hlm_patients`.`firstname`,`hlm_patients`.`id` AS `patientId`
-- FROM `hlm_appointments`
-- LEFT JOIN `hlm_patients`
-- ON `hlm_patients`.`id` = `hlm_appointments`.`idPatients` ORDER BY `hlm_appointments`.`idPatients` ASC;

SELECT `hlm_appointments`.`id`,`hlm_appointments`.`dateHour`,`hlm_appointments`.`idPatients`,`hlm_patients`.`lastname`, `hlm_patients`.`firstname`,`hlm_patients`.`id`,`hlm_patients`.`lastname`,`hlm_patients`.`firstname`,`hlm_patients`.`birthdate`,`hlm_patients`.`phone`,`hlm_patients`.`mail`
        FROM `hlm_appointments`
        LEFT JOIN `hlm_patients`
        ON `hlm_patients`.`id` = `hlm_appointments`.`idPatients`;



