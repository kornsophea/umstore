@extends('front.layouts.master')

@section('content')
  <div class="px-16 py-16">
    <h2><strong>User Order Details Page</strong></h2>

    <br>
    <hr>

    <div class="row">

        <div class="col-md-12">
            <h4 class="title"></h4>
            <div class="content table-responsive table-full-width">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th colspan="7">Order Details</th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->date }}</td>
                        <td>{{ $order->address }}</td>
                        <td>
                            @if ($order->status)
                                <span class="badge badge-success">Confirmed</span>
                            @else
                                <span class="badge badge-warning">Pending</span>
                            @endif
                        </td>

                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="col-md-6">

            <h4 class="title"><strong>User Details</strong></h4>
            <br>
            <hr>
            <div class="content table-responsive table-full-width">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <td>{{ $order->user->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $order->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $order->user->email }}</td>
                    </tr>
                    <tr>
                        <th>Registered At</th>
                        <td>{{ $order->user->created_at->diffForHumans() }}</td>
                    </tr>

                    </thead>
                </table>
            </div>
        </div>
          <div class="col-md-12">
           <div class="header py-2">
                    <h4 class="title">Product Details</h4>
                </div>
            <div class="card">
               
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->items as $item)
                                <tr>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td><img src="{{ asset('uploads/' . $item->product->image) }}" alt="{{ $item->product->name }}" style="width: 50px; height: auto;"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection