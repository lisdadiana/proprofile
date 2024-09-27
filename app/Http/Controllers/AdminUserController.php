<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title'   => 'Manajemen User',
            'user'    =>  User::get(),  
            'content' => 'admin/user/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title'  => 'Tambah User',
            'content' => 'admin/user/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = $request->validate([
            'name'      =>'required',
            'email'      =>'required|unique:users',
            'password'      =>'required|min:3',
            're_password'      =>'required|same:password',
        ]);

        $data['password']    = Hash::make(($data['password']));

        
        User::create($data);
        return redirect('/admin/user');
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
        $data = [
            'title'     => 'Edit User',
            'user'      => User::find($id),
            'content'   => 'admin/user/add'
        ];
        return view('admin.layouts.wrapper',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Temukan user berdasarkan ID
    $user = User::find($id);

    // Validasi input dari request
    $data = $request->validate([
        'name'       => 'required',
        'email'      => 'required|unique:users,email,' . $user->id,
        'password'   => 'nullable|min:3', // Mengizinkan password kosong saat update
        're_password' => 'nullable|same:password', // re_password harus sama dengan password jika diisi
    ]);

    // Jika password ada di input, hash password baru
    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->password);
    } else {
        // Jika password tidak diisi, gunakan password lama
        $data['password'] = $user->password;
    }

    // Update user dengan data yang sudah diubah
    $user->update($data);

    // Redirect kembali ke halaman admin user
    return redirect('/admin/user')->with('success', 'User updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user');
    }
}
