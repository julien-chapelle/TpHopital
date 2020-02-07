<?php

$appointmentsCreateTitle = '<title>Ajout d\'un rendez-vous</title>';

$appointmentsCreateContents = '<div class="row text-center justify-content-center m-5">
                                <div class="col my-auto">
                                    <form method="POST" action="index.php">
                                        <div class="form-group">
                                            <label for="dateAppointment">Date</label>
                                            <input type="date" class="form-control text-center" id="dateAppointment" name="dateAppointment">
                                        </div>
                                        <div class="form-group">
                                            <label for="hourAppointment">Heure</label>
                                            <input type="text" class="form-control text-center" id="hourAppointment" name="hourAppointment" placeholder="ex: 10h30">
                                        </div>
                                        <div class="form-group">
                                            <label for="patientSelect">Patients</label>
                                            <select class="form-control text-center" id="patientSelect">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <a class="btn btn-outline-danger btn-lg" href="http://hopitallamanu/index.php?list=appointment" title="Retour à la liste patient"><i class="fas fa-reply"></i></a>
                                            <a class="btn btn-outline-danger btn-lg" href="http://hopitallamanu/index.php?appointmentCreate=submit" title="Créer rendez-vous"><i class="fas fa-calendar-plus"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>';

?>