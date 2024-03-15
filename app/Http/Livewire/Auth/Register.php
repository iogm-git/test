<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $nama;
    public $email;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.auth.register');
    }

    protected $rules = [
        'nama' => 'required|string|min:5|max:255',
        'email' => 'required|email:dns|max:255|unique:users,email',
        'password' => 'required|confirmed|string|min:5'
    ];

    public function register()
    {
        $this->validate();

        User::create([
            'nama' => $this->nama,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', 'Registration successful!');

        return redirect()->route('login');
    }
}
