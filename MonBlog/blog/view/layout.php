<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>MonBlog</title>

</head>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand " href="#">MONBLOG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="?op=home">&nbsp;Acceuil
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?op=add">&nbsp;Ajouter</a>
          </li>


        </ul>
        <form class="d-flex" method="post" action="?op=recherche">        
          <input class="form-control me-sm-2" name="recherche" type="search" placeholder="rechercher un article">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </nav>
  
</header>

<body>
  <h1 class="text-center my-5  font-italic" style="color : #868E96 ;">BIENVENUE SUR MONBLOG</h1>
  
  <div class="img-fluid" alt="Responsive image"">
  <img src="https://cdn.pixabay.com/photo/2016/12/23/12/40/night-1927265__480.jpg" style="width: 100%;" >
  </div>

  <div class="container my-5" style="min-height: 79vh;">
   <?= $content; ?>
  </div>

  <footer class="container-fluid navbar-dark bg-dark text-center" style="min-height: 60px; color: white;">
    <p style="padding: 15px"><?= date('Y') ?> - Tous droits reservés - <i class="fa-solid fa-copyright"></i>MONBLOG</p>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>