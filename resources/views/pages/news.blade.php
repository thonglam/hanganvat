@extends('index')
@section('content')

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row outer-bottom-sm'>
            <div class='col-md-3 sidebar'>
                <!-- ================================== Menu trái ================================== -->
                <div class="sidebar-module-container">


                    <div class="sidebar-filter">
                        <!-- ============================================== Danh sách món ăn ============================================== -->
                        <h2 class="section-title"  style="color: green" >DANH SÁCH MÓN ĂN </h2>

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

                    <div class="widget-body">
                        <h2 class="section-title"  style="color: green" > Món ăn mới</h2>
                        @foreach($new_food as $new)


                        <div class="media beta-sales-item">
                           <div class="product">
                            <div class="product-image">
                                <div class="image">
                                    <a href="{{route('detail',$new->id)}}">
                                        <img src="upload/{{$new->image}}" alt="" width="250px" height="200px"> 
                                    </a>
                                </div>

                                <!-- /.image -->

                                <div class="tag new">
                                    <span>new</span>
                                </div>
                            </div>

                        </div>
                        <div class="media-body">
                           <b>  <mark style="color: red" > {{$new->name}} </mark> </b><br>
                           <div class="product-price">
                            <span class="price">
                               {{number_format($new->price)}} 
                           </span>
                       </div>

                   </div>
               </div>
           {{-- </div> --}}
           @endforeach
           {{-- {{ $new_food->links() }} --}}
       </div>

       <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
        <div id="advertisement" class="advertisement">
            <div class="item bg-color">



               <div class="item">

                <img src="upload/fast.jpg" width="430" height="460" >


            </div>

        </div>
        <!-- /.item -->

        <div class="item">

            <img src="upload/hehe.jpg" width="400" height="430" >


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
<!-- /.sidebar-filter -->
</div>
<!-- /.sidebar-module-container -->
</div>
<!-- /.sidebar -->
<div class='col-md-9'>
    <
    <div class="panel-heading" style="background-color:pink; color:white;">
        <h4><b>Tin tức mỗi ngày</b></h4>
    </div> 



    @foreach($news as $new)

    <div class="tie-indent">
        <div class="wrapper">
            <div class="fleft" style="width:70%">
                <h2><a href="{{route('newdetail',$new->id)}}"><strong>{{$new->title}}</strong></a></h2>

                <div class="fleft" style="width:29%">
                    <span class="image">
                        <a href="{{route('newdetail',$new->id)}}"><img src="upload/{{$new->image}}"  width="173" height="129"></a>
                    </span>
                    <br clear="all">
                </div>
                <div>
                    {{$new->description}}
                    <a href="{{route('newdetail',$new->id)}}">..Xem thêm</a>
                </div>
                <br clear="all">
            </div>
        </div>
    </div>
    @endforeach  

    {{ $news->links() }}


</div>
<!-- /.col -->
</div>
<!-- /.row -->

<!-- /.container -->

</div>
  <!-- /.body-content -->
  @endsection
  @section('title','Tin tức')