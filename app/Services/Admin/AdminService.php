<?php
namespace App\Services\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminService 
{
     public function login($data)
    {
        if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
            // Remember Admin Email and password
            if (!empty($data["remember"])) {
                setcookie("email",$data["email"],time()+ 3600);
                setcookie("password",$data["password"],time()+ 3600);
            }else {
                setcookie("email", "");
                setcookie("password", "");
            }

            $loginStatus = 1;
        } else {
            $loginStatus = 0;
        }
        return $loginStatus;
    }

    public function verifyPassword($data)
    {
        if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
            return "true";
        } else {
            return "false";
        }
        
    }

    public function updatePassword($data)
    {
        // Check if the Current Password is Correct
        if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
            // Check if New passaword and Confirm match
            if ($data['new_pwd'] == $data['confirm_pwd']) {
                Admin::where('email', Auth::guard('admin')->user()->email)->update(['password' => bcrypt($data['new_pwd'])]);
                $statuss = "success";
                $messages = "Palavra-passe foi atualizada com sucesso!";
            } else {
                $statuss = "error";
                $messages = "A nova palavra-passe não combina com a confirmada!";
            }
            
        } else {
            $statuss = "error";
            $messages = "A palavra-passe atual está incorrecta!";
        }
        return ["status" => $statuss, "message" => $messages];
    }
}