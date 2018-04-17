<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en" ng-app="myapp">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/data/trgovina.css">

    <title>Hello, world!</title>
  </head>
  <body ng-controller="artikelCtrl">
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8080/index.php/Kosarica/index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080/index.php/Kosarica/link">Dodaj artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080/index.php/Kosarica/link2">Izbriši artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080/index.php/Kosarica/link3">Posodobi artikel</a>
                    </li>
                    </ul>
                </div>
                   
                    <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php echo $_SESSION['uporabnik'] ?>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                    
                                    
                                            <div class="dropdown-divider"></div>
                                            <a href="/"><button class="dropdown-item" type="button">odjava</button></a>
                                            
                                
                                </div>
                                </div>
                                       
                              
                              
                </nav>
            </div>
</div>      
            
            <form action="/index.php/Admin/dodaj" method="POST">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                    <input type="text" class="form-control" placeholder="ime artikla" name="imeA"> 
                    <input type="text" class="form-control" placeholder="opis artikla" name="opis">
                    <input type="text" class="form-control" placeholder="cena" name="cena">
                    <input type="text" class="form-control" placeholder="zaloga" name="zaloga">
                    <input type="text" class="form-control" placeholder="povezava do slika" name="link">
                    <input class="btn m-2" type="submit" value="dodaj v bazo">
                    </div>
                    <div class="col-4">
                   
                    </div>
                    
                </div>
                </form>


           

        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="/data/angular.min.js"></script>
    <script>
        

    var app = angular.module("myapp", []);
                app.controller("artikelCtrl", function($scope, $http){
                    $http.get("http://localhost:8080/index.php/Artikli/admin").then(function(data) {
                        console.log(data);
                        $scope.uporabniki = data.data[0];
                        $scope.kosarica = data.data[1];
                        
                    });

                    

                    
                });

               

    </script>
  
  </body>
</html>