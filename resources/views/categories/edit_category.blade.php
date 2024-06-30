
@extends('layouts.main-body')
@section("css")
<style>
    #image-container {
        width: 300px;
        height: 300px;
        border: 2px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    #image-container img {
        max-width: 100%;
        max-height: 100%;
    }

    #file-input {
        display: none;
    }
</style>
@endsection
@section('content')

<section class="add_products">
    <div class="container">
        <div class="heading">
            <h1>Edit Category</h1>
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
        </div>
    @endif

    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
        </div>
    @endif

    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
        </div>
    @endif
        </div>
        <form action="{{ route('categories.update' , $category->id) }}" method="POST">
            {{ method_field('patch') }}
            {{ csrf_field() }}
            <div class="image_input mt-2">
                <label for="imageInput" class="d-block">Image</label>
                <div id="image-container">
                    <img id="display-image" src="{{ asset('assets/images/'.$category->image) }}" alt="Click to select image">
                </div>
                <input type="file" id="file-input" accept="image/*"  name="image">
                {{-- <div id="image-container">
                    <img id="display-image" src="{{ asset('assets/images/'.$category->image) }}" alt="Click to select image">
                </div>
                <input type="file" class="dropify" name="image" data-height="100" data-width="50" class="w-100" id="file-input"
                    accept="image/*" value="{{ $category->image }}"> --}}
            </div>

            <div class="name_input mt-3">
                <input type="hidden" name="id" id="id" value="{{ $category->id }}">
                <label for="name" class="d-block">Category Name</label>
                <input type="text" class="w-100" name="name" id="name" placeholder="Enter Product Name" value="{{ $category->name }}">
            </div>
            <div class="desc mt-3">
                <label for="desc" class="d-block">Category Details</label>
                <textarea name="details" id="desc" name="details" class="w-100" placeholder="Enter Product Details">{{ $category->details }}</textarea>
            </div>

            <input type="submit" class="mt-3" value="Edit Category">
        </form>
    </div>
</section>
@endsection
@section("js")
<script>
    const imageContainer = document.getElementById('image-container');
    const displayImage = document.getElementById('display-image');
    const fileInput = document.getElementById('file-input');

    imageContainer.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                displayImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection
