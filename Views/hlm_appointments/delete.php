<?php foreach ($listAppointment as $row) { ?>
    <form method="POST" action="">
        <div class="modal fade" id="<?= 'deleteAppointment' . $row['appointmentsId'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteAppointmentLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="deleteAppointmentLabel">SUPPRESSION RENDEZ-VOUS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <label for="idAppointmentDelete">Numéro rdv</label>
                        <input type="text" class="form-control text-center" id="idAppointmentDelete" name="idAppointmentDelete" value="<?= $row['appointmentsId'] ?>" readonly />
                        <p class="h5"><?= $row['lastname'] . ' ' . $row['firstname'] ?></p>
                        <p class="h5"><?= $row['dateHour'] ?></p>
                        <p class="h4 text-danger">Voulez-vous vraiment supprimer ce rendez-vous ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-outline-danger btn-sm" name="deleteAppointment">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php } ?>