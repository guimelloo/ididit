@extends('layouts.dashboard')

<div class="d-flex">
    <nav class="bg-black text-light vh-100 p-3" style="width: 250px;">
        <h4 class="text-danger">Martial Arts</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Alunos</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Instrutores</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Treinamentos</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Configurações</a>
            </li>
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
                            <h5 class="card-title">Detalhes Adicionais</h5>
                            <p class="card-text">Aqui você pode adicionar mais informações relevantes sobre o perfil do usuário, como histórico de atividades, certificações, etc.</p>
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
                        <tr>
                            <td>1</td>
                            <td>Treinamento de Karatê</td>
                            <td>01/12/2024</td>
                            <td><span class="badge bg-success">Concluído</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Aula de Jiu-Jitsu</td>
                            <td>02/12/2024</td>
                            <td><span class="badge bg-warning">Pendente</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Treino Funcional</td>
                            <td>03/12/2024</td>
                            <td><span class="badge bg-danger">Cancelado</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
