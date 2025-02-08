

@extends('home')

@section('title', 'Categories')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Category List</h1>
    
    <!-- Thêm thông báo thành công hoặc lỗi nếu có -->
    @if(session('success'))
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
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td class="d-flex justify-content-start">
                            <a href="{{ route('admin.categories.addCategoriesForm') }}" class="btn btn-primary mr-2">ADD</a>
                            <a href="{{ route('admin.categories.editCategories', ['id' => $category->id]) }}" class="btn btn-warning mr-2">EDIT</a>
                            <form action="{{ route('admin.categories.deleteCategories', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
