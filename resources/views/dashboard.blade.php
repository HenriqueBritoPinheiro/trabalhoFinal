@extends('base')
{{-- cria uma seção chamada content que será injetada
na view base --}}
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Bem Vindo!</h3>
                            <p class="card-description">
                            </p>
                            <p class="card-description">
                               Sistema de Cadastros de Ação entre Amigos Realizadas pela AVCC Jales cadastradas no sistema
                                para prestação de contas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- finalizana a seção --}}
@endsection


