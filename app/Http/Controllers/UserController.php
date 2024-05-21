<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function login(){
       
        if(Auth::check()){
           $role = auth()->user()->role;
           if($role==0){  
                 return redirect()->route('TrangChu')->with('error', 'Bạn đã đăng nhập!');
            }
           else if($role==1){
            return redirect()->route('admin.index')->with('error', 'Bạn đã đăng nhập!');
           }
        }
       
        return view('login.index');
    }
   public function Register(){
   
    if(Auth::check()){
        $role = auth()->user()->role;
        if($role==0){  
              return redirect()->route('TrangChu')->with('error', 'Bạn đã đăng nhập!');
         }
        else if($role==1){
         return redirect()->route('admin.index')->with('error', 'Bạn đã đăng nhập!');
        }
     }
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
        'phone'=> 'min:10|max:10'
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

    public function postLogin(Request $req){
        // dd($req->all());
        // try{

       
        //     User::create($req->all());
        //  }catch(\Throwable $th){
        //     dd($th);
        // }
        // return redirect()->route('hi');
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password,'role'=>0])) {
            $previousUrl = Session::get('previousUrl');
                if($previousUrl){
                    return redirect($previousUrl);
                }else{
                     return redirect()->route('TrangChu')->with('success', 'Đăng nhập thành công! Chào mừng bạn đến với Đồ Gỗ Vương Tuấn');

                }
        } else if(Auth::attempt(['email' => $req->email, 'password' => $req->password,'role'=>1])){
            return redirect()->route('admin.index')->with('success', 'Đăng nhập thành công! Chào mừng bạn đến với Quản Trị Viên Đồ Gỗ Vương Tuấn');
        }
        else {
            return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng');
        }
       
    }

    public function logout(Request $req){
        Auth::logout();
        return redirect()->back();
    }
}
