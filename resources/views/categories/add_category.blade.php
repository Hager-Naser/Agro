
@extends('layouts.main-body')
@section('content')

<section class="add_products">
    <div class="container">
        <div class="heading">
            <h1>Add Category</h1>
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
        </div>
        <form action="{{ route('categories.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="image_input mt-2">
                <label for="imageInput" class="d-block">Image</label>
                <input type="file" class="dropify" name="image" data-height="100" data-width="50" class="w-100" id="imageInput"
                    accept="image/*" required>
            </div>

            <div class="name_input mt-3">
                <label for="name" class="d-block">Category Name</label>
                <input type="text" class="w-100" name="name" id="name" placeholder="Enter Product Name" required>
            </div>
            <div class="desc mt-3">
                <label for="desc" class="d-block">Category Details</label>
                <textarea name="" id="desc" name="details" class="w-100" placeholder="Enter Product Details"></textarea>
            </div>

            <input type="submit" class="mt-3" value="Add Category">
        </form>
    </div>
</section>
@endsection
