@extends('index')
@section('content')
<div class="body-content outer-top-bd">
    <div class="container">
        <div class="track-order-page inner-bottom-sm">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thông tin sinh viên</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style=""><a href="https://www.facebook.com/nguyentran.phuocthien">
                        <img class="card-img-top" src="template/assets/images/1.jpg" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title">Nguyễn Thiện</h5>
                            <p class="card-text">
                               Quá dẹp trai thôi!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style=""><a href="https://www.facebook.com/chithong.lam.9/photos?lst=100004617722085%3A100011240169718%3A1527623000&source_ref=pb_friends_tl">
                        <img class="card-img-top" src="template/assets/images/2.jpg" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title">Lam^ Thông</h5>
                            <p class="card-text">
                                Thằng thông khùng
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container -->
</div>
@endsection
@section('title','Thông tin sinh viên')