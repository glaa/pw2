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
                            @endif
                        </div>
                    </li>
                @endguest
                </ul>
            </div> 
    </nav>
@endsection

@section('main')
    @if($errors->any())
        <h3>{{$errors}}</h3>
        <strong style="color: red"><h3>Erro ao cadastrar: </h3></strong><br/>
    @endif
    
    <div class="container">
        <div class="row justify-content-center" >
            
            <div class="col-md-8">
                <h2>Cadastre seus produtos</h2>
                <div class="card">
                                    
                    <form method="POST" action={{url('produto.create')}}>
                        @csrf
                        <div class="card-header">{{ __('Dados do Produto') }}</div>
                        <div class="card-body">
                                
                                
                            <!--Campo Nome-->
                            <div class="form-group row">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" placeholder="Nome" required autocomplete="nome" autofocus>

                                    @error('nome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                
                            <!--Campo quantidade-->
                            <div class="form-group row">
                                <label for="quantidade" class="col-md-4 col-form-label text-md-right">{{ __('Quantidade') }}</label>
            
                                <div class="col-md-6">
                                    <input id="quantidade" type="text" class="form-control @error('quantidade') is-invalid @enderror" name="quantidade" value="{{ old('quantidade') }}" placeholder="Quantidade de itens" required autocomplete="quantidade">
                                    
                                    @error('quantidade')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> 
                            </div>

                            <!--Campo preco-->
                            <div class="form-group row">
                                <label for="preco" class="col-md-4 col-form-label text-md-right">{{ __('Preço') }}</label>
            
                                <div class="col-md-6">
                                    <input id="preco" type="text" class="form-control @error('preco') is-invalid @enderror" name="preco" value="{{ old('preco') }}" placeholder="Preço" required autocomplete="preco">
                                    
                                    @error('preco')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> 
                            </div>

                            <!--Campo desconto-->
                            <div class="form-group row">
                                <label for="desconto" class="col-md-4 col-form-label text-md-right">{{ __('Valor de desconto') }}</label>
            
                                <div class="col-md-6">
                                    <input id="desconto" type="text" class="form-control @error('desconto') is-invalid @enderror" name="desconto" value="{{ old('desconto') }}" placeholder="Valor de desconto" required autocomplete="desconto">
                                    
                                    @error('desconto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> 
                            </div>

                            <!--Campo descricao-->
                            <div class="form-group row">
                                <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>
            
                                <div class="col-md-6">
                                    <!--<input id="descricao" type="textarea" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ old('descricao') }}" placeholder="Descrição do produto" required autocomplete="descricao">-->
                                    <textarea id="descricao" class="form-control"  cols="5"  rows="5" wrap="hard"  type="text"  @error('descricao') is-invalid @enderror name="descricao" value="{{ old('descricao') }}" placeholder="Descrição do produto" required autocomplete="descricao"></textarea>
                                    @error('descricao')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    
                                </div> 
                            </div>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                        Cadastrar
                                </button>
                            </div>
                        </div>      
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection
