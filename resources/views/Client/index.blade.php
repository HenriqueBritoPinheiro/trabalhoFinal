@extends('base')

@section('content2')
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Colaboradores') }}
                </h2>
                <h3>Listagem de <b>colaboradores</b> cadastrados</h3>
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
                                <a href="{{ route('client.index') }}">
                                    Início
                                </a>
                            </button>
                            <button class="btn btn-inverse-primary btn-fw">
                                <a href="{{ route('client.create') }}">
                                    Novo
                                </a>
                            </button>
                            <br />
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome</th>
                                            <th>Telefone</th>
                                            <th>Cidade</th>
                                            <th colspan="3">Comandos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($clients)
                                            @foreach ($clients as $c)
                                                <tr>
                                                    <td>{{ $c->id }}</td>
                                                    <td>{{ $c->nameclient }}</td>
                                                    <td>{{ $c->phoneclient }}</td>
                                                    <td>{{ $c->district->city->desccity }}</td>
                                                    <td>
                                                        <a href="{{ route('client.show', $c->id) }}">
                                                            <button type="button" class="btn btn-primary btn-rounded btn-icon">
                                                                <i class="mdi mdi-library-plus"></i>
                                                            </button>
                                                        </a>
                                                    <td>
                                                        <a href="{{ route('client.edit', $c->id) }}">
                                                            <button type="button" class="btn btn-dark btn-rounded btn-icon">
                                                                <i class="mdi mdi-pencil"></i>
                                                            </button>
                                                        </a>
                                                    <td>
                                                        <br />
                                                        <form method="post" action="{{ route('client.destroy', $c->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a>
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-rounded btn-icon">
                                                                    <i class="mdi mdi-account-minus"></i>
                                                                </button>
                                                            </a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                        @empty($clients)
                                            <tr>
                                                <td colspan="6">NÃO EXISTEM DADOS!</td>
                                            </tr>
                                        @endempty
                                    </tbody>
                                </table>
                            </div>
                            {{ $clients->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
