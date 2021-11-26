@extends('base')
{{-- cria uma seção chamada content que será injetada
na view base --}}
@section('content2')
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Colaboradores') }}
                </h2>
                <h3>Alteração dos dados do <b>colaborador</b></h3>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Alteração de Ganhadores</h4>
                                <p class="card-description">

                                </p>
                                <form method="POST" action="{{ route('client.update', $client->id) }}">
                                    @csrf

                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nameClient">Nome do Ganhador</label>
                                        <input class="form-control" id="nameClient" placeholder="Nome"
                                            required value="{{ $client->nameclient }}" name="nameClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="phoneClient">Celular do Ganhador</label>
                                        <input class="form-control" id="phoneClient" required
                                            value="{{ $client->phoneclient }}" placeholder="Celular Cliente"
                                            name="phoneClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="cpfClient">CPF do Ganhador</label>
                                        <input class="form-control" id="cpfClient" required
                                            value="{{ $client->cpfclient }}" placeholder="CPF do Ganhador"
                                            name="cpfClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="District">Endereço Ganhador</label>
                                        <select class="form-control" id="District" name="District"
                                            name="District">
                                            @isset($District)
                                                @foreach ($District as $c)
                                                    <option value="{{ $c->id }}" {{ $c->id == $client->district->id ? 'selected' : 'unselected' }}>
                                                        {{ $c->siglastate }} {{ $c->descdistrict }}/{{ $c->city->desccity }}
                                                        ({{ $c->city->state->siglastate }})</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="roadClient">Rua do Ganhador:</label>
                                        <input class="form-control" id="roadClient"
                                            placeholder="Logradouro Ganhador" required value="{{ $client->roadclient }}"
                                            name="roadClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="numberClient">Número da Casa:</label>
                                        <input class="form-control" id="numberClient"
                                            placeholder="Número da Casa/Apartamento" required
                                            value="{{ $client->numberclient }}" name="numberClient">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Cadastrar</button>
                                    <button type="reset" class="btn btn-light">Limpar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- finalizana a seção --}}
@endsection
