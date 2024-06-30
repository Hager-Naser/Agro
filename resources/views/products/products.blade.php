@extends('layouts.main-body')

                    @section('content')
                        <!-- start view products  -->
                        <div class="view_products">
                            <div class="container">
                                <div class="heading">
                                    <h1>Products</h1>
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
                                    @foreach ($products as $product)
                                        @foreach ($categories as $category)
                                            @if ($product->category_id == $category->id)
                                                <div class="box">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/images/' . $category->image) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="desc">
                                                        <h3>{{ $product->name }}</h3>

                                                        <h5 style="text-transform: capitalize">{{ $category->name }} Category</h5>

                                                        <p>{{ $product->details }}</p>
                                                        <p>Price : <span style="color: rgb(173, 15, 15);font-size:18px;margin-left:20px;"> ${{ $product->price }} </span></p>
                                                        <p>Discount : <span style="color: rgb(173, 15, 15);font-size:18px;margin-left:20px;">  ${{ $product->discount }} </span></p>

                                                    </div>

                                                    <div
                                                        class="edit_delete d-flex justify-content-between w-100 align-items-center">
                                                        <a class="btn" data-bs-id="{{ $product->id }}"
                                                            data-bs-name="{{ $product->name }}" data-bs-toggle="modal"
                                                            data-bs-target="#modaldemo9">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>
                                                        <a href="{{ route('products.edit', $product) }}">
                                                            <i class="fa-solid fa-edit"></i>
                                                        </a>
                                                    </div>

                                                    {{-- -----------------------------delete-------------------------------------- --}}
                                                    <div class="modal" id="modaldemo9">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content modal-content-demo">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title"> Delete Product</h6>
                                                                </div>
                                                                <form
                                                                    action="{{ route('products.destroy', $product->id) }}"
                                                                    method="post">
                                                                    {{ method_field('delete') }}
                                                                    {{ csrf_field() }}
                                                                    <div class="modal-body">
                                                                        <p>Are you sure from delete product</p><br>
                                                                        <input type="hidden" name="id" id="id"
                                                                            value="{{ $product->id }}">
                                                                        <input class="form-control" name="name"
                                                                            id="name" type="text" readonly
                                                                            placeholder="{{ $product->name }}">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
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
