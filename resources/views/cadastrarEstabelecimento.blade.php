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
        <div class="row justify-content-center" >
            
            <div class="col-md-8">
                <h2>Cadastre seu Estabelecimento</h2>
                <small class="text-muted"> Seja nosso parceiro </small>
                <div class="card">
                                    
                    <form method="POST" action="estabelecimento.create">
                        @csrf
                        <div class="card-header">{{ __('Dados Pessoais') }}</div>
                        <div class="card-body">
                                
                                
                            <!--Campo Nome-->
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nome" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                
                            <!--Campo cpf_cnpj-->
                            <div class="form-group row">
                                <label for="cpf_cnpj" class="col-md-4 col-form-label text-md-right">{{ __('cpf_cnpj') }}</label>
            
                                <div class="col-md-6">
                                    <input id="cpf_cnpj" type="text" class="form-control @error('cpf_cnpj') is-invalid @enderror" name="cpf_cnpj" value="{{ old('cpf_cnpj') }}" placeholder="000.000.000-00" onkeypress="$(this).mask('000.000.000-00')" required autocomplete="cpf_cnpj">
                            
                                    @error('cpf_cnpj')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                
                            <!--Campo email-->
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Campo telefone-->
                            <div class="form-group row">
                                <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
            
                                <div class="col-md-6">
                                    <input id="telefone" type="text" class="form-control"  @error('telefone') is-invalid @enderror name="telefone"  value="{{ old('telefone') }}" placeholder="(00) 00000-0000" onkeypress="$(this).mask('(00) 00000-0000')" required autocomplete="telefone">
            
                                    @error('telefone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                
                            <!--Campo Senha-->
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        <!---->
                            
                            <!--Campo Confirmação de Senha-->
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confimar a senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmação de senha" required autocomplete="new-password">
                                </div>
                            </div>

                            <!--Campo define que é um tipo de usuário -->
                            <input type="hidden" name="tipo_usuario" value="ESTABELECIMENTO"/> <br/>


                        </div>

                        <div class="card-header">{{ __('Endereço') }}</div>
                        <div class="card-body">
                                
                                
                            <!--Campo Cep-->
                            <div class="form-group row">
                                <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('Cep') }}</label>

                                <div class="col-md-6">
                                    <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" placeholder="00000-000" onkeypress="$(this).mask('00000-000')" required autocomplete="cep" autofocus>

                                    @error('cep')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Campo rua-->
                            <div class="form-group row">
                                <label for="rua" class="col-md-4 col-form-label text-md-right">{{ __('Rua') }}</label>
            
                                <div class="col-md-6">
                                    <input id="rua" type="text" class="form-control @error('rua') is-invalid @enderror" name="rua" value="{{ old('rua') }}" placeholder="Rua" required autocomplete="rua" autofocus>
            
                                    @error('rua')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Campo número-->
                            <div class="form-group row">
                                <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Número') }}</label>
            
                                <div class="col-md-6">
                                    <input id="rua" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" placeholder="Número" required autocomplete="numero" autofocus>
            
                                    @error('numero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Campo bairro-->
                            <div class="form-group row">
                                <label for="bairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>
            
                                <div class="col-md-6">
                                    <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" placeholder="Bairro" required autocomplete="bairro" autofocus>
            
                                    @error('bairro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Campo cidade-->
                            <div class="form-group row">
                                <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>
            
                                <div class="col-md-6">
                                    <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}" placeholder="Cidade" required autocomplete="cidade" autofocus>
            
                                    @error('cidade')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <!--Campo estado-->
                            <div class="form-group row">
                                <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
        
                                <div class="col-md-6">
                                    <input id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ old('estado') }}" placeholder="Estado" required autocomplete="estado" autofocus>
        
                                    @error('estado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                        Cadastrar
                                </button>
                            </div>

                            <div class="col-md-6 offset-md-4  text-muted">
                                <small >fique tranquilo, nosso site é seguro!</small>
                                <br>
                                <small >já tem um cadastro? 
                                    <a class="text-muted" href="{{ route('login') }}"><ins>entrar</ins></a>
                                </small>
                            </div>
                        </div>      
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection
