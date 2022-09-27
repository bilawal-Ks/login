<?php

namespace App\Http\Controllers;
use App\Models\signup;
use Illuminate\Http\Request;

class signupController extends Controller
{
    public function SaveInfo(Request $request)
    {
            $res=signup::create([
            'Fname'=>$request->First,
            'Lname'=>$request->Last,
            'email'=>$request->id,
            'password'=>$request->pass,
            'Cpassword'=>$request->Cpass
        ]);
        return'User has been added';
    }
    public function Auth($usermail,$userpass)
    {
        $user=signup::where('email',$usermail)->first();
        if(isset($user))//isset()is used to convert jason format in string
        {
            if($user->password==$userpass)//checking if the pass enter is of same user or not
            {
                return $user;
            }
            else{//password entered is incorrect
                return 'INCORRECT PASSWORD';
            }
        }
        else{//if the mail entered is incorrect
            return 'INCORRECT EMAIL';
        }
    }


}
