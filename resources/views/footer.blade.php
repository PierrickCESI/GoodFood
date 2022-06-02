<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <footer>
            <div class="row">
                <div class="container-fluid bg-dark mt-5">
                    <div class="container-fluid d-flex justify-content-around bg-white mt-2">
                        <div class="col-2">
                            <h5>{{__('footer.products') }}</h5>
                            <h7><a href="{{route('menu')}}">{{__('footer.menu') }}</a></h7><br>
                            <h7>{{__('footer.pizza') }}</h7><br>
                            <h7>{{__('footer.recipe') }}</h7>
                        </div>

                        <div class="col-2">
                            <h5>GoodFood</h5>
                            <h7>{{__('footer.about') }}</h7><br>
                            <h7>{{__('footer.cookie') }}</h7><br>
                            <h7>{{__('footer.personalData') }}</h7><br>
                            <h7>{{__('footer.newsletter') }}</h7>
                        </div>

                        <div class="col-2">
                            <h5>{{__('footer.contact') }}</h5>
                            <h7>{{__('footer.service') }}</h7><br>
                            <h7>{{__('footer.policy') }}</h7><br>
                            <h7>{{__('footer.unsubscribe') }}</h7>
                        </div>

                        <div class="col-2">
                            <h5>{{__('footer.offer') }}</h5>
                            <h7>{{__('footer.promotion') }}</h7>
                        </div>
                    </div>
                    <div class="container-fluid d-flex justify-content-around bg-white">
                        <div class="col-3 mt-5">
                            <h5>{{__('footer.pay') }}</h5>
                        </div>
                        <div class="col-3 mt-5">
                            <h5>{{__('footer.follow') }}</h5>
                        </div>
                    </div>
                    <div class="container-fluid bg-white mb-2 text-center">
                        <h5>{{__('footer.legal') }}</h5>
                        <h5>{{__('footer.condition') }}</h5>
                        <h5>{{__('footer.cookieParameter') }}</h5>
                        <h5>{{__('footer.eatMove') }}</h5>
                        
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
