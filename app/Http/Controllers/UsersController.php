<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();

        return view('users.index', [
            'users' => $users
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateCurrent(Request $request)
    {
        if(auth()->check()) {
            $currentUserId = auth()->user()->getAuthIdentifier();
            \request()->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'max:255', 'email', 'unique:users,email,' . $currentUserId],
                'street_address' => ['required', 'string', 'max:255'],
                'city' => ['required', 'string', 'max:255'],
                'region' => ['required', 'string', 'max:255'],
                'country' => ['required', 'string', 'max:255'],
                'postcode' => ['required', 'string', 'max:10']
            ]);

            $currentUser = User::find($currentUserId);
            $currentUser->name = $request->get('name');
            $currentUser->email = $request->get('email');
            $currentUser->save();
            $addressData = [
                'street_address' => $request->get('street_address'),
                'city' => $request->get('city'),
                'region' => $request->get('region'),
                'country' => $request->get('country'),
                'postcode' => $request->get('postcode')
            ];
            if($currentUser->address) {
                $currentUser->address()->update($addressData);
            } else {
                $currentUser->address()->create($addressData);
            }
        }
        return Redirect::to('/');
    }
}
