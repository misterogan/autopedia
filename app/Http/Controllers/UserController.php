<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('admin.user.change_password');
    }

    public function change_password(Request $request){

        $validation = Validator::make($request->all(), [
            'old_password'          => 'required',
            'new_password'          => ['required', 'confirmed', Password::min(8)->letters()->numbers()->mixedCase()],
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages(),'code'=>'201']);;
        }
        $current_password = Auth::User()->password;

        if(Hash::check($request->old_password, $current_password))
        {
            $user_id = Auth::User()->id;
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request->new_password);
            $obj_user->save();
            return $this->successResponse();
        }
        else
        {
            return json_encode(['status'=> false, 'message'=> 'Please enter correct current password','code'=>'202']);
        }
    }
}
