<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Modules\Application\Models\Role;
use Modules\Application\Models\User;

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

    protected string $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data): Validator
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:10',
            // 'role' => 'required|string',
            'location' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:users|regex:/(.*)technipfmc\.com$/i',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data): User
    {
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'configs_locations_id' => $data['location'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        $user
            ->roles()
            ->attach(Role::where('id', 10)->first());

        return $user;
    }
}
