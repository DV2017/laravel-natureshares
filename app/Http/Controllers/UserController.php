<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  /**
   * Once registered the user can access authorized data
   */
  public function login()
  {
    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
      $user = Auth::user();
      $success['token'] = $user->createToken('Waardevol', ['values_nature'])->accessToken;
      return response()->json(['success' => $success, 'user' => $user->name, 'scope' => 'values_nature'], 200);
    } else {
      return response()->json(['error' => 'Unauthorised'], 401);
    }
  }

  /**
   * register a new user by issuing a new token
   */
  public function register(Request $request)
  {
    //validate entry
    $validator = Validator::make($request->all(), [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:6', 'confirmed'],
      'confirm_password' => 'required|same:password',
    ]);

    if ($validator->fails()) {
      return response()->json(['error' => $validator->errors()], 401);
    }

    //register users
    $data = $request->all();
    $data['password'] = bcrypt($data['password']);
    $user = User::create($data);

    return response()->json(['success' => 'Registration is successful', 'user' => $success], 200);

  }

  /**
   * logout user and delete token
   */
  public function logout(Request $request)
  {
    // if (Auth::check()) {
    //     Auth::user()->token()->delete();
    //   }
    $request->user()->token()->delete();
    return response()->json(['message' => 'User logged out.'], 200);
  }

  /**
   * show user details on request
   */
  public function show()
  {
    return Auth::user();
    return response()->json(['user' => $user], 200);
  }
}
