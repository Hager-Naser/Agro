
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
            <h1>Edit Product</h1>
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
        <form action="{{ route('products.update' , $product->id) }}" method="POST">
            {{ method_field('patch') }}
            {{ csrf_field() }}
            <div class="image_input mt-2">
                <label for="imageInput" class="d-block">Image</label>
                <div id="image-container">
                    <img id="display-image" src="{{ asset('assets/images/'.$product->image) }}" alt="Click to select image">
                </div>
                <input type="file" id="file-input" accept="image/*"  name="image">

            </div>
            <div class="name_input mt-3">
                <label for="name" class="d-block">Product Name</label>
                <input type="hidden" name="id" id="id" value="{{ $product->id }}">
                <input type="text" class="w-100" name="name" id="name" placeholder="Enter Product Name" value="{{ $product->name }}">
            </div>
            <div class="type mt-3">
                <label for="type" class="d-block">Choose Type</label>
                <select name="category_id" id="type">
                    <option value="choose" disabled selected>Choose Type</option>
                    @foreach ($categories as $category )

                    <option value="{{ $category->id }}" <?= ($product->category_id == $category->id)? "selected" : "" ?> >{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="desc mt-3">
                <label for="desc" class="d-block">Products Details</label>
                <textarea id="desc" name="details" class="w-100" placeholder="Enter Product Details" >{{ $product->details }}</textarea>
            </div>
            <div class="price_input mt-3">
                <label for="Price" class="d-block">Products Price</label>
                <input type="number" class="w-100" name="price" id="Price" placeholder="Enter Product Price" value="{{ $product->price }}">
            </div>
            <div class="price_input mt-3">
                <label for="Price" class="d-block">Products Discount</label>
                <input type="text" class="w-100" name="discount" id="discount" placeholder="Enter Product Discount" value="{{ $product->discount }}">
            </div>

            <input type="submit" class="mt-3" value="Edit product">
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
