@extends('base')
{{-- cria uma seção chamada content que será injetada
na view base --}}
@section('content2')
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Bairros') }}
                </h2>
                <h3>Cadastro de <b>Bairros</b></h3>
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
                                <h4 class="card-title">Cadastro de Bairros</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" method="POST" action="{{ route('district.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="descDistrict">Nome do Bairro</label>
                                        <input class="form-control" id="descDistrict" placeholder="Digite o nome do Bairro"
                                            required name="descDistrict">
                                    </div>
                                    <div class="form-group">
                                        <label for="State">Cidade</label>
                                        <select type="text" class="form-control" id="City" name="City" required value=""
                                            name="City">
                                            @isset($City)
                                            @foreach ($City as $c)
                                            <option value="{{$c->id}}">{{$c->desccity}}/{{$c->state->siglastate}}</option>
                                            @endforeach
                                        @endisset
                                        </select>
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
