<x-layout titulo="home">    

<nav class="navbar navbar-expand-lg" style="background-color: #E5CD59; padding-top: 20px; padding-bottom: 20px;">
      <div class="container-fluid d-flex justify-content-between align-items-center">

        <!-- LOGO (Imagem responsiva) -->
        <a class="navbar-brand" href="/">
          <img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
        </a>

        <!-- BOTÕES CENTRAIS -->
        

        <!-- BOTÕES DIREITA (USUÁRIO E ADM COM LINKS) -->
        <form class="d-flex" role="search">
          <a href="loginUsuario" class="btn"
          style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 17px; font-size: 19px; width: 100px; text-align: center; color: #E5CD59;">LOGIN</a>
          <a href="cadastroUsuario" class="btn ms-2"
          style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 18px; font-size: 20px; width: 150px; text-align: center; color: #E5CD59;">CADASTRO</a>
      </form>

    </div>
  </nav>

  <!-- Titulo Login -->
  <br>
  <br>
  <h2 class="card-title" style="text-align: center;">Login</h2>
  <br>

  <div class="card" style="width:50%; border-color: #E5CD59; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">

    <div class="card-body">
      <!-- Input e-mail -->  
      <br>
      <h3 style="text-align: center;">E-mail:</h3>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInputDisabled" placeholder="nome@exemplo.com" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="floatingInputDisabled">E-mail</label>
      </div>
      <br>

      <!-- Input senha -->
      <h3 style="text-align: center;">Senha:</h3>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingInputDisabled" placeholder="" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="floatingInputDisabled">Senha</label>
      </div>
      <a href="" style="float: right; color: #E5CD59;">Esqueci a Senha</a>
      <br>
 
      <!-- Botao Entrar -->
      <br>
      <div>
        <a href="homeUsuario"><button type="button" class="btn btn-primary" style="background-color: white; color: #E5CD59; border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 18px; margin: auto; width: 15%;">Entrar</button></a>
      </div>
      <br>

    </div>
  </div>



</x-layout>
