@extends('layouts.template')

@section('nav')
    <nav class="navbar fixed-top py-4 navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="home2">
                <h1>{{ config('app.name', 'Laravel') }}</h1>
            </a>    
        </div>
    </nav>

    <br>
    <br>
@endsection

@section('main')
    @if($errors->any())
        <h3>{{$errors}}</h3>
        <strong style="color: red"><h3>Erro ao cadastrar: </h3></strong><br/>
    @endif
    
    <div class="container">
        <h2>Cadastro de Usuário</h2>
        
        <div class="row justify-content-center" >
            
            <div class="col-3 my-5">
                <div class="card">
                    <div class="card-header">Cliente</div>
                    <div class="card-body">
                        <a class="card-link" href="cliente.create">
                                <img src="{{ URL::to('/') }}/storage/imgs/cliente.png" class="img-fluid d-block">
                        </a>
                    </div>
                </div>
            
            </div>
            
            <div class="col-3 my-5">
                <div class="card">
                        <div class="card-header">Seja nosso parceiro</div>

                        <div class="card-body">
                            <a class="card-link" href="estabelecimento.create">
                                    <img src="{{ URL::to('/') }}/storage/imgs/cliente.png" class="img-fluid d-block">
                            </a>
                        </div>
                </div>
            </div>
            
            <div class="col-md-6 offset-md-4  text-muted">
                <small >fique tranquilo, nosso site é seguro!</small>
                <br>
                <small >já tem um cadastro? 
                    <a class="text-muted" href="{{ route('login') }}"><ins>entrar</ins></a>
                </small>
            </div>
        </div>            
    </div>
@endsection
