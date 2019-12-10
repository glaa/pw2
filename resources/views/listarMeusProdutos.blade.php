@extends('layouts.template')

@section('nav')
    
    <nav class="navbar fixed-top navbar-expand-lg py-4 navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="home2"><h1>{{ config('app.name', 'Laravel') }}</h1> </a>
            
            <div class="container-fluid d-flex justify-content-center">
                <form class="form-group  w-75" action="{{url('buscar/')}}" method="GET">
                    <div class="input-group">
                            <input class="form-control form-control-lg border-left-0 border " type="search" placeholder="Buscar produto" id="buscar"  name="buscar" value="{{ old('buscar') }}">
                        
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
                    
                    
                    <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuario.create">Cadastrar</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                               
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            @if(Auth::user()->tipo_usuario == "ESTABELECIMENTO") 
                                
                                <a class="dropdown-item" href="{{ url('/produto.create') }}"> 
                                    Cadastrar Produtos
                                </a>

                                <a class="dropdown-item" href="{{ url('/meus.produtos') }}"> 
                                    Meus produtos
                                </a>

                                <a class="dropdown-item" href="{{ url('/') }}"> 
                                    Minhas vendas
                                </a>
                           
                            @else
                                @if(Auth::user()->tipo_usuario == "CLIENTE")
                                    <a class="dropdown-item" href="{{ url('/produto.create') }}"> 
                                    </a>
                                        Perfil
                                    <a class="dropdown-item" href="{{ url('/') }}"> 
                                        Meus pedidos
                                    </a>
                                @endif
                            @endif
                        </div>
                    </li>
                @endguest
                </ul>
            </div> 
    </nav>

    <br><br>
@endsection

@section('main')
    @if($errors->any())
        <h3>{{$errors}}</h3>
        <strong style="color: red"><h3>Erro ao cadastrar: </h3></strong><br/>
    @endif
    
    <div class="container">
        
        <h2 class="mb-0">Meus produtos</h2>
        <small class="text-muted">{{Auth::user()->name}}</small>
        <br>
        <br>
        <br>
        
        <div class="row ">
        
            
            @foreach ($produtos as $produto)
            @if ($loop->iteration % 4 == 0)
                <div class="row card-group">
            
                </div>
            
            @else
                <div class="card col-3 bg-light mb-3">
                    <div class="card-body">
                        <a class="card-link" href="estabelecimento.create">
                            <img src="{{ URL::to('/') }}/storage/imgs/shampoo.png" class="img-fluid d-block">
                            <h6 class="card-text text-muted">{{$produto->nome}}</h6>
                            
                            <h5 class="card-text font-weight-bold text-dark">R$ {{$produto->preco}}</h5>
                        </a>
                    </div>
                </div>
            @endif
            @endforeach   
                
        </div>
        
    </div>
@endsection
