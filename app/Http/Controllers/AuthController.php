<?php
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
    
        // Tenta autenticar o usuário
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Redireciona para a página desejada após o login bem-sucedido
            return redirect()->route('career');
        } else {
            // Redireciona de volta com uma mensagem de erro se a autenticação falhar
            return back()->withErrors(['email' => 'As credenciais informadas não coincidem com nossos registros.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}