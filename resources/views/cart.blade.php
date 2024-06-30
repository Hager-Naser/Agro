@extends('layouts.body')
@section("titlePage" , "Cart")
@section('content')
    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">total</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($carts as $cart)
                                <tr>
                                    @if ($cart->user_id == Auth::user()->id)
                                        @foreach ($products as $product)
                                            @if ($product->id == $cart->product_id)

                                                <td>
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/' . $product->image) }}"
                                                            alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="../product/details.html">{{ $product->name }}</a>
                                                    <div class="mobile-cart-content row">
                                                        <div class="col">
                                                            <div class="qty-box">
                                                                <div class="input-group">
                                                                    <input type="text" name="quantity"
                                                                        class="form-control input-number" value="1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <h2>{{ $product->price }}</h2>
                                                        </div>
                                                        <div class="col">
                                                            <h2 class="td-color">
                                                                <a href="javascript:void(0)">
                                                                    <i class="fas fa-times"></i>
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h2>${{ $product->price }}</h2>
                                                </td>
                                                <td>
                                                    <div class="qty-box ">
                                                        <div class="input-group">
                                                            <form id="cart" action="{{ route('cartUp') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $cart->id }}">
                                                                <input type="hidden" name="product_id" value="{{ $cart->product_id }}">
                                                                <input type="hidden" name="user_id" value="{{ $cart->user_id }}">
                                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                                <button style="outline: none;border: none;">
                                                                <input type="number" name="quantity" class="form-control input-number" value="{{ $cart->quantity }}">
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h2 class="td-color">${{ $cart->total }}</h2>
                                                </td>
                                                <td>
                                                        <form action="{{ route('cartDe') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $cart->id }}">
                                                            <button>
                                                            <i class="fas fa-times"></i>
                                                            </button>
                                                        </form>
                                                </td>
                                            @endif
                                        @endforeach
                                    @endif
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="col-12 mt-md-5 mt-4">
                    <div class="row">
                        <div class="col-sm-7 col-5 order-1">
                            <div class="left-side-button text-end d-flex d-block justify-content-end">
                                <form action="{{ route('cartDeAll') }}" method="post">
                                    @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <button class="btn btn-solid-default btn fw-bold mb-0 ms-0">clear all items</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-5 col-7">
                            <div class="left-side-button float-start">
                                <a href="../shop.html" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-checkout-section">
                    <div class="row g-4">


                        <div class="col-lg-4 col-sm-6 ">
                            <div class="checkout-button">
                                <a href="checkout" class="btn btn-solid-default btn fw-bold">
                                    Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details">
                                            <?php $subTotal = 0;
                                            $tax = 50; ?>
                                            @foreach ($carts as $cart)
                                                @if ($cart->user_id == Auth::user()->id)
                                                    <?php $subTotal = $subTotal + (int) $cart->total; ?>
                                                @endif
                                            @endforeach
                                            <h6>Sub Total <span>${{ $subTotal }}</span></h6>
                                            <h6>Tax <span>${{ $tax }}</span></h6>
                                            <h3>Cart Totals</h3>

                                            <h6>Total <span>${{ $subTotal + $tax }}</span></h6>
                                        </div>
                                        <div class="bottom-details">
                                            <a href="checkout">Process Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
