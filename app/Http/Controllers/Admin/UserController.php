<?php

// app/Http/Controllers/UserController.php

use App\Models\User;
use Illuminate\Http\Request;

public function index()
{
    $users = User::all();
    return view('admin.users.index', compact('users'));
}

public function create()
{
    return view('admin.users.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        'role' => 'required|in:user,admin',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => $request->role,
    ]);

    return redirect()->route('admin.users.index')->with('success', 'Gebruiker aangemaakt.');
}

public function updateRole(Request $request, User $user)
{
    $request->validate([
        'role' => 'required|in:user,admin',
    ]);

    $user->role = $request->role;
    $user->save();

    return redirect()->back()->with('success', 'Rol aangepast.');
}
