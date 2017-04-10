<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;
use App\User;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $google2fa = new Google2FA();
        $today=date("d-m-Y");
        //$email="mfz_peyo@yahoo.com";
        $user=User::find(36);
        $email=$user->useremail;
        //$email="mhafiz@lgm.gov.my";

        $parts=explode("@",$email);
        print_r($parts);
        $secret=$parts[1].$today.$parts[0];
        print "<br>$today";
        print "<br>$secret";
        //$secret = $ga->createSecret();

        $secret=md5($secret);
        $secret=substr($secret,0,16);
        print "<br>MD5:".$secret;
        $secret = $google2fa->toBase32($secret);
        echo "Secret is: ".$secret."\n\n";

       
        $otp=$google2fa->getCurrentOtp($secret);
        print $otp;
    }
public function login($code)
    {
         $google2fa = new Google2FA();
        $today=date("d-m-Y");
        //$email="mfz_peyo@yahoo.com";
        //$user=User::find(36);
        //$email=$user->useremail;
        $email="mhafiz@lgm.gov.my";
        
        $parts=explode("@",$email);
        print_r($parts);
        $secret=$parts[1].$today.$parts[0];

        //print "<br>$today";
        //print "<br>$secret";
        //$secret = $ga->createSecret();
       // $device_id="12345".$today;
        $secret=md5($secret);
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
    }

    public function mobile($device_id,$code)
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
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
