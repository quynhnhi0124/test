<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    
    class makeupController extends Controller{
        //hiển thị tất cả các mặt hàng khi ấn vào thanh bar
        public function getProduct(){
            $products=DB::table('makeup')->get();
            return view('products.makeup',compact('products'));
        }
        public function detail_product(Request $request){
            $products = DB::table('makeup')->where('id',$request->id)->first();
            return view('detail_makeup',compact('products'));
        }
        public function order_product($id){
            $products = DB::table('makeup')->where('id', $id)->first();
            return view('order',compact('products'));
        }
        public function create_order_product(Request $request){
            $this->validate($request,[
                'customer_name'       => 'required',
                'email'    => 'email',
                'phone_number'      => 'required',
                'MSP'       => 'required',
                'product_name'    => 'required',
                'so_luong'       => 'required',
                'address'      => 'required',
            ]);
            $customer_name     =$request->input('customer_name');
            $email      = $request->input('email');
            $phone_number      = $request->input('phone_number');
            $MSP     =$request->input('MSP');
            $product_name      = $request->input('product_name');
            $so_luong      = $request->input('so_luong');
            $address      = $request->input('address');
            $note      = $request->input('note');
            $data = array(
                "customer_name" =>  $customer_name,
                "email"=>  $email,
                "phone_number"=>  $phone_number,
                "MSP" =>  $MSP,
                "product_name"=>  $product_name,
                "so_luong"=>  $so_luong,
                "address"=>  $address,
                "note"=>  $note
                );
            $users =DB::table('customers')->insert($data);
            return redirect()->back()->with('alert','Successfully!');
        }
    }
    
?>
        