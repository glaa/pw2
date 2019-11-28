<html>
    <body>
        <?php 
            
            //phpinfo(); ?>
        @if($errors->any())
            <h3>{{$errors}}</h3>
            
            <strong style="color: red"><h3>Erro ao cadastrar: </h3></strong><br/>
        @endif

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
