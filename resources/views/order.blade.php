@extends('layout.master')
@section('content')
<style>
.image-holder {
    background-image: url("https://i.etsystatic.com/16486627/r/il/1aec05/1401734092/il_794xN.1401734092_imdo.jpg");
    height: 900px;
    width: 1050px;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.wrapper {
    min-height: 100vh;
    display: flex;
}
.form-inner {
    background: #9C9C9C;
    padding-top: 5vh;
    padding-left: 4vw;
    padding-right: 4vw;
    width: 450px;
}
form {
    width: 100%;
}
.form-header {
    text-align: center;
}
h3 {
    text-transform: uppercase;
    font-size: 50px;
    font-family: ".VnVogueH";
}
.form-body {
    margin-top: 40px;
}
.form-control {
    border: 1px solid rgba(255,255,255,0.5);
    border-radius: 5px;
    display: block;
    width: 100%;
    height: 45px;
    background: none;
    padding: 0 10px;
    color: #fff;
    font-size: 17px;
    &.error {
        border-color: #fd677a!important;
        background: url('../images/error.png') no-repeat center right 19px;
    }
    &.valid {
        background: url('../images/valid.png') no-repeat center right 19px;
    }
}
.form-error {
    margin-top: 10px;
    display: inline-block;
}
button {
    border: none;
    width: 100%;
    height: 46px;
    border-radius: 22.5px;
    margin: auto;
    margin-top: 40px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    background: #fff;
    color: #9C9C9C;
    text-transform: uppercase;
    font-size: 17px;
}
.form-inner a {
    float: right;
    color: #363636;
}
.form-inner h4{
    padding:0px 185px 30px 20px ;
}
</style>
    <body>
    <div class="wrapper">
        <div class="container">
            <div class="form-inner">
                <div>
                    <h4 ><a href="{{route('trangchu')}}"><span class="glyphicon glyphicon-home"></span>&nbsp Trang chủ</a></h4>
                </div>
                <div class="form-header"> 
                    
                    <h3>Order </h3>
                </div>
                    <div class="form-body">
                        <form class="has-validation-callback" method="get" action="{{route('create_order')}}"> 
                        {{ csrf_field()}} 
                            <!-- <div class="form-group"> -->
                            <div class="form-group">
                                <label>Họ tên khách hàng</label>
                                <input type="text" class="form-control" name="customer_name"  required>
                            </div> 
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email"  required>
                            </div> 
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="phone_number"  required>
                            </div> 
                            <div class="form-group">
                                <label>Mã sản phẩm </label>
                                <input type="text" class="form-control"  name="MSP" value="{{$products->MSP}}" required>
                            </div >
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="product_name" value="{{$products->product_name}}"  required>
                            </div> 
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input type="text" class="form-control" name="so_luong"  required>
                            </div> 
                            <div class="form-group">
                                <label>Địa chỉ nhận</label>
                                <input type="text" class="form-control" name="address"  required>
                            </div> 
                            <div class="form-group">
                                <label>Note</label>
                                <input type="text" class="form-control" name="note"  required>
                            </div> 
                            <div class="form-footer">
                                <button type="submit">Order</button>
                            </div><br><br> 
                            <script>
                                var msg = '{{Session::get('alert')}}';
                                var exist = '{{Session::has('alert')}}';
                                if(exist){
                                alert(msg);
                                }
                            </script>  
                        </form>
                        <form  method="get" action=""> 
                            <div>
                                <button type="submit" >Cancel</button>
                            </div> 
                        </form>
                    </div>
                </div>
                <div class="image-holder"></div>
            </div>    
        </div>
    </body>
@endsection
