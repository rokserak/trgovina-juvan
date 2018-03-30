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
    <link rel="stylesheet" href="data/trgovina.css">

    

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
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                        </ul>
                    </div>
                    <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Prijava
                                </button>
                                <div class="dropdown-menu">
                                    <form class="px-4 py-3">
                                      <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Uporabniško ime</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="ime">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleDropdownFormPassword1">Geslo</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Geslo">
                                      </div>
                                
                                      <button type="submit" class="btn btn-primary">Prijavi se</button>
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Registriraj se</a>
                                    
                                  </div>
                              </div>
                              <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Košarica
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <h3 class="pl-3">Izdelki</h3>
                                        <div class="dropdown-divider"></div>
                                      <button class="dropdown-item" type="button">Action</button>
                                      <div class="dropdown-divider"></div>
                                      <button class="dropdown-item" type="button">Another action</button>
                                      <div class="dropdown-divider"></div>
                                      <button class="dropdown-item" type="button">Something else here</button>
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        <a href="#" class="btn gumb">Go cart</a>
                    </div>
                </div>
            </div>
            <!--
            <div class="col m-1">
                <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="ostro.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary">description</a>
                        <a href="#" class="btn btn-primary">Go cart</a>
                    </div>
                </div>
            </div>
            <div class="col m-1">
                <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="ostro.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary">description</a>
                        <a href="#" class="btn btn-primary">Go cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-1">
            <div class="col m-1">
                <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="ostro.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary">description</a>
                        <a href="#" class="btn btn-primary">Go cart</a>
                    </div>
                </div>
            </div>
            <div class="col m-1">
                <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="ostro.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary">description</a>
                        <a href="#" class="btn btn-primary">Go cart</a>
                    </div>
                </div>
            </div>
            <div class="col m-1">
                <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="ostro.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary">description</a>
                        <a href="#" class="btn btn-primary">Go cart</a>
                    </div>
                </div>
            </div>
            !-->
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="data/angular.min.js"></script>
    <script>
        

    var app = angular.module("myapp", []);
                app.controller("artikelCtrl", function($scope, $http){
                    $http.get("index.php/Artikli/getArtikli").then(function(data) {
                        console.log('dela');
                        $scope.artikli = data.data;
                    });
                });

    </script>
</body>
</html>