<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use Exception;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            response()->json([
                'created' => false,
                'errors'  => $validator->errors()->all()
            ], 400);
        }

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials))
            return response()->json(['message' => 'Unauthorized'], 401);

        $user = $request->user();

        $tokenResult = $user->createToken($user->email.' - '.now());

        return response()->json([
            'access_token' => $tokenResult->accessToken,
        ]);
    }

    public function index(){
        return User::all();
    }

    public function getUserByEmail($email){
        return DB::select('select * from users where email = ?', [$email]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $this->getUserByEmail($request->input('email'));
        if($user == NULL) throw new Exception('Not log in');

        $password = $request->input('password');
        if($user[0]->password != $password) throw new Exception('Not log in');

        print_r("logged");

        // generar token?
        print_r($request->input('_token')); //token generado
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        return User::find($id);
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
