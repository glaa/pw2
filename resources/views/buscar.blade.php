@extends('layouts.template')

@section('nav')
    
    <nav class="navbar fixed-top navbar-expand-lg py-4 navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="home2"><h1>{{ config('app.name', 'Laravel') }}</h1> </a>
            
            <div class="container-fluid d-flex justify-content-center">
                <form class="form-group  w-75" action="" method="">
                    <div class="input-group">
                        <input class="form-control form-control-lg border-left-0 border " type="search" placeholder="Buscar produto" id="buscar-produto">
                        
                        <div class="input-group-prepend">
                            <button class="btn btn-light text-danger" type="submit">
                                <i class="material-icons" aria-hidden="true">search</i>
                            </button>
                        </div>  
                    </div>
                </form>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navBarSite">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cliente.create">Cadastrar</a>
                    </li>          
                </ul>
            </div> 
    </nav>
@endsection

@section('main')
<div class="container">
    <div class="row">
        <h2 class="text-uppercase text-center">Resultado</h2>
    </div>

    <div class="row">
        @foreach($produtos as $p)
        <div class="col-sm-4 text-center">
                <img src="storage/app/public/imgs/promo-1.jpg">
                <!-- -->
                <p>{{$p->nome}}</p>
                <p>{{$p->descricao}}</p>
                <p>{{$p->preco}}</p>
                <p>{{$p->estabelecimento}}</p>
            </div>
        @endforeach
        
    </div>
</div>
@endsection
