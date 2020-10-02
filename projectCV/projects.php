<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="./style-index+hobbies.css">
<link rel="stylesheet" href="./style-projets.css">

<body>

    <div class="container container-fluid">
    <?php $nav_en_cours ='Projects';?>
    <?php include "./header.php";?> 
    <div class="wrapper row">
            <svg height="320" width="400" class="logo-triangle">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="100%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:rgb(50,50,50);stop-opacity:1" />
                        <stop offset="100%" style="stop-color:black;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <filter id="dropshadow" height="130%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="3" />
                    <feOffset dx="2" dy="2" result="offsetblur" />
                    <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>
                <polygon points="0,0 400,0 200,300" stroke="#36e2f8" stroke-width="3" />
            </svg>
            <div class="grid"></div>
    <div class ="titre-projects col">
        <h1>Mes Projets<h1>
            <h2>De la mort qui tue<h2>
    </div>
    <article>
        <section>
            <div class="div-img">
                <img class="imgproject" alt="Time machine Hackermann" src="images/timemachine.gif">
            </div>
            <div><h3>Construction d'une time geek machine<h3></div>
            <div>
                <p class="text-project">Grâce à mes doigts de fée et à mon clavier de transport, j'ai réussi à hacker le temps et à envoyer Kung Fury dans le passé.</p>
            </div>
        </section>
        <section>
            <div class="div-img">
                <img class="imgproject" alt="Hackermann Robot" src="images/robot.gif">
            </div>
            <div><h3>Développement de robot<h3></div>
            <div>
                <p class="text-project">J'ai développé un algorithme du Turfu, qui me permet de me transformer en Mécha.</p>
            </div>
        </section>
    </article>
    <article>
        <section>
            <div class="div-img">
                <img class="imgproject" alt="Phone Hackermann" src="images/telephone.gif">
            </div>
            <div><h3>Fabrication de téléphone<h3></div>
            <div>
                <p class="text-project">J'ai conçu de mes 10 doigts un téléphone portable qui a une capacité de 645 canaux, 10 numéros abrégés et un vérrouillage électronique.</p>
            </div>
        </section>
        <section>
            <div class="div-img">
                <img class="imgproject" alt="Thor Hackermann" src="images/thor.gif">
            </div>
            <div><h3>Projet top secret en cours...<h3></div>
            <div>
                 <p class="text-project">Utiliser la puissance du marteau de Thor pour améliorer le voyage temporel.</p>
            </div>
        </section>
    </article>
    </div>
    <?php include "./footer.php";?>
</div>
<script src="src/index.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>