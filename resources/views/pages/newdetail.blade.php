@extends('index')
@section('content')
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row outer-bottom-sm'>
            <div class='col-md-3 sidebar'>
                
                <div class="sidebar-module-container">
                 >
                 <div class="sidebar-filter">
                    <!-- ============================================== Danh sách món ăn ============================================== -->
                    <h2 class="section-title" style="color: red">DANH SÁCH MÓN ĂN</h2>
                    
                    <div class="sidebar-filter">
                       <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                        
                           @foreach($loai as $all)
                           <div class="sidebar-widget-body m-t-10">
                            <ul class="list">

                                <li >
                                    <a href="{{route('foodtype',$all->id)}}"> {{$all->name}} </a>
                                </li>

                            </ul>
                            
                        </div>
                        @endforeach
                    </div>
                    
                </div> 

                 <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                        <h2 class="section-title"  style="color: green" > Tìm theo giá</h2>
                        <div class="sidebar-widget-body m-t-10">
                            <form method="get" action="{{route('search')}}" id="testform">
                                <ul class="list">
                                    <li>
                                        {{-- <a href="">Nhỏ hơn 20k</a> --}}
                                        <input class="search-field" id="giamin"  placeholder="Giá tối thiểu"   value="giá thấp nhất" name="pricemin" type="number"  onblur="checkQuan()" onkeydown="javascript: return event.keyCode == 69 ? false : true"/> 

                                    </li>
                                    <li>
                                       <input class="search-field"   id="giamax" placeholder="Giá tối đa" value="giá tối đa" name="pricemax" type="number"  onblur="checkQuan()" onkeydown="javascript: return event.keyCode == 69 ? false : true"/> 
                                   </li>

                                   <a class="btn btn-success"  onclick="kiemtra()" id="searchsubmit"><i class="fa fa-search"></i></a>  





                               </ul>
                           </form>

                       </div>
                       <!-- /.sidebar-widget-body -->
                   </div>
                
                <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                    <div id="advertisement" class="advertisement">
                        <div class="item bg-color">
                            
                         

                           <div class="item">
                            
                            <img src="../upload/fast.jpg" width="430" height="460" >
                            

                        </div>
                        
                    </div>
                    <!-- /.item -->

                    <div class="item">
                        
                        <img src="../upload/hehe.jpg" width="400" height="430" >
                        

                    </div>
                    <!-- /.item -->

                    <div class="item bg-color">
                        <div class="container-fluid">
                            <div class="caption vertical-top text-left">
                                <div class="big-text">
                                    Save
                                    <span class="big">20%</span>
                                </div>


                                <div class="excerpt fadeInDown-2">
                                    on selected items
                                </div>
                            </div>

                            <!-- /.caption -->
                        </div>

                        <!-- /.container-fluid -->
                    </div>
                    <!-- /.item -->
                </div>

            </br>

            

        </div>

    </div>


</div>
<!-- /.sidebar-module-container -->
</div>

<!-- /.sidebar -->

{{--  --}}
<div class='col-md-9'>
    
    
    <h1 class="the-article-title cms-title">{{$newdetail->title}}</h1> </br>

    <h3 class="the-article-summary cms-desc">{{$newdetail->description}} </h3>
    
    
    <div>
        <img class="img-responsive" src="../upload/{{$newdetail->image}}" width="533" height="504">
    </div>


</br>
<p class="lead">{{$newdetail->content}}  </p> 

</br>
<h3 class="the-article-summary cms-desc">Tác giả: {{$newdetail->author}} </h3>

<h3 class="the-article-summary cms-desc"> Nguồn trang: <a href="{{$newdetail->sourepage}}"> https://news.zing.vn/bo-sung-nuoc-dung-cach-khi-troi-nang-nong-post860640.html</a> </h3>


</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container -->

</div>
<!-- /.body-content -->
@endsection
@section('title','Chi tiết tin')

<script type="text/javascript">
    function kiemtra(){

        var a = document.getElementById('giamin').value;
        var b = document.getElementById('giamax').value;

        if (a > b)
        {
            alert('Không nhập giá tối thiểu lớn hơn giá tối đa');
        }else{
            document.getElementById("testform").submit();
        }
    }

    function checkQuan()
    {   
        var a = document.getElementById('giamin').value;
        var b = document.getElementById('giamax').value;

        if( a < 0  || b  <0){
            alert('Không được nhập số âm');
            document.getElementById('giamin').value = 1;
            document.getElementById('giamax').value = 1;
        }
    }
</script>