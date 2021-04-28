<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-1.11.1.js"></script>
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet " href="bootstrap-4.5.3-dist/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/209f8ed90c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.min.js"></script>
    <title>Home</title>
</head>
<body>
  <div class="menu fixed">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Duracell</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" id="inscriver" href="inscription.php">inscrivez-vous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connexion.php">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="panier.php">Voir votre panier</a>
          </li>
          
        </ul>
         
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/images.jpg" class="d-block w-100" alt="Banner1">
        </div>
       
        <div class="carousel-item">
          <img src="image/images (1).jpg" class="d-block w-100" alt="Banner2">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
 
    
  </div>
  <div class="boutique"   align="center">
    <div class="d-grid gap-2 col-6 mx-auto">
 
      <a class="btn btn-primary col-sm-8 col-form-label" href="boutique.php">voir les produit</a>
      
    </div>
  </div>
  
  

  <div class="link-social" align="center"><span>SUIVEZ-NOUS</span>
    <ul class="liste-inline">
      <li>
          <a href="https://twitter.com/LTinass" target="_blank">
              <i class="fab fa-twitter"></i>
          </a>
       </li>
       <li>
      <a href="https://www.facebook.com/profile.php?id=100004948273726" target="_blank">
         <i class="fab fa-facebook"></i>
        </a>
       </li>
       <li>
       <a href="https://www.instagram.com/lallajassmine/?hl=fr"   target="_blank">
       <i class="fab fa-instagram"></i>
         </a>
         </li>
    
    </ul>
    </div>


  
    
  <div class="row no-gutters">
    <div class="contact" >
      <div class="col-6 col-md-4">
        <div class="address">
          <ul>
            <li> <img src="image/phone.png" alt="phone"> <span>+212 612-345678</span></li>
            <li> <img src="image/email.png" alt="email"> <span>contact@dwm.ma</span></li>
            <li><img src="image/location.png" alt="location"> <span>BP 159 Mohammedia Principal</span></li>
          </ul>
        </div>
      </div>
   
      <div class="col-sm-6 col-md-8">
        <div class="location">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.1649224451016!2d-7.362641985454823!3d33.70468114341428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7b6d0db170185%3A0x79759da1a916fc50!2sENSET%20Mohammedia!5e0!3m2!1sfr!2sma!4v1607097886180!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
  
      </div>
   
    </div>
   
  </div>
  <footer>
    <div class="conteneur">    
        - Tous droits reservés - Duracell.
    </div>
</footer>
   

  

  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="jquery-3.6.0.js"> </script>
    <script src="jsjqfunct.js"> </script>
    <script >
         const jsonString = JSON.stringify(products.json);
         const xhr = new XMLHttpRequest();

         xhr.open("POST","script.php");
         xhr.setRequestHeader("COntent-Type", "application/json");
         xhr.send(jsonString);
         
    </script>
</body>
</html>