@extends('layouts.app')

@section('title', 'Escolha suas Artes Marciais')
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="{{ route(name: 'index') }}">Career in Combat Sports</a>
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
                    <a class="nav-link" href="{{ route(name: 'login') }}">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('form') }}">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>  
</nav>
<div class="flex-grow-1">
    <div class="container mt-5">
        <h1 class="text-center">Escolha suas Artes Marciais</h1>

        <form method="POST" action="{{ route('career.form') }}">
            @csrf

            <!-- Artes Marciais (Checkboxes) -->
            <div class="mb-3">
                <label for="martial_arts" class="form-label">Select the arts:</label><br>
                @php $i = 0 @endphp
                @foreach ($artMartials as $key => $art)
                    <input type="checkbox" name="martial_arts[{{ $i }}]" value="{{ $key }}"> {{ $art }} <br>
                    @php $i++ @endphp
                @endforeach
            </div>

            <!-- Botão de Envio -->
            <button type="submit" class="btn btn-danger">Enviar</button>
        </form>
    </div>
</div>

@section('content')
