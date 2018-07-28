@extends('index')
@section('content')
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row outer-bottom-sm'>
            <div class='col-md-3 sidebar'>
                <!-- ================================== Menu trái ================================== -->
                <div class="sidebar-module-container">

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
                                            <img src="../upload/{{$new->image}}" alt="" width="250px" height="200px"> 
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
                   @endforeach
                   
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

    
    <!-- /.sidebar-filter -->
</div>
<!-- /.sidebar-module-container -->
</div>
            <!-- /.sidebar -->
            <div class='col-md-9'>
                <!-- ========================================== SECTION – HERO ========================================= -->
                <!-- ========================================= SECTION – HERO : END ========================================= -->
                <div class="clearfix filters-container m-t-10">
                    <div class="row">
                        <div class="col col-sm-6 col-md-2">
                            <div class="filter-tabs">
                                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                    <li class="active">
                                        <a data-toggle="tab" href="#grid-container">
                                            <i class="icon fa fa-th-list"></i>Grid</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#list-container">
                                                <i class="icon fa fa-th"></i>List</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.filter-tabs -->
                                </div>
                                
                            </div>
                            <!-- /.row -->
                        </div>
                        
                        <div class="search-result-container">
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane active " id="grid-container">
                                    <div class="category-product  inner-top-vs">
                                        <div class="row">
                                            @foreach($sp_theoloai as $sp)
                                            <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                <div class="products">

                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="{{route('detail',$sp->id)}}">
                                                                    <img src="../upload/{{$sp->image}}" alt="" width="250px" height="200px"> 
                                                                </a>
                                                            </div>
                                                            
                                                        </div>
                                                        <!-- /.product-image -->


                                                        <div class="product-info text-left">
                                                            <h3 class="name">
                                                                <a href="{{route('detail',$sp->id)}}">{{$sp->name}}</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="description"></div>

                                                            <div class="product-price">
                                                                @if($sp->promotion_price==0)
                                                                <span class="price">
                                                                    {{number_format($sp->price)}} 
                                                                </span>
                                                                @else
                                                                <span class="price">
                                                                    {{number_format($sp->price)}} 
                                                                </span>
                                                                <span class="price-before-discount">{{$sp->promotion_price}}</span>
                                                                @endif
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                        <!-- /.product-info -->
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                
                                                                
                                                               
                                                                
                                                                <li class="add-cart-button btn-group">
                                                                  

                                                                  <a  class="add-to-cart pull-left btn btn-success "   href="{{route('themgiohangone',$all->id)}}"><i class="fa fa-shopping-cart" > Thêm vào giỏ hàng</i></a> 

                                                                  

                                                              </li>
                                                              
                                                              
                                                              

                                                              

                                                              <div class="clearfix"></div>

                                                              
                                                          </div>
                                                          <!-- /.action -->
                                                      </div>
                                                      <!-- /.cart -->
                                                  </div>
                                                  <!-- /.product -->

                                              </div>
                                              <!-- /.products -->
                                          </div>
                                          <!-- /.item -->
                                          @endforeach
                                      </div>
                                      
                                      <!-- /.row -->
                                  </div>
                                  <!-- /.category-product -->
                              </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane " id="list-container">
                            <div class="category-product  inner-top-vs">
                                @foreach($sp_theoloai as $sp)
                                <div class="category-product-inner wow fadeInUp">
                                    <div class="products">
                                        <div class="product-list product">
                                            <div class="row product-list-row">
                                                <div class="col col-sm-4 col-lg-4">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <img src="../upload/{{$sp->image}}" alt="">
                                                        </div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-sm-8 col-lg-8">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                           <a href="{{route('detail',$sp->id)}}">{{$sp->name}}</a>
                                                       </h3>
                                                       <div class="rating rateit-small"></div>
                                                       <div class="product-price">
                                                        @if($sp->promotion_price==0)
                                                        <span class="price">
                                                            {{number_format($sp->price)}} 
                                                        </span>
                                                        @else
                                                        <span class="price">
                                                            {{number_format($sp->price)}} 
                                                        </span>

                                                        @endif
                                                    </div>
                                                    <!-- /.product-price -->
                                                    <div class="description m-t-10">{{$sp->detail}}</div>
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <li class="add-cart-button btn-group">


                                                              <a  class="add-to-cart pull-left btn btn-success "   href="{{route('themgiohangone',$all->id)}}"><i class="fa fa-shopping-cart" > Thêm vào giỏ hàng</i></a>



                                                          </li>



                                                      </div>
                                                      <!-- /.action -->
                                                  </div>
                                                  <!-- /.cart -->

                                              </div>
                                              <!-- /.product-info -->
                                          </div>
                                          <!-- /.col -->
                                      </div>

                                  </div>
                                  <!-- /.product-list -->
                              </div>
                              <!-- /.products -->
                          </div>
                          @endforeach

                          <!-- /.category-product-inner -->
                      </div>
                            <!-- /.category-product -->
                        </div>
                        <!-- /.tab-pane #list-container -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.search-result-container -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</div>
@endsection
@section('title','Loại Sản Phẩm')

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