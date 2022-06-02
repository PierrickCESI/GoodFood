<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
@include('header')
    <div class="row">
        <div class="container-fluid bg-dark text-white text-center mb-5">
            <h1>{{__('cmd details.orderDetails') }}</h1>
        </div>
        <div class="container align-items-center">
            <h2>{{__('cmd details.yourOrder') }} : </h2>
            <div class="text-center" style="border: solid 1px;">
                <h2>{{__('cmd details.chosenFormula') }}</h2>
            </div>
            <h2 class="text-center">{{__('cmd details.description') }} : </h2>
            <div class="row">
                <h2>Pizza : </h2>
                <hr class="w-100">
                <div class="container d-flex justify-content-align">
                    <div class="col-4">
                        <h3>Reine : </h3>
                        <p>Fromage, jambon, champignons</p>
                        <button type="button" class="btn btn-info">{{__('cmd details.modify') }}</button>
                        <button type="button" class="btn btn-danger">{{__('cmd details.delete') }}</button>
                    </div>
                    <div class="col-4">
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <p>12€</p>
                    </div>
                </div>
                <hr class="w-100">
                <div class="container d-flex justify-content-align">
                    <div class="col-4">
                        <h3>Chorizo : </h3>
                        <p>Fromage, chorizo, champignons</p>
                        <button type="btn" class="btn btn-info">{{__('cmd details.modify') }}</button>
                        <button type="btn" class="btn btn-danger">{{__('cmd details.delete') }}</button>
                    </div>
                    <div class="col-4">
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <p>12€</p>
                    </div>
                </div>
                <div class="container d-flex justify-content-align">
                    <div class="col-9">
                    </div>
                    <div class="col-3">
                        <b>{{__('cmd details.total') }} : 24 €</b>
                    </div>
                </div>
                <hr class="w-100">
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-info">{{__('cmd details.pay') }}</button>
            </div>
        </div>
    </div>


</body>
<footer>
    @include('footer')
</footer>

</html>
