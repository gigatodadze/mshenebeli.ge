<?php



namespace App\Http\Controllers;



use App\Models\Subscriber;
use Illuminate\Http\Request;

use Log;



class AjaxController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequest()

    {

        return view('ajaxRequest');

    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequestPost(Request $request)

    {
        $subscriber = new Subscriber();
        $request->validate([
            'email'          => 'required|email'
        ]);
//        Subscriber::create([
//            'email'          => $request->email
//        ]);
        $subscriber->setEmail($request['email']);
        $subscriber->addSubscriber();


        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

}
