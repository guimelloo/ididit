@extends('layouts.dashboard')

@section('title', 'Página Inicial')

<!-- Sidebar -->
<div class="d-flex">
    <nav class="bg-black text-light vh-100 p-3" style="width: 250px;">
      <h4 class="text-danger">Martial Arts</h4>
      <ul class="nav flex-column">
        @if (count($userArts) > 0)
          <li class="nav-item">
            <a href="{{ route('career.arts') }}" class="nav-link text-light">Arts</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('career.videos') }}" class="nav-link text-light">Trainings</a>
          </li>
        @endif
      </ul>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow-1">

      <!-- Top Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
          <a class="navbar-brand text-danger" href="#">Dashboard</a>
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

      <!-- Content Area -->
      @if (session('Error'))
        <div class="alert alert-danger">
            {{ session('Error') }}
        </div>
    @endif

    @if (session('Success'))
        <div class="alert alert-success">
            {{ session('Success') }}
        </div>
    @endif
    
      <div class="container mt-4">
        <div class="row">
          <!-- Example Cards -->
          <div class="col-md-4">
            <div class="card bg-danger text-light">
              <div class="card-body">
                <h5 class="card-title">Total de Alunos</h5>
                <p class="card-text display-6">120</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-secondary text-light">
              <div class="card-body">
                <h5 class="card-title">Treinamentos</h5>
                <p class="card-text display-6">15</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-dark text-light border border-danger">
              <div class="card-body">
                <h5 class="card-title">Instrutores</h5>
                <p class="card-text display-6">8</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Example Table -->
        <div class="mt-4">
          <h3 class="text-danger text-center">Activities</h3>
          @if (Auth::user()->career)
            
            <table class="table table-dark table-striped">
              <thead>
                <tr class="text-center">
                  <th>Arts</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($artMartialsName as $artname)
                  <tr class="text-center">
                    <td><span>{{$artname}}</span></td>
                  </tr>
              @endforeach
              </tbody>
            </table>
            @else
            <div>
              <p class="text-center">
                you dont have any arts, start your career and turn into a real fighter!
              </p>
            </div>
          @endif
        </div>
      </div>

    </div>
  </div>
  @if (! Auth::user()->career)
    <div id="myModal" class="modal">
      <div class="modal-content">
          <span class="close">&times;</span>
          <h1 class="text-dark">Start Your Career Now!!!</h1>
          <p class="text-dark">
              Start your career journey today and unlock exciting opportunities ahead!
          </p>
          <p class="text-dark">
              Click the button below to take the first step towards achieving your goals and building a successful future.
          </p>
          <p class="text-dark">
              Don't wait—your career begins now!
          </p>
          <button type="button" class="btn btn-danger"><a class="nav-link" href="{{ route('career.arts') }}">OSS</a>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
                  <path d="M8.5 1.75v2.716l.047-.002c.312-.012.742-.016 1.051.046.28.056.543.18.738.288.273.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716q.113.137.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0"/>
              </svg>
          </button>
      </div>
    </div>
  @endif
@section('content')