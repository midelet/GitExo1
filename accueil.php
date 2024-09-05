Bonjour <?php echo $_POST["prenom"]." ".$_POST['nom']; ?>
<?php
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    if ($_POST["login"]=="admin" && $_POST["mdp"]=="azerty") {

        $extra = 'profil.html';
        header("Location: http://$host$uri/$extra");
        exit;
    }else{
        $extra = 'index.html';
        header("Location: http://$host$uri/$extra");
        exit;
    }

?>