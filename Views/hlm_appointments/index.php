<div class="row text-center justify-content-center m-5">
    <div class="col my-auto">
        <form method="GET" action="index.php">
            <a class="btn btn-outline-danger" href="http://hopitallamanu/index.php?appointment=add">Ajouter un rendez-vous</a>
        </form>
    </div>
</div>
<div class="row text-center justify-content-around m-0">
    <div class="col my-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date & heure</th>
                    <th scope="col">Patient</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <form method="GET" action="index.php">
                            <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?appointment=details" title="détails"><i class="fas fa-search"></i></a>
                            <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?appointment=edit" title="Editer"><i class="fas fa-pen"></i></a>
                            <a class="btn btn-outline-danger btn-sm" href="http://hopitallamanu/index.php?appointment=delete" title="Supprimer"><i class="fas fa-times"></i></a>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>