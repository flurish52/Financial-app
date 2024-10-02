<?php

namespace App\Http\Controllers;

use App\Models\AccountBalance;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use inertia\inertia;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia::render('Auth/AdminLogin', [

        ]);
    }

    public function authenticated()
    {
        return inertia::render('Dashboard/AdminDashboard/Dashboard', [
        'users' => User::all(),
        'transactions' => AccountBalance::all(),
        ]);
    }

    public function updateUserAccount(Request $request, $user_id)
    {
        $accountBalance = AccountBalance::where('user_id', $user_id)->first();
        if (!$accountBalance) {
            return response()->json(['error' => 'Account not found'], 404);
        }
        $request->validate([
            'balance' => 'required|numeric',
        ]);

        $accountBalance->balance = $request->input('balance');
        $accountBalance->save();

        return response()->json(['success' => 'Balance updated successfully']);
    }


    public function viewUser($user_id)
    {
        $user = User::find($user_id);
        return inertia::render('Dashboard/AdminDashboard/ViewUser', [
            'user' => $user,
            "account_balance" => AccountBalance::where('user_id', $user_id)->get()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function loginAdmin(Request $request)
    {
        $validated = $request->validate([
            'phone_number' => 'String',
            'password' => 'String'
    ]);

        $user = User::where('phone_number', '08147118680')->first();
        if (Hash::check($validated['password'], $user->password)){
            $AdminUserRole = UserRole::where('role_id', 2 )->where('user_id', $user->id)->first()->get();
            if ($AdminUserRole){
                Auth::login($user);
                return redirect('/admin-dashboard');
            }else{
                dd('You are not an admin');
            }
        }else{
            dd('Incorrect Password');
        }
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
