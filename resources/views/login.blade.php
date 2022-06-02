<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        @include('header')
    </head>
    <body>
        <div class="container">
            <div class="row">
               <div class="col"><img src="../../../../Desktop/ECOLE/img/goodfood%20logo.png" width="450" height="450" class="Avatar" ></div>
               <div class="col">

               <form class="" method=post action=>
                    <br> <br> <br>
                       <h3 align="center">Connexion</h3> <br>
                           <div class="container">
                               <i class="fa fa-users"></i>
                               <label for="">Nom d'utilisateur</label>
                               <input type="text" class="form-control" placeholder="Login">
                               <br>
                               <i class="fa fa-key"></i>
                               <label for="">Mot de passe</label>
                               <input type="password" class="form-control" placeholder="Mot de passe">
                           </div>
                           <br>
                           <div class="col">
                               <button class="btn btn-success btn-lg btn-block">
                                   <!--<i class="fas fa-share-square"></i>-->
                                   Connexion
                               </button>
                               <button class="btn btn-primary btn-lg btn-block">
                                <!--<i class="fas fa-share-square"></i>-->
                                Connexion avec Google
                            </button>
                           </div>
               </form>
               </div>
            </div>
        </div>
    </body>
<footer>
    @include('footer')
</footer>
</html>
