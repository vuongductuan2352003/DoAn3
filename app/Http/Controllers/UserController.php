<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(){
        return view('login.index');
    }
   public function Register(){
    return view('login.register');
   }
    // public function postRegister(Request $req ){
    //     // 
    //     // $req->password = "DMC";
    //     $req->merge(['password'=>Hash::make($req->password)]);
    //     $req->validate([
    //         'name' => 'required|string|max:256|min:8',
    //         'email' => 'required|string|email|unique:users,email',
            
    //     ]);
    //     try{

    //         User:: create($req->all());    
    //       toastr()->success('Đã Tạo Tài khoản thành công');
    //     }catch (\Throwable $th){
    //         dd($th);
    //     }
     
    //   return redirect()->route('login'); 

      
    // }
    public function postRegister(Request $request)
{
    // Kiểm tra dữ liệu đầu vào
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|ends_with:gmail.com|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ]);

    // Nếu validation fails, redirect lại với thông báo lỗi
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput()
            ->with('error', 'Tạo tài khoản không thành công.');
    }

    // Tiếp tục xử lý nếu dữ liệu hợp lệ
    try {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone, // Chắc chắn rằng bạn đã có trường phone từ dữ liệu POST
        ]);
        toastr()->success('Đã tạo tài khoản thành công');
    } catch (\Throwable $th) {
        dd($th);
      
    }

    return redirect()->route('login');
}

    
}
