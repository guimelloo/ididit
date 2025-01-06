@extends('layouts.dashboard')

<div class="d-flex">
    <nav class="bg-black text-light vh-100 p-3" style="width: 250px;">
        <h4 class="text-danger">Martial Arts</h4>
        <ul class="nav flex-column">

        </ul>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow-1">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container-fluid">
                <a class="navbar-brand text-danger" href="#">Perfil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('career.home') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content Area -->
        <div class="container mt-4">
            <!-- Profile Info -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <h5 class="card-title text-danger">Informações do Perfil</h5>
                            <p class="card-text display-6">Nome: {{ Auth::user()->name }}</p>
                            <p class="card-text">Email: {{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card bg-secondary text-light">
                        <div class="card-body">
                            <h5 class="card-title">Soon !!!</h5>
                            <p class="card-text">Soon new features...</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities Section -->
            <div class="mt-4">
                <h3 class="text-danger">Atividades Recentes</h3>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Atividade</th>
                            <th>Data</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
