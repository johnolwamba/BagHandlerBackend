<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Baggage;
use App\Flights;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use Response;
use AFT;
use App\Http\Requests;

class MobileApi extends Controller
{



    //add users
    public function postSignUp(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'username'=>'required|max:120|unique:users,username',
            'password'=>'required|min:6',
            'phone'=>'required|min:4|phone'
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all(), 'status' => 400], 200);
        }

        $name = $request['name'];
        $username = $request['username'];
        //$token = md5($request['username'].time());
        $password = bcrypt($request['password']);
        $phone = $request['phone'];

        $user = new User();
        $user->name=$name;
        $user->username=$username;
        $user->password=$password;
        $user->phone=$phone;
        //$user->api_token=$token;

        $user->save();

        return Response::json([
            'status' => 'success',
            'data' => 'User added'
        ]);

    }


//logout
    public function logout(){
        $user = User::find(Auth::user()->id);
        $user->api_token = '';
        $user->save();
        return response()->json(['message' => 'Logout success'], 200);
    }


    //login
    public function login() {
        // Getting all post data
        $data = Input::all();
        // Applying validation rules.
        $rules = array(
            'username' => 'required|min:6',
            'password' => 'required|min:6',
        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()){

            return response()->json(['errors' => $validator->errors()->all(), 'status' => 400], 200);
        }
        else {
            $userdata = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );
            // doing login.
         if (Auth::attempt($userdata)) {

                $user = User::find(Auth::user()->id);
                $user->api_token = md5($user->username.time());
                $user->save();

                return Response::json([
                    'status' => 'success',
                    'data' => 'successfully logged in',
                    'user' => $user
                ]);


            } else {
                // if any error send back with message.
                return Response::json([
                    'status' => 'error',
                    'data' => 'Please enter correct username and password.Failed to check in db'
                ]);


            }

        }


    }



//get all flights
    public function getFlights(){

        $flights = Flights::all();
         //return $flights;
        return Response::json([
            'status' => 'success',
            'flights' => $flights
        ]);


    }


//get all baggages
    public function getBaggages(){
        $luggage = Baggage::all();
        return Response::json([
            'status' => 'success',
            'baggages' => $luggage
        ]);


    }






//    //add luggage
//    public function postAddLuggage(Request $request){
//
//        //return Response::json(array('check' => 'check_check'));
//
//        //validation
//        $validator = Validator::make($request->all(), [
//            'owner_name'=>'required|max:100',
//            'phone'=>'required|max:100',
//            'destination'=>'required|max:100',
//            'description'=>'required|max:255',
//            'code'=>'required|max:255',
//            'added_by'=>'required|max:100',
//            'flight'=>'required|max:100'
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json(['errors' => $validator->errors()->all(), 'status' => 400], 200);
//        }
//
//        //dd($request->all());
//        $luggage = new Luggage();
//        $luggage->owner_name = $request->get('owner_name');
//        $luggage->owner_phone = $request->get('phone');
//        $luggage->destination = $request->get('destination');
//        $luggage->description = $request->get('description');
//        $luggage->added_by = $request->get('added_by');
//        $luggage->flight= $request->get('flight');
//        $luggage->qr_code = $request->get('code');
//
//
//        $luggage->save();
//        if($luggage){
//            $phoneNumber = $request->get('phone');
//            $message = "Your Luggage has been registered for transportation";
//            AFT::sendMessage($phoneNumber,$message);
//            return Response::json(array('status' => 'success'));
//
//        }else{
//
//            return Response::json(array('status' => 'failed'));
//        }
//
//
//    }I
//
//
//
//update luggage location

    public function updateLocation(Request $request){
        //validation
        $validator = Validator::make($request->all(), [
            'code'=>'required|exists:luggages,qr_code'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all(), 'status' => 400], 200);
        }

        //dd($request->all());
        $luggage = Luggage::where(['qr_code'=>$request->get('code')])->first();
        $tracker = new LuggageTracker;
        $tracker->stopover=Auth::user()->workstation;
        $tracker->scanned_by=Auth::user()->id;
        $tracker->luggage_id=$luggage->luggage_id;
        $tracker->save();


        $phoneNumber =$luggage->owner_phone;
        $message = "Your Luggage has been received at ".Auth::user()->airport." station ".Auth::user()->workstation;
        AFT::sendMessage($phoneNumber,$message);
        return Response::json(array('status' => 'success'));


    }





//add notification
//    public function postAddNotification(Request $request){
//        //validation
//        $validator = Validator::make($request->all(), [
//            'notification'=>'required|max:255',
//            'luggage_owner'=>'required|max:100'
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json(['errors' => $validator->errors()->all(), 'status' => 400], 200);
//        }
//
//        //dd($request->all());
//        $notifications = new Notifications();
//        $notifications->notification = $request->get('notification');
//        $notifications->luggage_owner  = $request->get('luggage_owner');
//
//
//        //$message = "There was an error";
//        $notifications->save();
//        if($notifications){
//            //$message = "Post successfully created";
//            return Response::json(array('status' => 'success'));
//
//        }else{
//
//            return Response::json(array('status' => 'failed'));
//        }
//
//
//    }







}
