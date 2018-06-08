@extends('index')
@section('content')
<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row inner-bottom-sm">
            <div class="shopping-cart">
                <div class="col-md-12 col-sm-12 shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="cart-romove item">Remove</th>
                                    <th class="cart-description item">Image</th>
                                    <th class="cart-product-name item">Product Name</th>
                                    <th class="cart-edit item">Edit</th>
                                    <th class="cart-qty item">Quantity</th>
                                    <th class="cart-sub-total item">Subtotal</th>
                                    <th class="cart-total last-item">Grandtotal</th>
                                </tr>
                            </thead>
                            <!-- /thead -->
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="shopping-cart-btn">
                                            <span class="">
                                                <a href="{{route('trang_chu')}}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                            </span>
                                        </div>
                                        <!-- /.shopping-cart-btn -->
                                    </td>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if(Session::has('cart'))
                                {{-- @foreach($product as $cart) --}}
                                    <tr>
                                        <td class="romove-item">
                                            <a href="#" title="cancel" class="icon">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                        <td class="cart-image">
                                            <a class="entry-thumbnail" href="detail.html">
                                                <img src="assets/images/products/shopping_cart_01.jpg" alt="">
                                            </a>
                                        </td>
                                        <td class="cart-product-name-info">
                                            <h4 class='cart-product-description'>
                                                <a href="detail.html">Simple Products Demo</a>
                                            </h4>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="rating rateit-small"></div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="reviews">
                                                        (06 Reviews)
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                            <div class="cart-product-info">
                                                <span class="product-imel">IMEL:
                                                    <span>084628312</span>
                                                </span>
                                                <br>
                                                <span class="product-color">COLOR:
                                                    <span>White</span>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="cart-product-edit">
                                            <a href="#" class="product-edit">Edit</a>
                                        </td>
                                        <td class="cart-product-quantity">
                                            <div class="quant-input">
                                                <div class="arrows">
                                                    <div class="arrow plus gradient">
                                                        <span class="ir">
                                                            <i class="icon fa fa-sort-asc"></i>
                                                        </span>
                                                    </div>
                                                    <div class="arrow minus gradient">
                                                        <span class="ir">
                                                            <i class="icon fa fa-sort-desc"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <input type="text" value="1">
                                            </div>
                                        </td>
                                        <td class="cart-product-sub-total">
                                            <span class="cart-sub-total-price">$539.88</span>
                                        </td>
                                        <td class="cart-product-grand-total">
                                            <span class="cart-grand-total-price">$539.88</span>
                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
                                @endif    
                            </tbody>
                            <!-- /tbody -->
                        </table>
                        <!-- /table -->
                    </div>
                </div>
            </div>
            <!-- /.shopping-cart -->
        </div>
    </div>
    <!-- /.container -->
</div>
@endsection
@section('title','Giỏ Hàng')