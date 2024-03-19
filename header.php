<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="layout.css">
    
</head>
<body>
    <header>
        <h2>Health is Wealth</h2>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        
        
        <div class="container-fluid">
          <h3><a class="navbar-brand text-danger" href="http://localhost/project/">Home</a></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="drugs.php">Drugs & Suppliments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="doctors.php">Find a Doctor</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Emergency Contacts
                    </a>
                    <ul class="dropdown-menu ">
                    <li><a class="dropdown-item" href="">General : 999</a></li>
                    <li><a class="dropdown-item" href="">Fire service : 16163</a></li>
                    <li><a class="dropdown-item" href="">Aparajeyo child support : 1098</a></li>
                    </ul>
                </li>
                </ul>
            
          </div>
        </div>  
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="signup.php">Sign Up </a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="login.php">Log In</a>
        </li>
        </ul>
        <button class="btn btn-dark " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">||||</button>

    </nav>

    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <a style="text-align: center;" href="profile.php"><h4>Profile</h4></a>

    </div>
    <div class="offcanvas-body">
    </div>
    </div>
    
    
    
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>