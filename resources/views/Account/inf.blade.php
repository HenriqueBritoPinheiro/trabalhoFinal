

@extends('base');

@section('content2')
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Resultado das Ações entre Amigos') }}
                </h2>
                <h3>Dados do <b>Resultado da Ação Entre Amigos</b></h3>
            </div>
        </div>
    </div>
@endsection
{{-- cria uma seção chamada content que será injetada
na view base --}}
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Informações - Ganhadores dos Prêmios</h4>
                            <p class="card-description">
                            </p>
                            <p>
                               O(a) <b>{{$account->accounttype->descaccounttype}}</b> foi para o colaborador 
                               <b>{{$account->client->nameclient}}</b> da cidade de <b>{{$account->client->district->city->desccity}} 
                            /{{$account->client->district->city->state->siglastate}}</b>, Foi arrecadado o Montante de: 
                            <b>{{ 'R$ '.number_format($account->balanceaccount, 2, ',', '.') }}</b>
                            </p>
                            <br />
                            <button class="btn btn-light"><a href="{{ route('account.index') }}">Voltar</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- finalizana a seção --}}
@endsection
