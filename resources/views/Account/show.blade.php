@extends('base')

@section('content2')
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Resultado das Ações entre Amigos') }}
                </h2>
                <h3>Alteração dos <b>Resultados da Ações Entre Amigos</b></h3>
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
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Alteração de Premiações</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" method="POST" action="{{ route('account.update', $account->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="client">Selecione o Ganhador</label>
                                        <select type="text" class="form-control" id="client" 
                                            name="client">
                                            @isset($client)
                                            @foreach ($client as $c)
                                            <option value="{{$c->id}}" {{$c->id == $account->client->id? 'selected':'unselected'}}>{{$c->nameclient}}</option>
                                            @endforeach
                                        @endisset
                                        </select>
                                        <br />
                                        <button class="btn btn-inverse-primary btn-fw"><a href="{{ route('client.create')}}">Cadastrar novo colaborador</a></button>
                                    </div>
                                    <div class="form-group">
                                        <label for="accountType">Selecione o Prêmio</label>
                                        <select type="text" class="form-control" id="accountType" name="accountType">
                                            @isset($accountType)
                                            @foreach ($accountType as $c)
                                            <option value="{{$c->id}}" {{$account->accounttype->id == $c->id? 'selected':'unselected'}}>{{$c->descaccounttype}}</option>
                                            @endforeach
                                        @endisset
                                        </select>
                                        <br />
                                        <button class="btn btn-inverse-primary btn-fw"><a href="{{ route('accountType.create')}}">Cadastrar novo prêmio sorteado</a></button>
                                    </div>
                                    <div class="form-group">
                                        <label for="balanceAccount">Valor Arrecadado com a Ação entre Amigos</label>
                                        <input class="form-control" id="balanceAccount" placeholder="Digite o valor arrecadado"
                                         required value="{{$account->balanceaccount}}"   name="balanceAccount">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Cadastrar</button>
                                    <button type="reset" disabled class="btn btn-light">Limpar</button>
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
