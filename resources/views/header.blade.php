<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <div class="row">
                <div class="container-fluid bg-dark">
                    <div class="container-fluid d-flex justify-content-around bg-white mt-2 mb-2 ">
                        <a href="{{route('index')}}"><img src="/img/logo.png" style="width: 47px; height: 57px;"></a>
                        <a href="{{route('menu')}}"><h3 class="my-auto">Carte</h3></a>
                        <a href="#"><h3 class="my-auto">Nos formules</h3></a>
                        <a href="#"><h3 class="my-auto">Nos promos</h3></a>
                        <a href="{{route('cmd details')}}"><h3 class="my-auto">Panier</h3></a>
                        <a href="{{route('login')}}"><h3 class="my-auto">Login</h3></a>
                    </div>
                </div>

            </div>
        </header>
    </body>

</html>
