<?php foreach ($listAppointment as $value) { ?>
    <form method="POST" action="">
        <div class="modal fade" id="<?= 'deleteAppointment' . $value['appointmentsId'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteAppointmentLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="deleteAppointmentLabel">SUPPRESSION RENDEZ-VOUS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="h4"><?= $value['lastname'] . ' ' . $value['firstname'] ?></p>
                        <input type="text" class="form-control text-center bg-white border-0" id="idAppointmentDelete" name="idAppointmentDelete" value="<?= $value['appointmentsId'] ?>" hidden />
                        <p class="h5"><?= 'Rdv du ' . strftime('%A %d %B %Y', strtotime($value['dateHour'])) . ' à ' . strftime('%Hh%M', strtotime($value['dateHour'])) ?></p>
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