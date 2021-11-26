@extends('base')

@section('content2')
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Resultado das Ações entre Amigos') }}
                </h2>
                <h3>Listagem de <b>Resultados da Ações Entre Amigos</b></h3>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-inverse-primary btn-fw">
                                <a href="{{ route('account.index') }}">
                                    Início
                                </a>
                            </button>
                            <button class="btn btn-inverse-primary btn-fw">
                                <a href="{{ route('account.create') }}">
                                    Novo
                                </a>
                            </button>
                            <br />
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Ganahdor</th>
                                            <th>Cidade/Estado</th>
                                            <th>Prêmio</th>
                                            <th>Valor total da ação</th>
                                            <th colspan="3">Comandos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($account)
                                            @foreach ($account as $c)
                                                <tr>
                                                    <td>{{ $c->id }}</td>
                                                    <td>{{ $c->client->nameclient}}</td>
                                                    <td>{{ $c->client->district->city->desccity}}/
                                                        {{ $c->client->district->city->state->siglastate}}</td>
                                                    <td>{{ $c->accounttype->descaccounttype }}</td>
                                                    <td>{{ 'R$ '.number_format($c->balanceaccount, 2, ',', '.') }}</td>
                                                    <td>
                                                        <a href="{{ route('account.show', $c->id) }}">
                                                            <button type="button" class="btn btn-primary btn-rounded btn-icon">
                                                                <i class="mdi mdi-library-plus"></i>
                                                            </button>
                                                        </a>
                                                    <td>
                                                        <a href="{{ route('account.edit', $c->id) }}">
                                                            <button type="button" class="btn btn-dark btn-rounded btn-icon">
                                                                <i class="mdi mdi-pencil"></i>
                                                            </button>
                                                        </a>
                                                    <td>
                                                        <br />
                                                        <form method="post" action="{{ route('account.destroy', $c->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a>
                                                                <button type="submit" class="btn btn-danger btn-rounded btn-icon">
                                                                    <i class="mdi mdi-account-minus"></i>
                                                                </button>
                                                            </a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                        @empty($account)
                                            <tr>
                                                <td colspan="6">NÃO EXISTEM DADOS!</td>
                                            </tr>
                                        @endempty
                                    </tbody>
                                </table>
                            </div>
                            {{$account->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
