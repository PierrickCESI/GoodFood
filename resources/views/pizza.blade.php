<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
    @include('header')
            <div class="container-fluid bg-dark text-white text-center mb-5">
                <h1>{{__('pizza.pizza') }}</h1>
            </div>

            <div class="container-fluid d-flex">
                <div class="col-4">
                    <img src="/img/pizza_marguerita.jpg" class="h-200 w-100 " style="width: 38rem;">
                </div>
                <div class="col-6">
                    <p>Sed si ille hac tam eximia fortuna propter utilitatem rei publicae frui non properat, ut omnia illa conficiat, quid ego, senator, facere debeo, quem, etiamsi ille aliud vellet, rei publicae consulere oporteret?
                        Sed si ille hac tam eximia fortuna propter utilitatem rei publicae frui non properat, ut omnia illa conficiat, quid ego, senator, facere debeo, quem, etiamsi ille aliud vellet, rei publicae consulere oporteret?
                        Quam ob rem cave Catoni anteponas ne istum quidem ipsum, quem Apollo, ut ais, sapientissimum iudicavit; huius enim facta, illius dicta laudantur. De me autem, ut iam cum utroque vestrum loquar, sic habetote.</p>

                </div>

            </div>

            <div class="container-fluid text-center mt-5">
                <a href="{{route('cmd details')}}" class="btn btn-primary"><h3>{{__('pizza.order') }}</h3></a>
            </div>

            <div class="container-fluid mt-5">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{__('pizza.value')}}
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th><select class="form-select" aria-label="Default select example">
                                            <option>{{__('pizza.mediumSize') }}</option>
                                            <option>{{__('pizza.largeSize') }}</option>
                                            <option>{{__('pizza.XLSize') }}</option>
                                        </select></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{__('pizza.energy_kj') }}</td>
                                    <td>kJ</td>
                                </tr>
                                <tr>
                                    <td>{{__('pizza.energy_kcal') }}</td>
                                    <td>kCal</td>
                                </tr>
                                <tr>
                                    <td>{{__('pizza.fat') }}</td>
                                    <td>g</td>
                                </tr>
                                <tr>
                                    <td>{{__('pizza.saturated_fatty_acids') }}</td>
                                    <td>g</td>
                                </tr>
                                <tr>
                                    <td>{{__('pizza.carbs') }}</td>
                                    <td>g</td>
                                </tr>
                                <tr>
                                    <td>{{__('pizza.fiber') }}</td>
                                    <td>g</td>
                                </tr>
                                <tr>
                                    <td>{{__('pizza.protein') }}</td>
                                    <td>g</td>
                                </tr>
                                <tr>
                                    <td>{{__('pizza.salt') }}</td>
                                    <td>g</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              {{__('pizza.allergens') }}
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>

            </div>
        </div>
    </body>
<footer>
    @include('footer')
</footer>
</html>
