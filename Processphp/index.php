<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <title>My PickUp</title>
   <style>
       @font-face {
            font-family: 'Handlee-Regular';
            src: url('../Handlee-Regular.ttf');
        }
        
        h1{
            font-family: 'Handlee-Regular';
            font-size: 40px;
            color: black;
        }
       nav{
        text-align: right;
        color: lightskyblue;
        font-size: 20px;
           
       }
       body{
  font-family: 'Lato', sans-serif;
}
.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
} 
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
} 
.carousel-caption {
    text-shadow: 0 1px 4px rgba(0,0,0,.9);
  font-size:17px
}
.carousel-caption h3 {
  font-size: 30px;
  font-family: 'Lato', sans-serif;
}
    html,
    body,
    .carousel,
    .carousel-inner,
    .carousel-inner .item {
      height: 100%;
    } 
    .item:nth-child(1) {
  background: url(images/carry.jpeg);
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
    }

    .item:nth-child(2) {
      background: url(images/dest.jpg);
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
    }

    .item:nth-child(3) {
      background: url(images/colis.jpg);
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
    }
   </style>
</head>

   <?php require_once('header.php'); 
       ?>
</br>

<div style='text-align:center;'>
<h3 style='text-align: center;margin: 5px 0px;border-bottom: 2px solid #666; display:inline-block;padding-bottom:10px'></h3>
</div>
    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">  
                <div class="carousel-caption">
                  <h3>My Pick Up entre particuliers </h3>
                  <p>Rejoignez aujourd'hui la communauté My Pick Up </p>
                </div>
            </div>
            <div class="item"> 
                <div class="carousel-caption">
                  <h3>My Pick Up partout dans le monde</h3>
                  <p>Envois dans plus de 500 destinations,.</p>
                </div>
            </div>
            <div class="item"> 
                <div class="carousel-caption">
                  <h3>My Pick Up en toute sécurité</h3>
                  <p>Envois assurés et sécurisés.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>



<?php
       
include_once'../Classes/Users.php';
include_once '../Classes/Posts.php';
require_once('../Classes/Stock.php');
   $newstock = new Stock();

  
  
if (isset($_SESSION['utilisateur'])){
    $user = $_SESSION['utilisateur'];
    if (is_file('../utilisateur/'.$user.'.txt')){
        
       $contenu= $newstock->readUser($user);
        echo $newstock->asHtml($contenu);

    }
}
$listeAnnonce = $newstock->readPosts();

foreach ($listeAnnonce as $annonce){

   echo '<br/>'.$annonce->htmlpost();
}



?>

</html>