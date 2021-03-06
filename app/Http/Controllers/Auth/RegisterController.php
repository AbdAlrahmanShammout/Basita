<?php

namespace App\Http\Controllers\Auth;

use App\City;
use App\Region;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{


    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $listCities = City::all();
        $listRegions = Region::all();
        return view('register', compact('listCities', 'listRegions'));
    }


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {


        $request->validate([
            'first_name' => 'required|string|max:190',
            'last_name' => 'required|string|max:190',
            'gender' => 'required',Rule::in(['male', 'female']),
            'email' => 'required|string|max:190|unique:users',
            'birthday' => 'required|date',
            'mobile_number' => ['required', 'numeric', 'digits:10', 'unique:users'],
            'city_id' => 'exists:cities,id',
            'region_id' => 'exists:regions,id',
//            'first_name' => 'required|string|max:190',
            'password' => 'required|string|min:8',
            'rpassword' => 'required_with:password|same:password|min:8',
        ]);

        $newUser = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'gender' => $request['gender'],
            'email' => $request['email'],
//            'birthday' => date('d-m-Y', strtotime($request['birthday'])),
//            'birthday' => Carbon::now(),
            'birthday' => $request['birthday'],
            'mobile_number' => $request['mobile_number'],
            'city_id' => $request['city_id'],
            'region_id' => $request['region_id'],
            'img_profile' =>'img path',
            'password' => Hash::make($request['password']),
            'activity_code' => 53795,
        ]);


        event(new Registered($user = $newUser));

        $this->guard()->login($user);

        return redirect()->route('welcome');
    }


}
