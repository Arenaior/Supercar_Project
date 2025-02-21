
<!DOCTYPE HTML>
<html>
<head>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<!--déclaration de la barre de navigation avec couleur noire-->
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand  text-white" href="#" >
      <!--insertion logo-->
      <img src="../../assets/images/barre-logo.PNG"  width="70" height="70" > SUPERCAR</a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-3 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" aria-current="page" href="../Accueil/accueil.php">Accueil</a>
        </li>
       
        <li class="nav-item mx-3">
          <a class="nav-link active text-white" href="#">Nos voitures</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active text-white" href="#">Services</a>
        </li>

        <li class="nav-item mx-3">
          <a class="nav-link text-white" href="../Clients/inscription/signer.php">Demande d'essai</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-white" href="#">Contactez-Nous</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

	
</html>