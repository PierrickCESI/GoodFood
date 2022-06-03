<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    @include('header')
            <div class="container-fluid text-dark text-center mb-5 mt-3">
                <h1>{{__('menu.menu') }}</h1>
            </div>
            <div class="container-fluid d-flex justify-content-around mb-5">
                <div class="cards border border-dark" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="/img/pizza_marguerita.jpg" alt="Margueritha">
                        <h5 class="card-title text-center"><a href="{{route('pizza')}}"> {{__('menu.pizzaName') }} </a></h5>
                         <select class="form-control" data-role="select-dropdown">
                            <option>{{__('menu.mediumSize') }}</option>
                            <option>{{__('menu.largeSize') }}</option>
                            <option>{{__('menu.XLSize') }}</option>
                        </select>
                        <select class="form-control mt-2" data-role="select-dropdown">
                            <option>{{__('menu.creamBase') }}</option>
                            <option>{{__('menu.tomatoBase') }}</option>
                        </select>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary">{{__('menu.add') }}</a>
                        </div>
                    </div>
                </div>

                <div class="cards border border-dark" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="/img/pizza-reine.jpg" alt="Reine">
                        <h5 class="card-title text-center"><a href="#">{{__('menu.pizzaName') }}</a></h5>

                         <select class="form-control" data-role="select-dropdown">
                             <option>{{__('menu.mediumSize') }}</option>
                             <option>{{__('menu.largeSize') }}</option>
                             <option>{{__('menu.XLSize') }}</option>
                        </select>
                        <select class="form-control mt-2" data-role="select-dropdown">
                            <option>{{__('menu.creamBase') }}</option>
                            <option>{{__('menu.tomatoBase') }}</option>
                        </select>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary">{{__('menu.add') }}</a>
                        </div>
                    </div>
                </div>

                <div class="cards border border-dark" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="/img/pizza-chorizo.jpg" alt="Chorizo">
                        <h5 class="card-title text-center"><a href="#">{{__('menu.pizzaName') }}</a></h5>
                         <select class="form-control" data-role="select-dropdown">
                             <option>{{__('menu.mediumSize') }}</option>
                             <option>{{__('menu.largeSize') }}</option>
                             <option>{{__('menu.XLSize') }}</option>
                        </select>
                        <select class="form-control mt-2" data-role="select-dropdown">
                            <option>{{__('menu.creamBase') }}</option>
                            <option>{{__('menu.tomatoBase') }}</option>
                        </select>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary">{{__('menu.add') }}</a>
                        </div>
                    </div>
                </div>

                <div class="cards border border-dark" style="width: 18rem;">
                    <div class="card-body">
                       <img class="card-img-top" src="/img/pizza-4-fromages.jpg" alt="4 Fromages" style="">
                        <h5 class="card-title text-center"><a href="#">{{__('menu.pizzaName') }}</a></h5>
                         <select class="form-control" data-role="select-dropdown">
                             <option>{{__('menu.mediumSize') }}</option>
                             <option>{{__('menu.largeSize') }}</option>
                             <option>{{__('menu.XLSize') }}</option>
                        </select>
                        <select class="form-control mt-2" data-role="select-dropdown">
                            <option>{{__('menu.creamBase') }}</option>
                            <option>{{__('menu.tomatoBase') }}</option>
                        </select>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary">{{__('menu.add') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid d-flex justify-content-around">
                <div class="cards border border-dark" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="/img/pizza_marguerita.jpg" alt="Margueritha">
                        <h5 class="card-title text-center"><a href="{{route('pizza')}}"> {{__('menu.pizzaName') }} </a></h5>
                        <select class="form-control" data-role="select-dropdown">
                            <option>{{__('menu.mediumSize') }}</option>
                            <option>{{__('menu.largeSize') }}</option>
                            <option>{{__('menu.XLSize') }}</option>
                        </select>
                        <select class="form-control mt-2" data-role="select-dropdown">
                            <option>{{__('menu.creamBase') }}</option>
                            <option>{{__('menu.tomatoBase') }}</option>
                        </select>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary">{{__('menu.add') }}</a>
                        </div>
                    </div>
                </div>

                <div class="cards border border-dark" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="/img/pizza-reine.jpg" alt="Reine">
                        <h5 class="card-title text-center"><a href="#">{{__('menu.pizzaName') }}</a></h5>

                        <select class="form-control" data-role="select-dropdown">
                            <option>{{__('menu.mediumSize') }}</option>
                            <option>{{__('menu.largeSize') }}</option>
                            <option>{{__('menu.XLSize') }}</option>
                        </select>
                        <select class="form-control mt-2" data-role="select-dropdown">
                            <option>{{__('menu.creamBase') }}</option>
                            <option>{{__('menu.tomatoBase') }}</option>
                        </select>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary">{{__('menu.add') }}</a>
                        </div>
                    </div>
                </div>

                <div class="cards border border-dark" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="/img/pizza-chorizo.jpg" alt="Chorizo">
                        <h5 class="card-title text-center"><a href="#">{{__('menu.pizzaName') }}</a></h5>
                        <select class="form-control" data-role="select-dropdown">
                            <option>{{__('menu.mediumSize') }}</option>
                            <option>{{__('menu.largeSize') }}</option>
                            <option>{{__('menu.XLSize') }}</option>
                        </select>
                        <select class="form-control mt-2" data-role="select-dropdown">
                            <option>{{__('menu.creamBase') }}</option>
                            <option>{{__('menu.tomatoBase') }}</option>
                        </select>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary">{{__('menu.add') }}</a>
                        </div>
                    </div>
                </div>

                <div class="cards border border-dark" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="/img/pizza-4-fromages.jpg" alt="4 Fromages" style="">
                        <h5 class="card-title text-center"><a href="#">{{__('menu.pizzaName') }}</a></h5>
                        <select class="form-control" data-role="select-dropdown">
                            <option>{{__('menu.mediumSize') }}</option>
                            <option>{{__('menu.largeSize') }}</option>
                            <option>{{__('menu.XLSize') }}</option>
                        </select>
                        <select class="form-control mt-2" data-role="select-dropdown">
                            <option>{{__('menu.creamBase') }}</option>
                            <option>{{__('menu.tomatoBase') }}</option>
                        </select>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary">{{__('menu.add') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div>

            </div>
            <div class="container">

                <nav class="mt-5" aria-label="Something">
                   <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                         <a class="page-link" href="#" tabindex="-1">{{__('menu.previous') }}</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                         <a class="page-link" href="#">{{__('menu.next') }}</a>
                      </li>
                   </ul>
                </nav>
            </div>

    </body>
<footer>
    @include('footer')
</footer>
</html>
