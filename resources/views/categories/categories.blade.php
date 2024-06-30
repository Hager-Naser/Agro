@extends('layouts.main-body')
{{-- @section('css')
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection --}}
@section('content')

    <!-- start view products  -->
    <div class="view_products">
        <div class="container">
            <div class="heading">
                <h1>Categories</h1>
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
            <div class="boxes d-flex justify-content-start align-items-center flex-wrap">
                @foreach ($categories as $category)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('assets/images/' . $category->image) }}" alt="">
                        </div>
                        <div class="desc">
                            <h3>{{ $category->name }}</h3>
                            <p>{{ $category->details }}</p>
                        </div>

                        {{-- <button class="btn btn-outline-success btn-sm" data-bs-name="{{ $category->name }}"
                            data-bs-id="{{ $category->id }}" data-bs-details="{{ $category->details }}"
                            data-bs-toggle="modal" data-bs-target="#exampleModal2">Edit</button>
                        <button class="btn btn-outline-danger btn-sm " data-bs-id="{{ $category->id }}"
                            data-bs-name="{{ $category->name }}" data-bs-toggle="modal"
                            data-bs-target="#modaldemo9">Delete</button> --}}
                        <div class="edit_delete d-flex justify-content-between w-100 align-items-center">
                            <a class="btn" data-bs-id="{{ $category->id }}" data-bs-name="{{ $category->name }}"
                                data-bs-toggle="modal" data-bs-target="#modaldemo9">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                            <a href="{{ route('categories.edit' , $category) }}">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                        </div>

                        {{-- -----------------------------delete-------------------------------------- --}}
                        <div class="modal" id="modaldemo9">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title"> Delete Category</h6>
                                    </div>
                                    <form action="{{ route('categories.destroy' , $category->id) }}" method="post">
                                        {{ method_field('delete') }}
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <p>Are you sure from delete category</p><br>
                                            <input type="hidden" name="id" id="id" value="{{ $category->id }}">
                                            <input class="form-control" name="name" id="name" type="text"
                                                readonly placeholder="{{ $category->name }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>

        $('#modaldemo9').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
        })
    </script>
@endsection
