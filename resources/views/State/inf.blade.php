@extends('base')

@section('content2')
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Estados') }}
                </h2>
                <h3>Dados coletados sobre o <b>Estado</b></h3>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Informações - Estado</h4>
                            <p class="card-description">
                            </p>
                            <p>
                               O Estado cadastrado é <b>{{ $state->descstate }}</b>,
                                e possui a sigla <b>{{$state->siglastate}}</b>.
                            </p>
                            <br />
                            <button class="btn btn-light"><a href="{{ route('accountType.index') }}">Voltar</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- finalizana a seção --}}
@endsection
