@extends('layouts.master')
@section('css')
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Sub Categories</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
{{-- @section('content')
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
    <!-- row -->
    <div class="row">
         -----------------------------ADD--------------------------------------
        <div class="col-xl-12">
                <div class="card mg-b-20">
                    @can('Add Sub Category')
                    <div class="card-header pb-0">
                        <div class="d-flex">
                            <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                                data-toggle="modal" href="#modaldemo8"> Add Sub Category</a>
                            <div class="modal" id="modaldemo8">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">

                                            <h6 class="modal-title"> Add Sub Category</h6><button aria-label="Close"
                                                class="close" data-dismiss="modal" type="button"><span
                                                    aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('subcategories.store') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label>Subcategory Name<span class="text-danger">*</span></label>
                                                    <input id="name" type="text" class="form-control" name="name"
                                                        value="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Category Name<span class="text-danger">*</span></label>
                                                    <select name="category_id" id="category_id" class="form-control">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Details</label>
                                                    <textarea class="form-control" name="details" id="details" rows="3"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn ripple btn-success" type="submit">Add</button>
                                                    <button class="btn ripple btn-secondary" data-dismiss="modal"
                                                        type="submit">Close</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endcan
                    @can('All Sub Categories')

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'
                                style="text-align: center">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">#</th>
                                        <th class="border-bottom-0">Subcategory Name</th>
                                        <th class="border-bottom-0">Category Name</th>
                                        <th class="border-bottom-0">Details</th>
                                        <th class="border-bottom-0">Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategories as $subcategory)
                                        <tr>
                                            <td>{{ $subcategory->id }}</td>
                                            <td>{{ $subcategory->name }}</td>
                                            <td>{{ $subcategory->category->name }}</td>
                                            <td>{{ $subcategory->details }}</td>

                                            <td>
                                                @can('Edit Sub Category')
                                                    <button class="btn btn-outline-success btn-sm"
                                                        data-name="{{ $subcategory->name }}" data-id="{{ $subcategory->id }}"
                                                        data-details="{{ $subcategory->details }}"
                                                        data-category_name="{{ $subcategory->category->name }}"
                                                        data-toggle="modal" data-target="#exampleModal2">Edit</button>
                                                @endcan
                                                @can('Delete Sub Category')
                                                    <button class="btn btn-outline-danger btn-sm "
                                                        data-id="{{ $subcategory->id }}" data-name="{{ $subcategory->name }}"
                                                        data-toggle="modal" data-target="#modaldemo9">Delete</button>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endcan
            </div>
        </div>
         -----------------------------EDIT--------------------------------------
        @can('Edit Sub Category')
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Edit Subcategory</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action='subcategories/update' method="post">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="title">Subcategory Name</label>

                                    <input type="hidden" class="form-control" name="id" id="id"
                                        value="">

                                    <input type="text" class="form-control" name="name" id="name">
                                </div>

                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Category Name</label>
                                <select name="category_id" id="category_name" class="custom-select my-1 mr-sm-2" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                <div class="form-group">
                                    <label for="des"> Details</label>
                                    <textarea name="details" cols="20" rows="5" id='details' class="form-control"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Edit </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan
         -----------------------------delete--------------------------------------

        @can('Delete Sub Category')
            <div class="modal" id="modaldemo9">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title"> Delete Subcategory</h6><button aria-label="Close" class="close"
                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="subcategories/destroy" method="post">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <p>Are you sure from delete subcategory</p><br>
                                <input type="hidden" name="id" id="id" value="">
                                <input class="form-control" name="name" id="name" type="text" readonly>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        @endcan
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection --}}
@section('content')
    <div class="card">

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('subcategories.store') }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="row mb-3 mt-3">
                <div class="col-6">
                    <label>Enter Category or Subcategory <span class="text-danger">*</span></label>
                    <input id="name" type="text" class="form-control" name="name" value="">
                </div>
                @error('name')
                        <div class="text-danger font-weight-bold my-2">{{ $message }}</div>
                    @enderror
                <div class="col-6">
                    <label>Select Category </label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value=""></option>
                        @foreach (App\Category::all() as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                        <div class="text-danger font-weight-bold my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-row my-2">
                    <div class="col-4">
                        <label for="file">
                            Upload Subcategory Image<span class="text-danger" style="font-size:20px">*</span>
                            <img src="" id="image" class="w-100"
                                style="cursor: pointer;" alt="">
                        </label>
                        <input type="file" name="image" id="file" class="d-none" onchange="loadFile(event)">
                        @error('image')
                        <div class="text-danger font-weight-bold my-2">{{ $message }}</div>
                    @enderror

                    </div>
                </div>
                <button class="btn ripple btn-primary col-12 mb-5" type="submit">Add</button>

            </form>

            @if (isset($categories) || isset($subcategories))
                <table class="table  table-inverse mt-3">
                    <thead class="thead-inverse mt-3 mb-3">
                        <tr class="">
                            <th class="text-center" style="font-size: 30px"><p>All Categories & Subcategories</p></th>

                        </tr>
                    </thead>
                    <tbody class="col-12 mt-3">

                        @foreach ($categories->all() as $category)
                            <tr class="col-12">
                                <td>
                                    <button class="btn " type="button" data-toggle="collapse"
                                        data-target="#{{ $category->name }}" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        {{ $category->name }}
                                    </button>
                                    <div class="collapse" id="{{ $category->name }}">
                                        <div class="card card-body">



                                            <form action="{{ route('categories.update', $category) }}" method="post">
                                                {{ method_field('patch') }}
                                                {{ csrf_field() }}
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label for="title">Category Name</label>

                                                        <input type="hidden" class="form-control" name="id"
                                                            id="{{ $category->id }}" value="{{ $category->id }}">

                                                        <input type="text" class="form-control" name="name"
                                                            id="name" value="{{ $category->name }}">
                                                    </div>



                                                    <div class="form-group">
                                                        <label for="des"> Details</label>
                                                        <textarea name="details" cols="20" rows="5" id='details' class="form-control"></textarea>
                                                    </div>



                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Edit </button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @foreach ($subcategories->all() as $subcategory)
                                @if ($subcategory->category_id == $category->id)
                                    <tr>
                                        <td scope="row">
                                            <button class="btn " type="button" data-toggle="collapse"
                                                data-target="#{{ $subcategory->name }}" aria-expanded="false"
                                                aria-controls="collapseExample">
                                                --{{ $subcategory->name }}
                                            </button>
                                            <div class="collapse" id="{{ $subcategory->name }}">
                                                <div class="card card-body">

                                                    <form action='{{ route('subcategories.update', $subcategory) }}'
                                                        method="post" enctype="multipart/form-data">
                                                        {{ method_field('patch') }}
                                                        {{ csrf_field() }}
                                                        <div class="modal-body">

                                                            <div class="form-group">
                                                                <label for="title">Subcategory Name</label>

                                                                <input type="hidden" class="form-control" name="id"
                                                                    id="{{ $subcategory->id }}"
                                                                    value="{{ $subcategory->id }}">

                                                                <input type="text" class="form-control" name="name"
                                                                    id="name" value="{{ $subcategory->name }}">
                                                            </div>

                                                            <label class="my-1 mr-2"
                                                                for="inlineFormCustomSelectPref">Category Name</label>
                                                            <select name="category_id" id="category_name"
                                                                class="custom-select my-1 mr-sm-2" required>
                                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                                </option>
                                                            </select>

                                                            <div class="form-group">
                                                                <label for="des"> Details</label>
                                                                <textarea name="details" cols="20" rows="5" id='details' class="form-control"></textarea>
                                                            </div>


                                                            <div class="form-row my-2">
                                                                <div class="col-4">
                                                                    <img src="{{ asset('assetUser/images/fashion/banner/' . $subcategory->image) }}"
                                                                            id="imageupdate" class="w-100 rounded-circle" style="cursor: pointer;" alt="">
                                                                    <label for="input-file">upload</label>
                                                                    <input type="file" name="image" id="input-file" class="">
                                                                    @error('image')
                                                                        <div class="text-danger font-weight-bold my-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Edit </button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>
@endsection
@section('js')
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>

    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('image');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endsection
