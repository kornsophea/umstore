@extends('admin.layouts.master')

@section('page')
    Order Details
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Order Details</h4>
                    <p class="category">Order details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->address }}</td>
                                <td>
                                    @if ($order->status)
                                        <span class="label label-success">Confirmed</span>
                                    @else
                                        <span class="label label-warning">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($order->status)
                                        {{ link_to_route('order.pending', 'Pending', $order->id, ['class'=>'btn btn-warning btn-sm']) }}
                                    @else
                                        {{ link_to_route('order.confirm', 'Confirm', $order->id, ['class'=>'btn btn-success btn-sm']) }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">User Details</h4>
                    <p class="category">User Details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
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
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Product Details</h4>
                    <p class="category">Product Details</p>
                </div>
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
    <a href="{{ route('orders') }}" class="btn btn-success">Back to Orders</a>
@endsection
