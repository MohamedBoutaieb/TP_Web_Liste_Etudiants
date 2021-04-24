<?php
include_once 'autoload.php';
include_once 'links.php';
session_start();
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
                    <a class="nav-link" href="session.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">se déconnecter</a>
                </li>


            </ul>

        </div>
    </nav>
    <div class="container">
        <body>
        <form action="processModifier.php?cin=<?= $_GET['cin'] ?>" method="post" method="get"
              enctype="multipart/form-data">


            <label class="col-form-label" for="inputDefault"> Saisir nouveau nom</label>
            <input type="text" class="form-control" placeholder="nom" name="nom" value="<?= $_GET['nom'] ?>"
                   id="inputDefault">
            <label class="col-form-label" for="inputDefault">Saisir nouveau prenom</label>
            <input type="text" class="form-control" placeholder="prenom" name="prenom" value="<?= $_GET['prenom'] ?>"
                   id="inputDefault">
            <label class="col-form-label" for="inputDefault">Saisir nouvel age</label>
            <input name="age" type="text" class="form-control" placeholder="age" id="inputDefault"
                   value="<?= $_GET['age'] ?>">
            <label class="col-form-label" for="inputDefault">changer cin</label>
            <input name="cin" type="text" class="form-control" placeholder="cin" id="inputDefault"
                   value="<?= $_GET['cin'] ?>">
            <label class="col-form-label" for="inputDefault">Saisir nouvelle section</label>
            <input name="section" type="text" class="form-control" placeholder="section" id="inputDefault"
                   value="<?= $_GET['section'] ?>">
            <br>
            <label class="col-form-label">Changer avatar </label>
            <input type="file" class="form-control" class="" name="image">
            <br>

            <button type="submit" class="btn btn-success">Valider</button>
            <a href="session.php">
                <button type="button" class="btn btn-success"><i class="bi bi-backspace-reverse-fill"></i>retour
                </button>
            </a>
        </form>
        </body>
    </div>