@extends('home')

@section('title', 'Product Show')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Product Details</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td><img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="100"></td>
                        <td>{{ $product->description }}</td>
                        <td>{{ number_format($product->price, 2) }} VNĐ</td> <!-- Format price -->
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category_id }}</td>
                        @php
                            use Carbon\Carbon;
                        @endphp
                        <td>{{ Carbon::parse($product->created_at)->format('d-m-Y H:i') }}</td>
                        <td>{{ Carbon::parse($product->updated_at)->format('d-m-Y H:i') }}</td>
                        <td class="d-flex justify-content-start">
                            <a href="#" class="btn btn-info mr-2">View</a>

                            <a href="{{ route('admin.products.addform') }}" class="btn btn-primary mr-2">Add</a>

                            <a href="{{ route('admin.products.editProducts', $product->id) }}"
                                class="btn btn-warning mr-2">Edit</a>

                            <form action="{{ route('admin.products.deleteProduct', $product->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this product?');"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
