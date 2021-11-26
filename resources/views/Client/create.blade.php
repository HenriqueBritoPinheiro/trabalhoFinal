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
                <h3>Cadastros de novos colaboradores</h3>
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
                                <h4 class="card-title">Cadastro de Colaboradores</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" method="POST" action="{{ route('client.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nameClient">Nome do Ganhador</label>
                                        <input required  class="form-control" id="nameClient" placeholder="Nome"
                                            name="nameClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="phoneClient">Celular do Ganhador</label>
                                        <input type="phone" class="form-control" id="phoneClient"
                                        required placeholder="Celular Cliente" name="phoneClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="cpfClient">CPF do Ganhador</label>
                                        <input class="form-control" id="cpfClient"
                                        required  placeholder="CPF do Ganhador" name="cpfClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="District">Endereço Ganhador</label>
                                        <select class="form-control" id="District" name="District" name="District">
                                            @isset($District)
                                                @foreach ($District as $c)
                                                    <option value="{{ $c->id }}">{{ $c->descdistrict }}/{{$c->city->desccity}} ({{$c->city->state->siglastate}})</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="roadClient">Rua do Ganhador:</label>
                                        <input required class="form-control" id="roadClient" placeholder="Logradouro Ganhador"
                                            name="roadClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="numberClient">Número da Casa:</label>
                                        <input class="form-control" id="numberClient" placeholder="Número da Casa/Apartamento"
                                        require  name="numberClient">
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
    {{-- finalizano a seção --}}
@endsection
