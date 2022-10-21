<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    function getdata(Request $req){

        $username=$req->uname;
        $password=$req->psw;
        if($username=="rajendra" || $password=="123456")
        {
            $URL="http://127.0.0.1:8000/dashboard";
            echo ("<script>location.href='$URL'</script>");
        }
        else
        {
            echo '<script>alert("Please enter valid credentials try again!!")</script>';
            $URL="http://127.0.0.1:8000";
            echo ("<script>location.href='$URL'</script>");
        
        }

       
    }
}
