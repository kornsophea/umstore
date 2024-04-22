@extends('front.layouts.master')

@section('content')
 @if ( session()->has('msg') )
        <div class="alert alert-success">{{ session()->get('msg') }}</div>
    @endif
<div class="row text-center px-16 py-4">
 

 @foreach ($products as $product)
        <div class="py-4 col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('/uploads') . '/' . $product->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $product->name }}</strong></h5>

                    <p class="card-text">
                       {{ $product->description }}
                    </p>
                </div>
                <div class="card-footer ">
                   <strong style="color: #00796b;">${{ $product->price }}</strong>

                    <form action="{{ route('/cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="image" value="{{ $product->image }}">
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</button>
                    </form>
                </div>
            </div>
        </div>

        @endforeach

    
    </div>
     <!-- Pagination -->
            <ol class="mb-8 flex justify-center gap-1 text-xs font-medium">
                <li>
                    <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100">
                        <span class="sr-only">Prev Page</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="#" class="block h-8 w-8 rounded border-black bg-black text-center leading-8 text-white">
                        1
                    </a>
                </li>

                <li>
                    <a href="#" class="block h-8 w-8 rounded border border-gray-100 text-center leading-8">
                        2
                    </a>
                </li>

                <li>
                    <a href="#" class="block h-8 w-8 rounded border border-gray-100 text-center leading-8">
                        3
                    </a>
                </li>

                <li>
                    <a href="#" class="block h-8 w-8 rounded border border-gray-100 text-center leading-8">
                        4
                    </a>
                </li>

                <li>
                    <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100">
                        <span class="sr-only">Next Page</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            </ol>
@endsection

@section('script')
<script>
        function incrementQuantity() {
            var quantityInput = document.getElementById('quantity');
            var currentQuantity = parseInt(quantityInput.value);
            var newQuantity = currentQuantity + 1;
            quantityInput.value = newQuantity;
        }
    </script>
@endsection