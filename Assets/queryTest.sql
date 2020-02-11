
USE `hospitale2n`;

-- SELECT `hlm_patients`.`id`, `hlm_patients`.`lastname`,`hlm_patients`.`firstname`,`hlm_patients`.`birthdate`,`hlm_patients`.`phone`,`hlm_patients`.`mail`,`hlm_appointments`.`dateHour`
-- FROM `hlm_patients`
-- LEFT JOIN `hlm_appointments`
-- ON `hlm_patients`.`id` = `hlm_appointments`.`idPatients`;

-- SELECT `hlm_appointments`.`id`,`hlm_appointments`.`dateHour`,`hlm_patients`.`lastname`, `hlm_patients`.`firstname`
-- FROM `hlm_appointments`
-- LEFT JOIN `hlm_patients`
-- ON `hlm_patients`.`id` = `hlm_appointments`.`idPatients`;

SELECT * FROM `hlm_patients`
WHERE `id` = 1;



