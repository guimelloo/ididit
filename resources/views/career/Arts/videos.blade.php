@extends('layouts.dashboard')

@section('title', 'Página Inicial')
<div class="d-flex">
    <nav class="bg-black text-light vh-100 p-3" style="width: 250px;">
      <h4 class="text-danger">Martial Arts</h4>
      <ul class="nav flex-column">
        <li class="nav-item">
            <a href="" class="nav-link text-light">Arts</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Trainings</a>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow-1">

      <!-- Top Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
          <a class="navbar-brand text-danger" href="{{ route('career.home') }}">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('career.account') }}">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        <div class="row gy-3">
            <!-- Example Cards -->
            @foreach ($artMartials as $art)
                <div class="col-md-4">
                    <a href="">
                        <div class="card bg-danger text-light">
                            
                                <div class="card-body">
                                    <h5 class="card-title">{{$art['name']}}</h5>
                                    <p class="card-text display-6">{{$art['videos_count']}}</p>
                                </div>
                            
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
          
@section('content')  