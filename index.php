<?php
include_once 'autoload.php';
include_once 'links.php';

session_start();
if (isset($_SESSION['user'])) {
    header('location:session.php');
}
?>

<div class="container">
    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger"> <?= $_SESSION['error'] ?></div> <?php unset($_SESSION['error']);
    } ?>
    <form action="processLogin.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Nom Utilisateur</label>
            <input
                    type="text"
                    name="username"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Nom Utilisateur">
            <small id="emailHelp" class="form-text text-muted">Ton mot de passe ne sera pas partagé</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot De Passe</label>
            <input
                    name="pwd"
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    placeholder="Mot De Passe">
        </div>

        <button type="submit" class="btn btn-primary">SE CONNECTER</button>
        <div style="margin-top:40px;">  <b>essayer :</b>
            <div>
                <div style="margin-top:40px;"> <b> nom utilisateur: admin</b>
                    <div>
                        <div style="margin-top:40px;"> <b>mot de passe :admin</b>
                            <div>


    </form>

</div> </div>

</body>
</html>