<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="./style-projets.css">
<title>Mes projets</title>
</head>

<body>
<main>
    <div class="container container-fluid">
    <?php $nav_en_cours ='curriculum';?>
    <?php include "./header.php";?> 
    <div>
        <h1 class ="pagetitle">Mes Projets</h1>
            <h2 class ="pagetitle">De la mort qui tue</h2>
    </div>
    <article class="articleprojet">
        <section>
            <div class="div-img">
                <img class="imgproject" alt="Time machine Hackermann" src="images/timemachine.gif">
            </div>
            <div><h3 class="h3projects">Construction d'une time geek machine</h3></div>
            <div>
                <p class="text-project">Grâce à mes doigts de fée et à mon clavier de transport, j'ai réussi à hacker le temps et à envoyer Kung Fury dans le passé.</p>
            </div>
        </section>
        <section>
            <div class="div-img">
                <img class="imgproject" alt="Hackermann Robot" src="images/robot.gif">
            </div>
            <div><h3 class="h3projects">Développement de robot</h3></div>
            <div>
                <p class="text-project">J'ai développé un algorithme du Turfu, qui me permet de me transformer en Mécha.</p>
            </div>
        </section>
    </article>
    <article class="articleprojet">
        <section>
            <div class="div-img">
                <img class="imgproject" alt="Phone Hackermann" src="images/telephone.gif">
            </div>
            <div><h3 class="h3projects">Fabrication de téléphone</h3></div>
            <div>
                <p class="text-project">J'ai conçu de mes 10 doigts un téléphone portable qui a une capacité de 645 canaux, 10 numéros abrégés et un vérrouillage électronique.</p>
            </div>
        </section>
        <section>
            <div class="div-img">
            <img class="gifsecret" alt="Secret Project Hackermann" src="images/topsecret2.gif">
            </div>
            <div><h3 class="h3projects">Projet top secret</h3></div>
            <div>
                <p class="text-project">Veuillez saisir le mot de passe pour accéder à mon projet ultra top secret.</p>
            </div>
            <form action="secret.php" method="post">
                <div class="form-group mx-sm-3 mb-2 row align-items-center">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="inputPassword2" name="mot_de_passe" placeholder="Password">
                </div>
                <div class="col align-self-center">
                <button type="submit" class="btn btn-secondary">Confirm identity</button>
                </div>
            </form>         
        </section>
    </article>
    </div>
</main>
<?php include "./footer.php";?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>