<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        @include('header')
    </head>
    <body>
        <h2 class="text-center mt-5">{{__('index.orderNow') }}</h2>

        <div class="row">
            <div class="container d-flex justify-content-around mt-5">
                <div class="card bg-success text-white" style="width: 18rem;">
                    <div class="card-body ">
                      <h5 class="card-title">{{__('index.delivery') }}</h5>
                      <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                      <div class="text-right">
                        <a href="{{route('menu')}}" class="btn btn-primary rounded-circle">Go</a>
                      </div>
                    </div>
                </div>
                <div class="card bg-danger text-white" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{__('index.takeaway') }}</h5>
                      <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                      <div class="text-right">
                        <a href="{{route('menu')}}" class="btn btn-primary rounded-circle">Go</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="">{{__('index.promotion') }}</div>
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../../../../Desktop/ECOLE/img/pizza_flickr_4932057475_2a9ce50750_b.jpg" alt="Los Angeles" width="1100" height="500">
                        <div class="carousel-caption">
                          <h3>Los Angeles</h3>
                          <p>We had such a great time in LA!</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="../../../../Desktop/ECOLE/img/Pizza_Margherita_stu_spivack.jpg" alt="Chicago" width="1100" height="500">
                        <div class="carousel-caption">
                          <h3>Chicago</h3>
                          <p>Thank you, Chicago!</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="../../../../Desktop/ECOLE/img/pizzaweb-1280x720.jpg" alt="New York" width="1100" height="500">
                        <div class="carousel-caption">
                          <h3>New York</h3>
                          <p>We love the Big Apple!</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  </div>
            </div>
        </div>
    </body>
<footer>
    @include('footer')
</footer>
</html>
