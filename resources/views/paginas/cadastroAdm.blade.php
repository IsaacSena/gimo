<x-layout titulo="cadastroAdm">    

<nav class="navbar navbar-expand-lg" style="background-color: #BDBDBD; padding-top: 20px; padding-bottom: 20px;">
      <div class="container-fluid d-flex justify-content-between align-items-center">

        <!-- LOGO (Imagem responsiva) -->
        <a class="navbar-brand" href="/homeAdm">
          <img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
        </a>

        <!-- BOTÕES CENTRAIS -->
        

        <!-- BOTÕES DIREITA (USUÁRIO E ADM COM LINKS) -->
        <form class="d-flex" role="search">
          <a class="btn ms-2"
          style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 18px; font-size: 20px; width: 190px; text-align: center; color: #000000;">ADMINISTRADOR</a>
      </form>

    </div>
  </nav>

  <!-- Titulo Cadastro -->
  <br>
  <h2 class="card-title" style="text-align: center;">Cadastro</h2>
  <br>

  <div class="card" style="width:50%; border-color: #BDBDBD; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">

    <div class="card-body">
      <!-- Input nome -->  
        <h3 style="text-align: center;">Nome:</h3>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInputDisabled" placeholder="nome@exemplo.com" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
            <label for="floatingInputDisabled">Nome</label>
        </div>
        <br>

      <!-- Input sobrenome -->
        <h3 style="text-align: center;">Sobrenome:</h3>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputDisabled" placeholder="" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
            <label for="floatingInputDisabled">Sobrenome</label>
        </div>
        <br>
        
        <!-- Input e-mail -->
        <h3 style="text-align: center;">E-mail:</h3>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputDisabled" placeholder="" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
            <label for="floatingInputDisabled">E-mail</label>
        </div>
        <br>

        <!-- Input senha -->
        <h3 style="text-align: center;">Senha:</h3>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputDisabled" placeholder="" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
            <label for="floatingInputDisabled">Senha</label>
        </div>
        <br>

        <!-- Input idade -->
        <h3 style="text-align: center;">Idade:</h3>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputDisabled" placeholder="" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
            <label for="floatingInputDisabled">Idade</label>
        </div>
        <br>

      <!-- Botao Entrar -->
        <div>
            <a href="/homeAdm"><button type="button" class="btn btn-primary" style="background-color: white; color: #000000; border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 18px; margin: auto; width: 15%;">Cadastrar</button></a>
        </div>
        <br>

    </div>
  </div> 



</x-layout>
