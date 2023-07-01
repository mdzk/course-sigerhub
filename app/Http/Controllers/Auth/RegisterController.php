<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nama_usaha' => ['required', 'string'],
            'bidang_usaha' => ['required', 'string'],
            'nohp' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $random = Str::random(40);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nama_usaha' => $data['nama_usaha'],
            'bidang_usaha' => $data['bidang_usaha'],
            'nohp' => $data['nohp'],
            'roles' => 'user',
            'status' => 'pending',
            'password' => Hash::make($random),
            'first_attemp' => true,
            'image' => 'default.png'
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect('login')->with('berhasil', 'success');
    }
}
