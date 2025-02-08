@extends('home')

@section('title', 'Product List')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Product List</h1>

        <!-- Thêm thông báo nếu có thành công hoặc lỗi -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

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
                        <th>Category ID</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td><img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="100"></td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->category_id }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td class="d-flex justify-content-start">
                                <a href="{{route('admin.products.show',$product->id)}}" class="btn btn-info mr-2">View</a>


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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
