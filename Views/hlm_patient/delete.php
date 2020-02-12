<?php foreach ($listPatient as $value) { ?>
    <form method="POST" action="">
        <div class="modal fade" id="<?= 'deletePatient' . $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deletePatientLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="deletePatientLabel">SUPPRESSION PATIENT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <label for="idAppointmentDelete">Numéro patient</label>
                        <input type="text" class="form-control text-center" id="idPatientDelete" name="idPatientDelete" value="<?= $value['id'] ?>" readonly />
                        <p class="h5"><?= $value['lastname'] . ' ' . $value['firstname'] ?></p>
                        <p class="h4 text-danger">Voulez-vous vraiment supprimer ce patient ainsi que tous ses rendez-vous ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-outline-danger btn-sm" name="deletePatient">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php } ?>