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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/data/trgovina.css">

   

    <title>Juvan HUMAN shop</title>
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
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                      
                        </ul>
                    </div>
                    <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Prijava
                                </button>
                                <div class="dropdown-menu">
                                    <form class="px-4 py-3" action="/index.php/Prijava/vstop" method="POST">
                                      <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Uporabniško ime</label>
                                        <input type="text" class="form-control" id="uporabnik" placeholder="ime" name="uporabnik">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleDropdownFormPassword1">Geslo</label>
                                        <input type="password" class="form-control" id="geslo" placeholder="Geslo" name="geslo">
                                      </div>
                                
                                      <button type="submit" class="btn btn-primary">Prijavi se</button>
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item" data-toggle="modal" data-target="#registracija">Registriraj se</button>
                                    
                                    </div>

                                        <div class="modal fade" id="registracija" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Registracija</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="px-4 py-3" action="index.php/Prijava/registracija" method="POST">
                                                        <div class="form-group">
                                                            <label for="exampleDropdownFormEmail1">Uporabniško ime</label>
                                                            <input type="text" class="form-control" name="uporabnikR" placeholder="ime">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleDropdownFormPassword1">Geslo</label>
                                                            <input type="password" class="form-control" name="gesloR" placeholder="Geslo">
                                                        </div>
                                                    
                                                    
                                                        
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn gumb" data-dismiss="modal">Zapri</button>
                                                    <button type="submit" class="btn gumb">Registriraj se</button>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                              
                              
                </nav>
            </div>
        </div>
        <div class="row py-1">
            <div class="col m-1" ng-repeat="art in artikli">
                <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{art.slika}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{art.ime}}</h5>
                        <button class="btn gumb" data-toggle="modal" data-target="#{{art.ime}}">description</button>
                        <div class="modal fade" id="{{art.ime}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{art.ime}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{art.opis}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn gumb" data-dismiss="modal">Zapri</button>
                                    <button ng-click="dodaj($index)" class="btn gumb">Dodaj v kosarico</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <button type="button" id="pop" class="btn gumb " data-container="body" data-toggle="popover" data-placement="top" title="dodaj v košarico" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on top
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/data/angular.min.js"></script>
    <script>
        
        




        

    var app = angular.module("myapp", []);
                app.controller("artikelCtrl", function($scope, $http){
                    $http.get("http://localhost:8080/index.php/Artikli/getArtikli").then(function(data) {
                        console.log('dela');
                        $scope.artikli = data.data[0];
                        $scope.kosarica = [];
                    });

                    $scope.dodaj = function(id){
                        if($scope.artikli[id].zaloga != 0){
                            $scope.kosarica.push(id);
                            $scope.artikli[id].zaloga -= 1;

                            

                        }        
                       
                        
                    }

                    
                });

               

    </script>
</body>
</html>