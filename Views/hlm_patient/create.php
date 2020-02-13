<div class="row text-center justify-content-center m-5">
    <div class="col my-auto cardForm shadow">
        <form method="POST" action="">
            <div class="form-group">
                <label for="lastnamePatient">Nom *</label>
                <input type="text" class="form-control text-center shadow" id="lastnamePatient" name="lastnamePatient" placeholder="ex: Dupont" value="<?= isset($_POST['addPatient']) && !empty($arrayError) ? $_POST['lastnamePatient'] : '' ?>" />
                <p class="errorMessage"><?= isset($arrayError['lastnamePatient']) && !empty($arrayError['lastnamePatient']) ? $arrayError['lastnamePatient'] : '' ?></p>
            </div>
            <div class="form-group">
                <label for="firstnamePatient">Prénom *</label>
                <input type="text" class="form-control text-center shadow" id="firstnamePatient" name="firstnamePatient" placeholder="ex: Jean" value="<?= isset($_POST['addPatient']) && !empty($arrayError) ? $_POST['firstnamePatient'] : '' ?>" />
                <p class="errorMessage"><?= isset($arrayError['firstnamePatient']) && !empty($arrayError['firstnamePatient']) ? $arrayError['firstnamePatient'] : '' ?></p>
            </div>
            <div class="form-group">
                <label for="birthdatePatient">Date de naissance *</label>
                <input type="date" class="form-control text-center shadow" id="birthdatePatient" name="birthdatePatient" placeholder="ex: 1990-02-14" value="<?= isset($_POST['addPatient']) && !empty($arrayError) ? $_POST['birthdatePatient'] : '' ?>" />
                <p class="errorMessage"><?= isset($arrayError['birthdatePatient']) && !empty($arrayError['birthdatePatient']) ? $arrayError['birthdatePatient'] : '' ?></p>
            </div>
            <div class="form-group">
                <label for="phonePatient">Téléphone *</label>
                <input type="tel" class="form-control text-center shadow" id="phonePatient" name="phonePatient" placeholder="ex: 0614589674" value="<?= isset($_POST['addPatient']) && !empty($arrayError) ? $_POST['phonePatient'] : '' ?>" />
                <p class="errorMessage"><?= isset($arrayError['phonePatient']) && !empty($arrayError['phonePatient']) ? $arrayError['phonePatient'] : '' ?></p>
            </div>
            <div class="form-group">
                <label for="mailPatient">Mail *</label>
                <input type="email" class="form-control text-center shadow" id="mailPatient" name="mailPatient" placeholder="ex: jean.dupont@gmail.com" value="<?= isset($_POST['addPatient']) && !empty($arrayError) ? $_POST['mailPatient'] : '' ?>" />
                <p class="errorMessage"><?= isset($arrayError['mailPatient']) && !empty($arrayError['mailPatient']) ? $arrayError['mailPatient'] : '' ?></p>
            </div>
            <div class="form-group">
                <a class="btn btn-outline-danger btn-lg shadow" href="http://hopitallamanu/index.php?list=patient" title="Retour à la liste patient"><i class="fas fa-reply"></i></a>
                <button class="btn btn-outline-danger btn-lg shadow" type="submit" name="addPatient" title="Créer patient"><i class="fas fa-user-plus"></i></button>
                <p class="validMessage shadow"><?= isset($_POST['addPatient']) && empty($arrayError) ? 'Patient ajouté' : '' ?></p>
            </div>
        </form>
    </div>
</div>