@extends('layout.template')
<html>
    <body>
        <?php 
            
            //phpinfo(); ?>
        @if($errors->any())
            <h3>{{$errors}}</h3>
            
            <strong style="color: red"><h3>Erro ao cadastrar: </h3></strong><br/>
        @endif
        <div class="container w-75 p-3">
            <form>
                @csrf
                <div class="form-group">
                    <label for="inputNome1">Nome Completo</label>
                    <input type="text" class="form-control" id="inputNome1"  placeholder="Nome completo">

                    <label for="inputNome1">Apelido</label>
                    <input type="text" class="form-control" id="inputNome1"  placeholder="Apelido">

                    <label for="inputEmail1">Endereço de email</label>
                    <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Exemplo@gmail.com">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    

                    <label for="inputPassword1">Senha</label>
                    <input type="password" class="form-control" id="inputPassword1" placeholder="Senha">

                    <label for="inputEmail1">Endereço de email</label>
                    <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Exemplo@gmail.com">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <form action="cliente" method="post">
        @csrf

        <h1>Dados dos cliente</h1>
        @error('name')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Nome: <input type="text" name="name" value="{{old('name')}}" /> <br/>

        @error('apelido')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Apelido: <input type="text" name="apelido" value="{{old('apelido')}}" /> <br/>


        @error('email')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Email: <input type="text" name="email" value="{{old('email')}}" /> <br/>

        @error('password')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Senha: <input type="password" name="password" value="{{old('password')}}" /> <br/>

        @error('telefone')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Telefone: <input type="text" name="telefone" value="{{old('telefone')}}" /> <br/>


        <input type="hidden" name="tipo_usuario" value="CLIENTE"/> <br/>

        <h1>Endereço</h1>
        @error('rua')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Rua: <input type="text" name="rua" value="{{old('rua')}}" /> <br/>


        @error('bairro')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Bairro: <input type="text" name="bairro" value="{{old('bairro')}}" /> <br/>

        @error('cidade')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Cidade: <input type="text" name="cidade" value="{{old('cidade')}}" /> <br/>

        @error('estado')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Estado: <input type="text" name="estado" value="{{old('estado')}}" /> <br/>

        @error('cep')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Cep: <input type="text" name="cep" value="{{old('cep')}}" /> <br/>

        @error('numero')
            <strong style="color: red">{{ $message }}</strong><br/>
        @enderror
        Número: <input type="text" name="numero" value="{{old('numero')}}" /> <br/>

        <br/><br/>
        <input type="submit" value="cadastrar" />

        </form>
    </body>
</html>
