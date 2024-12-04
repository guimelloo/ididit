@extends('layouts.app')

@section('title', 'Página Inicial')
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="/">Career in Combat Sports</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#training">Training</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/career">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card bg-secondary text-white p-4" style="width: 100%; max-width: 400px;">
            <h2 class="text-center mb-4 text-danger">Registration</h2>
            <form action="{{ route('register.store') }}" method="POST">
            @csrf
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                </div>
                <!-- What Martial Art -->
                <div class="mb-3">
                    <label for="art" class="form-label">What martial art do you practice or want to?</label>
                    <select class="form-select" id="art" name="art" required>
                        <option value="" disabled selected>Select a martial art</option>
                        <option value="boxing">Boxing</option>
                        <option value="jiu-jitsu">Jiu-Jitsu</option>
                        <option value="muay-thai">Muay Thai</option>
                        <option value="karate">Karate</option>
                        <option value="taekwondo">Taekwondo</option>
                    </select>
                </div>
                <!-- Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-danger">Register</button>
                </div>
            </form>
        </div>
    </div>
@section('content')