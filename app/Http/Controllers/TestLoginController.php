<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;
use Illuminate\Support\Facades\DB;
use App\Staff;
use App\Mobile;
class TestLoginController extends Controller
{
  public function showLoginForm()
    {
        return view('adminlte::test.login');
    }
    public function login(Request $request)
    {
        $useremail=request('email');
        $userpwd=request('userpwd');
        $encrypt=md5($userpwd);
        $code=request('passcode');
         $google2fa = new Google2FA();
        $today=date("d-m-Y");
        //$email="mfz_peyo@yahoo.com";

        $user=Staff::where([['useremail',$useremail],['userpwd',$encrypt]])->first();   //validate x ade dlm table

       // $email=$user->useremail;
       // $email="mhafiz@lgm.gov.my";
        
        //$parts=explode("@",$email);
       // print_r($parts);
      //  $secret=$parts[1].$today.$parts[0];

        //print "<br>$today";
        //print "<br>$secret";
        //$secret = $ga->createSecret();
        $device_id="12345";
      //  $secret=md5($secret);
       // $secret=substr($secret,0,16);
        $device=$device_id.$today;
        $secret=md5($device);
        $secret=substr($secret,0,16);
        //print "<br>MD5:".$secret;
        $secret = $google2fa->toBase32($secret);
       // echo "Secret is: ".$secret."\n\n";

       
        $otp=$google2fa->getCurrentOtp($secret);
       // $code=$otp;
       
        $valid = $google2fa->verifyKey($secret,$code,10);
        if($valid){
            $mobile= new Mobile;
            Mobile::create([
                'id'=>$device,
                'userId'=>$user->userId,
                'created_at'=>date('Y-d-m H:i:s'),
                'last_login'=>date('Y-d-m H:i:s'),



                ]);
            return redirect('/home')->with('alert-success', 'Selamat Datang ke Sistem !');
           // echo 'berjaya';
        }
        else{
            // flash('Sorry! Please try again.', 'danger');
             return redirect('/signin')->with('alert-danger', 'Please try again !');
           

            //echo 'x berjaya';
        }
            
        
        //print $otp;
    }
   /* public function mobile($device_id,$code)
    {
         $google2fa = new Google2FA();
        $today=date("d-m-Y");
        //$email="mfz_peyo@yahoo.com";
        //$user=User::find(36);
        //$email=$user->useremail;
       // $email="mhafiz@lgm.gov.my";
        
       // $parts=explode("@",$email);
       // print_r($parts);
        //$secret=$parts[1].$today.$parts[0];

        //print "<br>$today";
        //print "<br>$secret";
        //$secret = $ga->createSecret();
        $device=$device_id.$today;
        $secret=md5($device);
        $secret=substr($secret,0,16);
        print "<br>MD5:".$secret;
        $secret = $google2fa->toBase32($secret);
        echo "Secret is: ".$secret."\n\n";

       
        $otp=$google2fa->getCurrentOtp($secret);
       // $code=$otp;
       
        $valid = $google2fa->verifyKey($secret,$code,10);
        if($valid)
            echo 'berjaya';
        else
            echo 'x berjaya';
            
        
        //print $otp;
    }*/


}
