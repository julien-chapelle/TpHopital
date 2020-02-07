<?php
$patientIndexTitle = '<title>Liste des patients</title>';

$patientIndexContents = '<div class="container-fluid p-0">
                            <div class="row text-center justify-content-center m-5">
                                <div class="col my-auto">
                                    <form method="GET" action="index.php">
                                        <a class="btn btn-outline-danger" href="http://hopitallamanu/index.php?patient=add" title="Ajouter un patient">Ajouter un patient</a>
                                    </form>
                                </div>
                            </div>
                            <div class="row text-center justify-content-around m-0">
                                <div class="col my-auto">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Prénom</th>
                                                <th scope="col">Date de naissance</th>
                                                <th scope="col">Téléphone</th>
                                                <th scope="col">Mail</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>
                                                    <form method="GET" action="index.php">
                                                        <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?patient=details" title="détails"><i class="fas fa-search"></i></a>
                                                        <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?patient=edit" title="Editer"><i class="fas fa-pen"></i></a>
                                                        <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?patient=delete" title="Supprimer"><i class="fas fa-times"></i></a>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>';
?>
