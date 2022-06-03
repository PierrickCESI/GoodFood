<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ url('/css/goodfood.css') }}" />
    </head>
    <body>

    @include('header')
        <h1 class="text-center mt-3">{{__('index.orderNow') }}</h1>

            <div class="container d-flex justify-content-around mt-5">
                <a href="{{route('menu')}}" class="btn">
                    <div class="card bg-success text-white" style="width: 18rem;">
                        <div class="card-body ">
                          <h5 class="card-title">{{__('index.delivery') }}</h5>
                          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#FFFFFF" class="bi bi-bicycle" viewBox="0 0 16 16">
                                <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
                            </svg>

                          <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                          <div class="text-right">
                          </div>
                        </div>
                    </div>
                </a>

                <a href="{{route('menu')}}" class="btn">
                    <div class="card bg-danger text-white" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{__('index.takeaway') }}</h5>
                           <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#FFFFFF" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>

                        </div>
                    </div>
                </a>

            </div>
            <div class="container mt-5">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/img/fondGoodFood.png" alt="Margueritha" width="907" height="886" class="mx-auto d-block">
                        <div class="carousel-caption">
                          <h3>Margueritha</h3>
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
    </body>
    @include('footer')
</html>
