<x-layout titulo="Alterar Senha de Usuário">    

  <nav class="navbar navbar-expand-lg" style="background-color: #f5e177; padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO (Imagem responsiva) -->
      <a class="navbar-brand" href="/">
        <img src="{{ URL::to('/assets/img/logo_gimo.png') }}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÃO LOGIN -->
      <form class="d-flex" role="search">
        <a href="usuarioLogin" class="btn" style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 17px; font-size: 19px; width: 100px; text-align: center; color: #E5CD59;">LOGIN</a>
      </form>

    </div>
  </nav>

  <!-- Título Cadastro -->
  <br>
  <h2 class="card-title" style="text-align: center;">Alterar Senha</h2>
  <br>

  <div class="card" style="width: 50%; border-color: #f5e177; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">
    <div class="card-body">

      <!-- Formulário de alteração de senha -->
      <form action="" method="GET"> {{-- Ajuste a rota conforme necessário --}}

        <h3 style="text-align: center;">Nova Senha</h3>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a nova senha" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
          <label for="senha">Senha</label>
        </div>
        <br>

        <!-- Botão Cadastrar -->
        <div>
          <button type="submit" class="btn btn-primary" style="background-color: white; color: #f5e177; border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 17px; margin: auto; width: 20%;">Cadastrar</button>
        </div>
        <br>

      </form>

    </div>
  </div> 

</x-layout>
