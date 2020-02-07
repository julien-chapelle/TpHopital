<div class="row text-center justify-content-center m-5">
    <div class="col my-auto">
        <form method="POST" action="">
            <div class="form-group">
                <label for="lastnamePatient">Nom</label>
                <input type="text" class="form-control text-center" id="lastnamePatient" name="lastnamePatient" placeholder="ex: Dupont">
            </div>
            <div class="form-group">
                <label for="firstnamePatient">Prénom</label>
                <input type="text" class="form-control text-center" id="firstnamePatient" name="firstnamePatient" placeholder="ex: Jean">
            </div>
            <div class="form-group">
                <label for="birthdatePatient">Date de naissance</label>
                <input type="date" class="form-control text-center" id="birthdatePatient" name="birthdatePatient" placeholder="ex: 01/08/1990">
            </div>
            <div class="form-group">
                <label for="phonePatient">Téléphone</label>
                <input type="tel" class="form-control text-center" id="phonePatient" name="phonePatient" placeholder="ex: 0614589674">
            </div>
            <div class="form-group">
                <label for="mailPatient">Mail</label>
                <input type="email" class="form-control text-center" id="mailPatient" name="mailPatient" placeholder="ex: jean.dupont@gmail.com">
            </div>
            <div class="form-group">
                <a class="btn btn-outline-danger btn-lg" href="http://hopitallamanu/index.php?list=patient" title="Retour à la liste patient"><i class="fas fa-reply"></i></a>
                <button class="btn btn-outline-danger btn-lg" type="submit" name="addPatient" title="Créer patient"><i class="fas fa-user-plus"></i></button>
            </div>
        </form>
    </div>
</div>