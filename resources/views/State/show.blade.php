@extends('base')
{{-- cria uma seção chamada content que será injetada
na view base --}}

@section('content2')
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Estados') }}
                </h2>
                <h3>Alteração de dados de <b>Estados</b></h3>
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
                                <h4 class="card-title">Cadastro de Estados</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" method="POST" action="{{ route('state.update', $state->id) }}">
                                    @csrf
                                    {{-- define o método put para o formulário --}}
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="descState">Nome do Estado</label>
                                        <input class="form-control" id="descState" required value="{{$state->descstate}}"
                                            placeholder="Digite o nome do seu Estado" name="descState">
                                    </div>
                                    <div class="form-group">
                                        <label for="siglaState">Sigla Estado</label>
                                        <input oninput="this.value = this.value.toUpperCase()" class="form-control" id="siglaState" required value="{{$state->siglastate}}"
                                            placeholder="Digite a sigla do seu Estado" name="siglaState">
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
