<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title ?> - Filmovix</title>

    <!-- META TAGS -->
    <meta name="description" content="Flimflix - kao netflix samo bolje!"/>
    <meta property="og:url" content="http://filmoflix.herokuapp.com"/>
    <meta property="og:locale" content="rs" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $page_title ?> - Filmoflix" />

    <link rel="canonical" href="http://filmoflix.herokuapp.com/" />
    <link type="text/plain" rel="author" href="http://filmoflix.herokuapp.com/humans.txt" />
    <meta name="theme-color" content="#ffffff">    
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- BOOTSTRAP -->    
    <link rel="stylesheet" href="css/bootstrap.min.css">    

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Filmoflix</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="main-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/movies.php?id=random">Iznenadi me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.php">O nama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.php">Kontakt</a>
                    </li>
                </ul>
                <div>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">Prijavi se</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#register-modal">Registruj se</a>
                        </li>
                    </ul>
                </div>                
            </div>
        </nav>
    </header>

    <!-- Login Modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Prijava</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="login-email">Email adresa</label>
                    <input type="email" class="form-control input" required id="login-email" aria-describedby="emailHelp" placeholder="Unesite email">
                </div>
                <div class="form-group">
                    <label for="login-password">Unesite lozinku</label>
                    <input type="password" class="form-control input" required id="login-password" placeholder="Lozinka">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary-my">Prijavi se</button>
                </div>
            </form>
          </div>          
        </div>
      </div>
    </div>

    <!-- Registration Modal -->
    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="register-modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registracija</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="reg-email">Email adresa</label>
                    <input type="email" class="form-control input" required id="reg-email" aria-describedby="emailHelp" placeholder="Unesite email">
                </div>
                <div class="form-group">
                    <label for="reg-password">Unesite lozinku</label>
                    <input type="password" class="form-control input" required id="reg-password" placeholder="Lozinka">
                </div>
                <div class="form-group">
                    <label for="reg-password-confirm">Potvrdite lozinku</label>
                    <input type="password" class="form-control input" required id="reg-password-confirm" placeholder="Lozinka">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary-my">Registruj se</button>
                </div>
            </form>
          </div>          
        </div>
      </div>
    </div>