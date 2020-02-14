<?php

require_once('Models/hlm_database.php');
require_once('Models/hlm_patientModel.php');
$arrayError = [];
$patient = new Hlm_patient();

if (isset($_GET['editPatient'])) {

    $currentId = htmlspecialchars(intval($_GET['editPatient']));
    //Hydratation
    $patient->setId($currentId);
    $detailPatient = $patient->detailPatient();
}

// ERROR LASTNAME
$regexLastname = '/^[A-Za-z\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,20}$/';

if (isset($_POST['lastnamePatient'])) {
    if (!preg_match($regexLastname, $_POST['lastnamePatient'])) {
        $arrayError['lastnamePatient'] = 'Veuillez respecter le format (tous caractères sauf chiffres - Max 20 caractères)';
    };
    if (empty($_POST['lastnamePatient'])) {
        $arrayError['lastnamePatient'] = 'Veuillez remplir le champ';
    };
};
// ERROR LASTNAME
$regexFirstname = '/^[A-Za-z\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,20}$/';

if (isset($_POST['firstnamePatient'])) {
    if (!preg_match($regexFirstname, $_POST['firstnamePatient'])) {
        $arrayError['firstnamePatient'] = 'Veuillez respecter le format (tous caractères sauf chiffres - Max 20 caractères)';
    };
    if (empty($_POST['firstnamePatient'])) {
        $arrayError['firstnamePatient'] = 'Veuillez remplir le champ';
    };
};
// ERROR BIRTHDATE
// $regexBirthdate = '/^[1-2]{1}[0-9]{3}-[0-9]{1}[1-9]{1}-[0-9]{1}[1-9]{1}$/';

// if (isset($_POST['birthdatePatient'])) {
//     if (!preg_match($regexBirthdate, $_POST['birthdatePatient'])) {
//         $arrayError['birthdatePatient'] = 'Veuillez respecter le format "aaaa-mm-jj"';
//     };
//     if (empty($_POST['birthdatePatient'])) {
//         $arrayError['birthdatePatient'] = 'Veuillez remplir le champ';
//     };
// };
// ERROR PHONE
$regexPhone = '/^[0]{1}[1-9]{1}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}$/';

if (isset($_POST['phonePatient'])) {
    if (!preg_match($regexPhone, $_POST['phonePatient'])) {
        $arrayError['phonePatient'] = 'Veuillez respecter le format (exclus "espace" , "-" , "." , voir exemple)';
    };
    if (empty($_POST['phonePatient'])) {
        $arrayError['phonePatient'] = 'Veuillez remplir le champ';
    };
};
// ERROR MAIL
$regexMail = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/';

if (isset($_POST['mailPatient'])) {
    if (!preg_match($regexMail, $_POST['mailPatient'])) {
        $arrayError['mailPatient'] = 'Veuillez respecter le format mail';
    };
    if (empty($_POST['mailPatient'])) {
        $arrayError['mailPatient'] = 'Veuillez remplir le champ';
    };
};

$editPatient = new Hlm_patient();
if (isset($_POST['editPatient']) && empty($arrayError)) {
    $lastName = htmlspecialchars(ucfirst(mb_strtolower($_POST['lastnamePatient'], 'UTF-8')));
    $firstName = htmlspecialchars(ucfirst(mb_strtolower($_POST['firstnamePatient'], 'UTF-8')));
    $birthdate = htmlspecialchars($_POST['birthdatePatient']);
    $phone = htmlspecialchars($_POST['phonePatient']);
    $mail = htmlspecialchars($_POST['mailPatient']);
    $currentId = htmlspecialchars(intval($_GET['editPatient']));
    //Hydratation
    $editPatient->setFirstname($firstName);
    $editPatient->setLastname($lastName);
    $editPatient->setBirthdate($birthdate);
    $editPatient->setPhone($phone);
    $editPatient->setMail($mail);
    $editPatient->setId($currentId);
    $editPatient->editPatient();

    header('refresh:2;url=http://hopitallamanu/index.php?detailPatient=' . $currentId);
}

// if(isset($_POST['editPatient'])) {
//     header('refresh: 0');
// }