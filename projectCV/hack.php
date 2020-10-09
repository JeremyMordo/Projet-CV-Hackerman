<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style-index+hobbies.css">
    <link rel="stylesheet" href="./style-contact.css">
    <title>Contact HackerMan</title>
</head>
<body>
    <div class="container container-fluid">
<!----------------------------header--------------------------->
        <?php $nav_en_cours ='Contact';?>
        <?php include "./header.php";?> 
        session_start();
        $_SESSION['name'] = $_POST['name'];
<!---------------------------contenu--------------------------->
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
            <div class="screen" >
              
            <div class=windowform>
                    <p class= formtext id=an1>Hackerman.terminal ver2.1.12</br></p>
                            <p class= formtext id=an2>Initialisation of sequence ...</br></p>
                            <p class= formtext id=an3>00023dax 01287efx 00972cbx 00003fcx 00744aex</br></p>
                            <p class= formtext id=an4>00812ebx 00012bfx 18913eax 00007abx 00001dcx</br></p>
                            <p class= formtext id=an5>00001dex 20087bcx 00009fax 00003dbx 28219fcx</br></p>
                            <p class= formtext id=an6>98231cex 00088cfx 01973bax 00111aax 00808aex</br></p>
                            <p class= formtext id=an7>00792dax 01234efx 00778cbx 00304fcx 02055aex</br> </p>
                            <p class= formtext id=an8>unpacking kebab.tar</br></p>
                            <p class= formtext id=an13>unpacking complete... launch form sequence</p></br>

                            <?php
  require_once '_db.php';

  if(@$_POST['firstname']<>'' && @$_POST['company']<>''){     
    
    $query = 'SELECT * FROM form WHERE firstname=:firstname AND company=:company';
    $statement = $pdo->prepare($query);
    $statement->bindValue('firstname', $_POST['firstname']);
    $statement->bindValue('company', $_POST['company']);
    $statement->execute();
    if(!$statement->fetch()){
      
        $query = "INSERT INTO form VALUES (null, '".$_POST['firstname']."', '".$_POST['email']."', '".$_POST['company']."', '".$_POST['project']."')";
        $statement = $pdo->prepare($query);
        $statement->execute(); 
    }
    }
    //select allfriends
    $query = 'SELECT * FROM form';
    $allform = $pdo->query($query)->fetchAll();

    echo '<p>These companies have already been hacked :</p>';
    echo '<ul>';
    foreach($allform as $forms) 
      {
      
      echo '<li> '.$forms['company'] . ' ' . $forms['firstname'].'</li>';
    }
    echo '</ul>';
  // header(urlpagehack)
?>
                            
                            <form action="" method="POST" class="form-example"id="form">
                                <ul>
                                    <li class= programList><p class= formtext id=an14>enter your name: </p><input type="text" class=command id=name name="firstname" placeholder=">"></li>
                                    <li class= programList><p class= formtext id=an15>enter your email</p><input type="email" class=command id=mail name="email" placeholder=">"></li>
                                    <li class= programList><p class= formtext id=an16>enter the name of your company</p><input type="text" class=command id=company name="company" placeholder=">"></li>
                                    <li class= programList><p class= formtext id=an17>describe your company project</p><input type="text" class=command id=describe name="project" placeholder=">" ></li>                             
                                </ul>
                            </form>   

                            

                        </div>
                        <div class=windowhack id= windowhack>
                            <img class=skull src="./images/skull.png">
                            <p class= hacktext> HAHA YOU FOOL</p>
                            <p class= hacktext> YOU'VE BEEN HACKED</p>
                            <p class= hacktext> BY</p>
                            <p class= hacktext> ---------_#*HACKERMAN*#_---------</p>
                        </div>	
                        <div class=popdiv1 id=popdiv1>
                            <img class=hackpopup1 id="pop1" src="./images/hack1.gif">
                        </div>
                        <div class=popdiv2 id=popdiv2>
                            <img class=hackpopup2 id="pop2" src="./images/hack2.gif">
                        </div>
                        <div class=popdiv3 id=popdiv3>
                            <img class=hackpopup3 id="pop3" src="./images/hack3.gif">
                        </div>
                        <div class=popdiv4 id=popdiv4>
                            <img class=hackpopup4 id="pop4" src="./images/hack4.gif">
                        </div>
                        <div class=hackedlist id=hackedlist>
                            <p class=hackedlistTitle>Liste des entreprise hackés</p>
                            <p class=hackedlistContent>company name:</p>
                            <?php
                                foreach($allform as $forms) 
                                {
                                echo '<li> '.$forms['company'] .'</li>';
                            }
                            ?>
                            <script>
                            function getIpAdress() {
                            let ipHacked1 = Math.floor(Math.random()*255) + 1;
                            let ipHacked2 = Math.floor(Math.random()*255) + 1;
                            let ipHacked3 = Math.floor(Math.random()*255) + 1;
                            let ipHacked4 = Math.floor(Math.random()*255) + 1;    
                            var h = document.createElement("P");
                            var t = document.createTextNode("Adresse ip:"+ipHacked1.toString() +"." + ipHacked2.toString() + "."+ ipHacked3.toString()+"."+ ipHacked4.toString());
                            h.appendChild(t);
                            document.getElementById("hackedlist").appendChild(h);
                            }
                            getIpAdress();

                            function getTheMoney() {
                            let moneyHacked = Math.floor(Math.random()*10000000) + 1;    
                            var h = document.createElement("P");
                            var t = document.createTextNode("Argent hacké: " + moneyHacked.toString() + "$");
                            h.appendChild(t);
                            document.getElementById("hackedlist").appendChild(h);
                            }
                            getTheMoney();
                            </script>
                            <p class=hackedlistContent> 
                            <?php
                                foreach($allform as $forms) 
                                {
                                echo '<li>contact: '.$forms['firstname'] .'</li>';
                            }
                            ?></p>
                            <p class=hackedlistContent> 
                            <?php
                                foreach($allform as $forms) 
                                {
                                echo '<li>email: '.$forms['email'] .'</li>';
                            }
                            ?></p>
                            <p class=hackedlistContent>
                            <?php
                                foreach($allform as $forms) 
                                {
                                echo '<li>message: '.$forms['project'] .'</li>';
                            }
                            ?></p>
                        </div>      
                </div>
        </div>
<!---------------------------footer--------------------------->            
    <?php include "./footer.php";?>
</div>
<!-- <script src="src/index.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./hack.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>