<?php

namespace App\Http\Controllers;

use App\Models\AccountBalance;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Illuminate\Validation\Rules;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return Inertia::render('Dashboard/User',[
         $user = Auth::user()->id,
         'account_details' => AccountBalance::where('user_id', $user)->first(),
     ] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'string|max:255',
            'username' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|same:confirmed',
            'password_confirmation' => 'required',
            'firstName' => 'string|max:255',
            'middleName' => 'string|max:255',
            'lastName' => 'string|max:255',
            'address' => 'string|max:255',
            'city' => 'string|max:255',
            'state' => 'string|max:255',
            'zipCode' => 'string|max:10',
            'nationality' => 'string|max:255',
            'phoneNumber' => 'max:20|required',
            'dob' => 'date',
            'gender' => 'string',
            'employmentStatus' => 'string',
            'accountType' => 'string',
            'currency' => 'string',
            'transactionPin' => 'string|max:4',
            'nextOfKin' => 'nullable|string|max:255',
            'nextOfKinAddress' => 'nullable|string|max:255',
            'relationship' => 'nullable|string|max:255',
            'nextOfKinPhoneNumber' => 'nullable|string|max:20',
            'nextOfKinEmail' => 'nullable|string|email|max:255',
        ]);

        // Create the user with the validated data
        $user = User::create([
            'name' => $validated['firstName'].' '.$validated['middleName'].' '.$validated['lastName'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => $validated['password'],
            // Other fields can be included based on your application's needs
            'first_name' => $validated['firstName'],
            'middle_name' => $validated['middleName'],
            'last_name' => $validated['lastName'],
            'address' => $validated['address'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zip_code' => $validated['zipCode'],
            'nationality' => $validated['nationality'],
            'phone_number' => $validated['phoneNumber'],
            'dob' => $validated['dob'],
            'gender' => $validated['gender'] ?? null,
            'employment_status' => $validated['employmentStatus'] ?? null,
            'account_type' => $validated['accountType'] ?? null,
            'currency' => $validated['currency'] ?? null,
            'transaction_pin' => $validated['transactionPin'] ?? null,
            'next_of_kin' => $validated['nextOfKin'] ?? null,
            'next_of_kin_address' => $validated['nextOfKinAddress'] ?? null,
            'relationship' => $validated['relationship'] ?? null,
            'next_of_kin_phone_number' => $validated['nextOfKinPhoneNumber'] ?? null,
            'next_of_kin_email' => $validated['nextOfKinEmail'] ?? null,
        ]);

        $user->save();
        event(new Registered($user));
        Auth::login($user);
        // Optionally redirect or return a response
        return redirect()->route('Dashboard')->with('success', 'Registration successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

