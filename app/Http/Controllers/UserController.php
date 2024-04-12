<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('login.index');
    }
   
    public function postRegister(Request $req ){
        // 
        // $req->password = "DMC";
        $req->merge(['password'=>Hash::make($req->password)]);
        $req->validate([
            'name' => 'required|string|max:256|min:8',
            'email' => 'required|string|email|unique:users,email',
            
        ]);
        try{

            User:: create($req->all());    
          toastr()->success('Đã Tạo Tài khoản thành công');
        }catch (\Throwable $th){
            dd($th);
        }
     
      return redirect()->route('login'); 

      
    }
}
