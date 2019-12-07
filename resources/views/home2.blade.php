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
                        <a class="nav-link" href="usuario.create">Cadastrar</a>
                    </li>          
                </ul>
            </div> 
    </nav>
@endsection



@section('main')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="w-100">
                <div id="carouselPaginaPrincipal" class="carousel slide" data-ride="carousel">
                
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#carouselPaginaPrincipal" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselPaginaPrincipal" data-slide-to="1"></li>
                        <li data-target="#carouselPaginaPrincipal" data-slide-to="2"></li>
                    </ul>

                    <div class="carousel-inner">
                        
                            <div class="carousel-item active">
                                <img src="{{ URL::to('/') }}/storage/imgs/promo-1.jpg" class="img-fluid d-block">

                                <div class="carousel-caption text-danger">
                                    <h1>Testando</h1>
                                    <p  class="lead">fdsfkasdfjasdlfjaslfdjaslfjaslfjals</p>
                                </div>
                                
                            </div> 

                            <div class="carousel-item">
                                <img src="{{ URL::to('/') }}/storage/imgs/promo-2.jpg" class="img-fluid d-block">
                            </div> <!--Fim carousel-item 2-->
                    
                            <div class="carousel-item">
                                <img src="{{ URL::to('/') }}/storage/imgs/promo-4.jpg" class="img-fluid d-block">
                            </div> <!--Fim carousel-item 3-->
                        
                    </div> <!--Fim carousel-inner-->

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#carouselPaginaPrincipal" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    
                    <a class="carousel-control-next" href="#carouselPaginaPrincipal" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                
                </div> <!--Fim carousel-->
            </div>
        </div>
    </div>
@endsection
