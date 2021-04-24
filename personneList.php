<?php
include_once 'autoload.php';
include_once 'links.php';
session_start();
$repo = new PersonneRepository();
$personnes = $repo->findAll(PDO  ::FETCH_OBJ);

?>


<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="session.php">Liste Etudiants</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">

                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="ajouter.php"><i class="bi bi-person-plus"></i>Ajouter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">se déconnecter</a>
                </li>


            </ul>

        </div>
    </nav>
    <div class="container">

        <body>

        <table class="table">
            <tr>
                <th>Avatar
                </th>
                <th>nom
                </th>
                <th>prenom
                </th>


            </tr>
            <?php foreach ($personnes as $personne) { ?>
                 <tr>
                    <td><img width="100px" height="100px" style="border-radius:50%";  src= <?php echo 'assets/image/' . $personne->id_photo ?> </td>
                    <td> <div style="padding-top: 40px;"> <?= $personne->nom ?></div></td>

                    <td> <div style="padding-top: 40px;"><?= $personne->prenom ?> </div></td>

                    <td>
                        <a href="modifier.php?nom=<?= $personne->nom ?>&prenom=<?= $personne->prenom ?>&age=<?= $personne->age ?>&section=<?= $personne->section ?>&cin=<?= $personne->cin ?>">
                            <div style="padding-top:25px;">     <button type="button" class="btn btn-warning"><i class="bi bi-brush-fill"></i>Modifier
                                </button> </div>
                        </a>
                    </td>
                    <td><a href="processSupprimer.php?cin=<?= $personne->cin ?>">
                            <div style="padding-top:25px;">      <button type="button" class="btn btn-danger"><i class="bi bi-x-octagon-fill"></i> supprimer
                                </button> </div>
                        </a>
                    </td>
                    <td><a href="info.php?cin=<?= $personne->cin ?>">
                            <div style="padding-top:25px;">  <button type="button" class="btn btn-info"><i class="bi bi-file-person"></i>Détails</button> </div>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <a href="ajouter.php">
            <button type="button" class="btn btn-success"><i class="bi bi-person-plus"></i>Ajouter</button>
        </a>

        <a href="logout.php">
            <button type="button" class="btn btn-danger">se déconnecter</button>
        </a>


        </body>
    </div>