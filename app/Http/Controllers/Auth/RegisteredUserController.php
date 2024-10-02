<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AccountBalance;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'name' => 'string|max:255',
            'username' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required',
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

        $user = User::create([
            'name' => $request->firstName.' '.$request->middleName.' '.$request->lastName,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password, (array)PASSWORD_BCRYPT),
            // Other fields can be included based on your application's needs
            'first_name' => $request->firstName,
            'middle_name' => $request->middleName,
            'last_name' => $request->lastName,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zipCode,
            'nationality' => $request->nationality,
            'phone_number' => $request->phoneNumber,
            'dob' => $request->dob,
            'gender' => $request->gender ?? null,
            'employment_status' => $request->employmentStatus ?? null,
            'account_type' => $request->accountType ?? null,
            'currency' => $request->currency ?? null,
            'transaction_pin' => $request->transactionPin ?? null,
            'next_of_kin' => $request->nextOfKin ?? null,
            'next_of_kin_address' => $request->nextOfKinAddress ?? null,
            'relationship' => $request->relationship ?? null,
            'next_of_kin_phone_number' => $request->nextOfKinPhoneNumber ?? null,
            'next_of_kin_email' => $request->nextOfKinEmail ?? null,
        ]);

        event(new Registered($user));
        $balance = AccountBalance::create([
            $newUser = User::find($user->id),
            'user_id' => $newUser->id,
            'balance' => 0.00,
        ]);



        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
