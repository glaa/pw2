@extends('layouts.template')

@section('nav')
    
    <nav class="navbar fixed-top navbar-expand-lg py-4 navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="{{URL::to('home2')}}"><h1>{{ config('app.name', 'Laravel') }}</h1> </a>
            
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
                                    <a class="dropdown-item" href="{{ URL::to('home2') }}"> 
                                        Perfil
                                    </a>
                                    <a class="dropdown-item" href="{{ URL::to('home2') }}"> 
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
        @if ($comprou)
            <!--Aletar de sucesso ao comprar um produto-->
            <div id="Alerta-sucesso" class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Compra realizada com sucesso</strong> 
                </div>    
            </div>
        @endif
        
        <div class="row ">
            <div class="card-group col-8">
                <div class="card  bg-light mb-3">
                    <div class="card-body">
                        <img src="{{ URL::to('/') }}/storage/imgs/shampoo.png" class="img-fluid d-block">     
                    </div>
                </div>
                
                <div class="card  bg-light">
                        <div class="card-body">
                            <h3 class="card-text text-dark">{{$produto->nome}}</h3>
                            
                            <a class="card-link text-muted" href="#decricao-produto"> <h6><ins> mais informações do produto</ins></h6></a>
                            
                            <a class="card-link text-muted" href="#"> <h6><ins>conheça nossa política de troca</ins></h6></a>
                        </div>
                </div>
            </div>

            <div class="card col-4 bg-light mb-3">
                <div class="card-body">
                    <h6 class="card-text font-weight-bold text-muted"><s>De R$ {{$produto->preco}}</s></h6>
                    <h3 class="card-text font-weight-bold text-dark">por R$ {{number_format($produto->preco - $produto->preco * $produto->desconto, 2)}}</h3>
                    <small class="card-text text-muted">em 1x no cartão de crédito</small>
                    <small class="card-text text-muted">ou em até 10x R$ {{number_format($produto->preco/10.0, 2)}} sem juros no cartão de crédito</small>

                   
                    <button type="button" class="btn btn-danger form-control font-weight-bold mt-3" data-toggle="modal" data-target="#modal-finalizar-compra">
                        Comprar
                    </button>

                    <small class="card-text text-muted">Este produto é vendido e entregue por <b>{{$nome_estabelecimento}}</b></small>
                    
                </div>
            </div>
        </div>

        <div id="decricao-produto" class="row">
                <div class="card-header">
                    <h5 class="card-text">Descrição do produto</div>
                </div>
                <div class="card col-12 bg-light">
                    <p  class="card-text text-muted">
                        {{$produto->descricao}}
                    </p>
                </div>
        </div>
      
      <!-- Modal -->
    <div class="modal fade" id="modal-finalizar-compra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Finalizar compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p class="">Deseja finalizar a sua compra?</p>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a href="{{URL::to('/comprar.produto')}}/{{$produto->id}}">
                        <button type="submit" class="btn btn-danger form-control font-weight-bold">
                            Finalizar   
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    
@endsection
