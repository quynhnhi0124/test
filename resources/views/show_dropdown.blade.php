@extends('layout.master')
        <title>Search Result</title>
    </head>
    @section('content')
    <body>
        <br><br>      
        <div class="container">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="space60">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="beta-products-list">
                            <h4>Danh sách sản phẩm :</h4>
                                <div class="beta-products-details" style="margin:5px 0px 15px 10px; ">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                <div class="single-item-header">
                                                    <a href=""><img src="{{$product->product_img}}" alt="" height="250px"></a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title">{{$product->product_name}}</p>
                                                    @if($product->sale==0)
                                                        <p class="single-item-price">{{ number_format($product->product_price,0,',','.') }} VNĐ</p>
                                                    @else
                                                        <p class="price"><del>{{number_format($product->price,0,',','.')}} VNĐ</del> -> {{number_format($product->product_price,0,',','.')}} VNĐ</p>
                                                    @endif
                                                </div>
                                                <div class="single-item-caption">
                                                    <p>
                                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details</a> |
                                                        <a href="{{route('get.add.product',$product->id)}}"><i class="glyphicon glyphicon-shopping-cart" align="right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div align="right">{{$products->links()}}</div>
                            </div>  
                            <br><br>
                        </div>
                    </div>
                </div>  
            </div>
         </div>   
@endsection
