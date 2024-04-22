@extends('front.layouts.master')
@section('content')
<div class="px-16 py-16">
   <h1 class="mt-5 font-weight-bold mb-4"><i class="fa fa-shopping-cart"></i> Shopping Cart</h1>

    <hr>

    @if ( Cart::instance('default')->count() > 0 )

        <h4 class="mt-5">{{ Cart::instance('default')->count() }} item(s) in Shopping Cart</h4>

        <div class="cart-items">

            <div class="row">

                <div class="col-md-12">

                    @if ( session()->has('msg') )

                        <div class="alert alert-success">{{ session()->get('msg') }}</div>

                    @endif

                    @if ( session()->has('errors') )

                        <div class="alert alert-warning">{{ session()->get('errors') }}</div>

                    @endif

                    <table class="table">

                        <tbody>

                        @foreach (Cart::instance('default')->content() as $item )
                            <tr>
                                <td><img class="card-img-top" src="{{ url('/uploads') . '/' . $item->options->image }}" style="width: 5em"></td>
                                <td>
                                    <strong>{{ $item->name }}</strong><br> {{ $item->description }}
                                </td>
                                <td>
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-link btn-link-dark">Remove</button>
                                    </form>
                                    <form action="{{ route('cart.saveLater', $item->rowId) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-link btn-link-dark">Save for later</button>
                                    </form>
                                </td>
                                <td>
                                    <div class="input-group" style="width: 8em;">
                                        <button class="btn btn-link btn-link-dark btn-minus" type="button">-</button>
                                        <input class="form-control quantity "style="width: 2em;" value="{{ $item->qty }}" data-id="{{ $item->rowId }}">
                                        <button class="btn btn-link btn-link-dark btn-plus" type="button">+</button>
                                    </div>
                                </td>
                                <td id="total_{{ $item->rowId }}" data-price="{{ $item->price }}">{{ $item->total() }}</td>

                            </tr>
                        @endforeach



                        </tbody>

                    </table>

                </div>
                <!-- Price Details -->
                <div class="col-md-6">
                    <div class="sub-total">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th colspan="2">Price Details</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>Subtotal</td>
                                <td>${{ Cart::subtotal() }}</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>${{ Cart::tax() }}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th>${{ Cart::total() }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Save for later  -->
                <div class="col-md-12">
                    <a href="/" class="btn btn-outline-dark">Continue Shopping</a>
                    <a href="/checkout" class="btn btn-outline-info">Proceed to checkout</a>
                    <hr>
                </div>
                @else
                   <h3 class="mb-4 mt-4">There is no item in your Cart</h3>
<hr>
                    <a href="/" class="mb-4 mt-4 btn btn-outline-dark">Continue Shopping</a>
                    
                @endif


                @if ( Cart::instance('saveForLater')->count() > 0 )

                    <div class="col-md-12">

                        <h4>{{ Cart::instance('saveForLater')->count() }} items Save for Later</h4>
                        <table class="table">

                            <tbody>

                            @foreach (Cart::instance('saveForLater')->content() as $item )

                                <tr>
                                    <td><img src="{{ url('/uploads') . '/'. $item->model->image }}" style="width: 5em">
                                    </td>
                                    <td>
                                        <strong>{{ $item->model->name }}</strong><br> {{ $item->model->description }}
                                    </td>

                                    <td>

                                        <form action="{{ route('saveLater.destroy', $item->rowId) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-link btn-link-dark">Remove</button>
                                        </form>

                                        <form action="{{ route('moveToCart', $item->rowId) }}" method="post">

                                            @csrf

                                            <button type="submit" class="btn btn-link btn-link-dark">Move to cart
                                            </button>

                                        </form>

                                    </td>

                                    <td>
                                        <select name="" id="" class="form-control" style="width: 4.7em">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                        </select>
                                    </td>

                                    <td>${{ $item->total() }}</td>
                                </tr>

                            @endforeach

                            </tbody>

                        </table>

                    </div>

                @endif
            </div>

        </div>


</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>

        const incrementButtons = document.querySelectorAll('.btn-plus');
        const decrementButtons = document.querySelectorAll('.btn-minus');

        incrementButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const id = button.parentNode.querySelector('.quantity').getAttribute('data-id');
                const inputField = button.parentNode.querySelector('.quantity');
                const newValue = parseInt(inputField.value) + 1;
                updateQuantity(id, newValue);
            });
        });

        decrementButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const id = button.parentNode.querySelector('.quantity').getAttribute('data-id');
                const inputField = button.parentNode.querySelector('.quantity');
                const newValue = parseInt(inputField.value) - 1;
                if (newValue >= 1) {
                    updateQuantity(id, newValue);
                }
            });
        });

        function updateQuantity(id, newValue) {
            axios.patch(`/cart/update/${id}`, {
                quantity: newValue
            })
            .then(function (response) {
                location.reload();
            })
            .catch(function (error) {
                console.log(error);
            });
        }

    </script>


@endsection