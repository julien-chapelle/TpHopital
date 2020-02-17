<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_patientModel.php');
require_once('Models/hlm_appointmentsModel.php');
$arrayError = [];
$patient = new Hlm_patient();
$appointment = new Hlm_appointements();

// ERROR LASTNAME
$regexLastnamePaA = '/^[A-Za-z\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,20}$/';

if (isset($_POST['lastnamePatient']) && $_POST['lastnamePatient'] != '') {
    if (!preg_match($regexLastnamePaA, $_POST['lastnamePatient'])) {
        $arrayError['lastnamePatient'] = 'Veuillez respecter le format (tous caractères sauf chiffres - Max 20 caractères)';
    };
    if (empty($_POST['lastnamePatient']) || $_POST['lastnamePatient'] == '') {
        $arrayError['lastnamePatient'] = 'Veuillez remplir le champ';
    };
};
// ERROR LASTNAME
$regexFirstnamePaA = '/^[A-Za-z\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,20}$/';

if (isset($_POST['firstnamePatient'])) {
    if (!preg_match($regexFirstnamePaA, $_POST['firstnamePatient'])) {
        $arrayError['firstnamePatient'] = 'Veuillez respecter le format (tous caractères sauf chiffres - Max 20 caractères)';
    };
    if (empty($_POST['firstnamePatient'])) {
        $arrayError['firstnamePatient'] = 'Veuillez remplir le champ';
    };
};
// ERROR BIRTHDATE
// $regexBirthdatePaA = '/^[1-2]{1}[0-9]{3}-[0-9]{1}[1-9]{1}-[0-9]{1}[1-9]{1}$/';

// if (isset($_POST['birthdatePatient'])) {
//     if (!preg_match($regexBirthdatePaA, $_POST['birthdatePatient'])) {
//         $arrayError['birthdatePatient'] = 'Veuillez respecter le format "aaaa-mm-jj"';
//     };
//     if (empty($_POST['birthdatePatient'])) {
//         $arrayError['birthdatePatient'] = 'Veuillez remplir le champ';
//     };
// };
// ERROR PHONE
$regexPhonePaA = '/^[0]{1}[1-9]{1}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}$/';

if (isset($_POST['phonePatient'])) {
    if (!preg_match($regexPhonePaA, $_POST['phonePatient'])) {
        $arrayError['phonePatient'] = 'Veuillez respecter le format (exclus "espace" , "-" , "." , voir exemple)';
    };
    if (empty($_POST['phonePatient'])) {
        $arrayError['phonePatient'] = 'Veuillez remplir le champ';
    };
};
// ERROR MAIL
$regexMailPaA = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/';

if (isset($_POST['mailPatient'])) {
    if (!preg_match($regexMailPaA, $_POST['mailPatient'])) {
        $arrayError['mailPatient'] = 'Veuillez respecter le format mail';
    };
    if (empty($_POST['mailPatient'])) {
        $arrayError['mailPatient'] = 'Veuillez remplir le champ';
    };
};

// ERROR DATE
// $regexDatePaA = '/^[1-2]{1}[0-9]{3}-[0-9]{1}[1-9]{1}-[0-9]{1}[1-9]{1}$/';

// if (isset($_POST['dateAppointment'])) {
//     if (!preg_match($regexDatePaA, $_POST['dateAppointment'])) {
//         $arrayError['dateAppointment'] = 'Veuillez respecter le format "aaaa-mm-jj"';
//     };
//     if (empty($_POST['dateAppointment'])) {
//         $arrayError['dateAppointment'] = 'Veuillez remplir le champ';
//     };
// };
// ERROR HOUR
$regexHourPaA = '/^[0-9]{2}:[0-9]{2}$/';

if (isset($_POST['hourAppointment'])) {
    if (!preg_match($regexHourPaA, $_POST['hourAppointment'])) {
        $arrayError['hourAppointment'] = 'Veuillez respecter le format "00:00"';
    };
    if (empty($_POST['hourAppointment'])) {
        $arrayError['hourAppointment'] = 'Veuillez remplir le champ';
    };
};

if (isset($_POST['addPatientAppointment']) && empty($arrayError)) {
    $lastName = htmlspecialchars(ucfirst(mb_strtolower($_POST['lastnamePatient'], 'UTF-8')));
    $firstName = htmlspecialchars(ucfirst(mb_strtolower($_POST['firstnamePatient'], 'UTF-8')));
    $birthdate = htmlspecialchars($_POST['birthdatePatient']);
    $phone = htmlspecialchars($_POST['phonePatient']);
    $mail = htmlspecialchars($_POST['mailPatient']);
    //Hydratation
    $patient->setLastname($lastName);
    $patient->setFirstname($firstName);
    $patient->setBirthdate($birthdate);
    $patient->setPhone($phone);
    $patient->setMail($mail);
    $lastId = $patient->addPatient();

    $dateAppointment = htmlspecialchars($_POST['dateAppointment']);
    $hourAppointment = htmlspecialchars($_POST['hourAppointment']);

    //Hydratation
    $appointment->setDateHour($dateAppointment . ' ' . $hourAppointment);
    $appointment->setIdPatients($lastId);
    $appointment->addAppointment();

    header('refresh:3;url=http://hopitallamanu/index.php?list=patient&page=1');

}

?>
