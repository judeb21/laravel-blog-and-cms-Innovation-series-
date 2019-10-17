<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $posts = post::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('posts'));
    }
    public function post(post $post) {
        $next = DB::table('posts')->where([
            ['status', '=', '1'],
            ['slug', '>', $post->slug],
        ])->orderBy('slug')->first();
        $prev = DB::table('posts')->where([
            ['status', '=', '1'],
            ['slug', '<', $post->slug],
        ])->orderBy('slug', 'desc')->first();
        //$next = post::where('slug','>',$post->slug)->orderBy('slug')->first();
        //$prev = post::where('slug','<',$post->slug)->orderBy('slug','desc')->first();
        return view('post', compact('post','prev','next'));
    }
    public function contact() {
        return view('contact');
    }
    public function store(Request $request) {
    	/*Process a new form submission in HubSpot in order to create a new Contact.

        $hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
        $ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.*/
        $hs_context      = array(
            //'hutk' => $hubspotutk,
            //'ipAddress' => $ip_addr,
            'pageUrl' => 'dodo.ng',
            'pageName' => 'Innovation series page',
        );
        $hs_context_json = json_encode($hs_context);

        $name = $request->NAME;
        $email = $request->EMAIL;
        $phone = $request->PHONE;
        $company = $request->COMPANY;
        $role = $request->ROLE;
        $message = $request->MESSAGE;
        
        //Need to populate these variable with values from the form.
        $str_post = "firstname=" . urlencode($name) 
            . "&email=" . urlencode($email)  
            . "&phone=" . urlencode($phone)
            . "&company=" . urlencode($company)
            . "&role=" . urlencode($role)
            . "&message=" . urlencode($message)
            . "&hs_context=" . urlencode($hs_context_json); //Leave this one be
        //replace the values in this URL with your portal ID and your form GUID
        $endpoint = 'https://forms.hubspot.com/uploads/form/v2/6347933/29a415ac-d185-4173-b9b1-60f7275f2991';

        $ch = @curl_init();
        @curl_setopt($ch, CURLOPT_POST, true);
        @curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
        @curl_setopt($ch, CURLOPT_URL, $endpoint);
        @curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/x-www-form-urlencoded'
        ));
        @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response    = @curl_exec($ch); //Log the response from HubSpot as needed.
        $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
        @curl_close($ch);
        //echo $status_code . " " . $response;
        
        return redirect()->back();
    }
}
