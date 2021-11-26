@extends('base')
{{-- cria uma seção chamada content que será injetada
na view base --}}
@section('content2')
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Resultado das Ações entre Amigos') }}
                </h2>
                <h3>Alteração dos dados do <b>Prêmio</b></h3>
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
                                <h4 class="card-title">Alteração de Prêmios</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" method="POST" action="{{ route('accountType.update', $accountType->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="descAccountType">Nome do Prêmio</label>
                                        <input class="form-control" id="descAccountType" placeholder="Digite o nome do Prêmio"
                                           required value="{{$accountType->descaccounttype}}" name="descAccountType">
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
