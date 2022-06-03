        <header>
                <div class="container bg-white border-bottom">
                    <div class="container-fluid d-flex justify-content-around bg-white mt-2 mb-2 ">
                        <a href="{{route('index')}}"><img src="/img/logo.png" style="width: 47px; height: 57px;"></a>
                        <a href="{{route('menu')}}"><h3 class="my-auto nav-link text-decoration-none text-secondary">{{__('header.menu') }}</h3></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#ModalFormula"><h3 class="my-auto nav-link text-decoration-none text-secondary">{{__('header.ourFormulas') }}</h3></a>
                        <a href="#"><h3 class="my-auto nav-link text-decoration-none text-secondary">{{__('header.ourPromotions') }}</h3></a>
                        <a href="{{route('cmd details')}}"><h3 class="my-auto nav-link text-decoration-none text-secondary">{{__('header.shoppingCart') }}</h3></a>
                        <a href="{{route('login')}}"><h3 class="my-auto nav-link text-decoration-none text-secondary">{{__('header.login') }}</h3></a>
                    </div>
                </div>
            <title>GoodFood</title>
        </header>


        <!-- Modal -->
        <div class="modal fade" id="ModalFormula" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('header.formula') }} Pizza + {{__('header.drink') }} + {{__('header.dessert') }}</h5>
                    </div>
                    <div class="modal-body d-flex justify-content-around" >
                        <div class="card" style="width: 15rem; float: left; border: none">
                            <img src="/img/pizza-reine.jpg" style="width: 10em; height: 10em;" class="rounded mx-auto d-block" alt="pizza">
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 15rem; float: left; border: 0px;">
                            <img src="/img/coca.jpg" style="width: 10em; height: 10em;" class="rounded mx-auto d-block" alt="pizza">
                            <div class="card-body">
                                <h5 class="card-title">{{__('header.drink') }}</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 15rem; float: left; border: none;">
                            <img src="/img/tiramisu.png" style="width: 10em; height: 10em;" class="rounded mx-auto d-block" alt="pizza">
                            <div class="card-body">
                                <h5 class="card-title">{{__('header.dessert') }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('header.close') }}</button>
                        <button type="button" class="btn btn-primary">{{__('header.takeIt') }}</button>
                    </div>
                </div>
            </div>
        </div>
