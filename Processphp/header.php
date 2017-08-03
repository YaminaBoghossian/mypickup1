<?php
     session_start();
     ?>
     <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <title></title>
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
<body>
    <?php
   
if(isset($_SESSION['utilisateur'])){
    //echo .'<p>Bonjour, '.$_SESSION['utilisateur'].'</p>';//
   echo '.<header class="clearfix">
    <div class="container">
        <div class="header-left">
           <h1><a href="index.php">My Pick Up</a></h1>
        </div>
        <div class="header-right">
            <label for="open">
                <span class="hidden-desktop"></span>
            </label>
            
				
				<nav>
		<a href="espaceperso.php">My account</a>
					<a href ="../html/Postform.html"> New post</a>
					<a href="#"> Search</a>
					<a href="../html/about.html">About</a>
					<a href="#">Contact</a>
                                        
                                        <a href="deconnexion.php">Sign out</a>
				</nav>
			</div>
		</div>
	</header>.'; 



   
} else {
   echo '.<header class="clearfix">
    <div class="container">
        <div class="header-left">
            <h1>My Pick Up</h1>
        </div>
        <div class="header-right">
            <label for="open">
                <span class="hidden-desktop"></span>
            </label>
				
				<nav>
		<a href="../html/inscription.html">Sign up</a>
					<a href="../html/signinform.html">Sign in</a>
					<a href="#">See the last posts</a>
					<a href="../html/about.html">About</a>;
					<a href="#">Contact</a>
				</nav>
			</div>
		</div>
	</header>';
   
 } ?>
   
</body>
</html>