@extends('layouts.body')
@section('content')
    <section class="wish-list-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table cart-table wishlist-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">availability</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wishlists as $wishlist)
                                <tr>
                                    @if ($wishlist->user_id == Auth::user()->id)
                                        @foreach ($products as $product)
                                            @if ($product->id == $wishlist->product_id)
                                                <td>
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/' . $product->image) }}"
                                                            alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="details.php" class="font-light">{{ $product->name }}</a>
                                                    <div class="mobile-cart-content row">
                                                        <div class="col">
                                                            <p>In Stock</p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="fw-bold">${{ $product->price }}</p>
                                                        </div>
                                                        <div class="col">
                                                            <h2 class="td-color">
                                                                <a href="javascript:void(0)" class="icon">
                                                                    <i class="fas fa-times"></i>
                                                                </a>
                                                            </h2>
                                                            <h2 class="td-color">
                                                                <a href="cart.php" class="icon">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fw-bold">${{ $product->price }}</p>
                                                </td>
                                                <td>
                                                    <p>In Stock</p>
                                                </td>
                                                <td>
                                                    <form action="" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $wishlist->id }}">
                                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" formaction="{{ route('cartStore') }}">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </button>
                                                        <button type="submit" formaction="{{ route('wishlistDe') }}">
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
            </div>
        </div>
    </section>
@endsection
