<?php foreach ($detailPatient as $value) { ?>
    <div class="row text-center justify-content-center m-5">
        <div class="col my-auto cardForm shadow">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="lastnamePatient">Nom</label>
                    <input type="text" class="form-control text-center shadow" id="lastnamePatient" name="lastnamePatient" value="<?= isset($_POST['editPatient']) && !empty($arrayError) ? $_POST['editPatient'] : $value['lastname'] ?>" />
                    <p class="errorMessage"><?= isset($arrayError['lastnamePatient']) && !empty($arrayError['lastnamePatient']) ? $arrayError['lastnamePatient'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="firstnamePatient">Prénom</label>
                    <input type="text" class="form-control text-center shadow" id="firstnamePatient" name="firstnamePatient" value="<?= isset($_POST['editPatient']) && !empty($arrayError) ? $_POST['editPatient'] : $value['firstname'] ?>" />
                    <p class="errorMessage"><?= isset($arrayError['firstnamePatient']) && !empty($arrayError['firstnamePatient']) ? $arrayError['firstnamePatient'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="birthdatePatient">Date de naissance</label>
                    <input type="date" class="form-control text-center shadow" id="birthdatePatient" name="birthdatePatient" value="<?= isset($_POST['editPatient']) && !empty($arrayError) ? $_POST['editPatient'] : $value['birthdate'] ?>" />
                    <p class="errorMessage"><?= isset($arrayError['birthdatePatient']) && !empty($arrayError['birthdatePatient']) ? $arrayError['birthdatePatient'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="phonePatient">Téléphone</label>
                    <input type="tel" class="form-control text-center shadow" id="phonePatient" name="phonePatient" value="<?= isset($_POST['editPatient']) && !empty($arrayError) ? $_POST['editPatient'] : $value['phone'] ?>" />
                    <p class="errorMessage"><?= isset($arrayError['phonePatient']) && !empty($arrayError['phonePatient']) ? $arrayError['phonePatient'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="mailPatient">Mail</label>
                    <input type="email" class="form-control text-center shadow" id="mailPatient" name="mailPatient" value="<?= isset($_POST['editPatient']) && !empty($arrayError) ? $_POST['editPatient'] : $value['mail'] ?>" />
                    <p class="errorMessage"><?= isset($arrayError['mailPatient']) && !empty($arrayError['mailPatient']) ? $arrayError['mailPatient'] : '' ?></p>
                </div>
                <div class="form-group">
                    <a class="btn btn-outline-danger btn-lg shadow" href="http://hopitallamanu/index.php?detailPatient=<?= $value['id'] ?>" title="Retour au détail du patient"><i class="fas fa-reply"></i></a>
                    <button class="btn btn-outline-danger btn-lg shadow" type="submit" name="editPatient" title="Editer patient"><i class="fas fa-user-edit"></i></button>
                    <p class="validMessage shadow"><?= isset($_POST['editPatient']) && empty($arrayError) ? 'Patient modifié' : '' ?></p>
                </div>
            </form>
        </div>
    </div>
<?php }; ?>