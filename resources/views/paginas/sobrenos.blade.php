<x-layout titulo="sobrenos">
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #DA3E41; padding-top: 20px; padding-bottom: 20px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- LOGO (Imagem responsiva) -->
      <a class="navbar-brand" href="/">
        <img src="{{URL::to('/assets/img/logo_gimo.png')}}" alt="Logo" style="width: 100px; height: auto;">
      </a>

      <!-- BOTÕES CENTRAIS -->
      <div class="d-flex justify-content-center flex-grow-1" style="padding-top:35px;">
        <ul class="navbar-nav d-flex flex-row gap-3">
          <li class="nav-item">
            <a href="/" class="btn btn-danger"
               style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Home</a>
          </li>
          <li class="nav-item">
            <a href="/sobrenos" class="btn btn-danger"
               style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Sobre</a>
          </li>
          <li class="nav-item">
            <a href="/loginUsuario" class="btn btn-danger"
               style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Atividade</a>
          </li>
          <li class="nav-item">
            <a href="/loginUsuario" class="btn btn-danger"
               style="border: 2px solid black; border-radius: 30px; padding: 12px 24px; font-size: 18px; width: 120px; text-align: center;">Relatório</a>
          </li>
        </ul>
      </div>

      <!-- BOTÕES DIREITA (USUÁRIO E ADM COM LINKS) -->
      <form class="d-flex" role="search">
        <a href="loginUsuario" class="btn"
           style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 17px; font-size: 19px; width: 100px; text-align: center; color: #DA3E41;">Login</a>
        <a href="loginAdm" class="btn ms-2"
           style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 18px; font-size: 20px; width: 100px; text-align: center; color: #DA3E41;">Adm</a>
      </form>
    </div>
  </nav>

  <!-- Container para os cards, usando Flexbox para centralizar -->
  <div class="container d-flex justify-content-center flex-wrap gap-3 my-5">
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>

  <!-- Footer remains unchanged -->
  <footer class="text-muted" style="background-color: #D3D3D3; width: 100%;">
    <div class="container py-5">
      <div class="row text-center text-md-start">
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Projeto GIMO Desenvolvido por:</h6>
          <div class="d-flex flex-column align-items-start">
            <p class="mb-2">Gisele da Hora Silva</p>
            <p class="mb-2">Isaac Sena Martins</p>
            <p class="mb-2">Mateus Albuquerque Pavani</p>
            <p class="mb-2">Otávio Fidalgo</p>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Linkedin</h6>
          <div class="flex-column align-items-start text-center">
            <a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank" class="d-block text-decoration-none text-primary mb-2">
              <i class="fab fa-linkedin me-2"></i>https://www.bing.com/searchsdasadadadsa
            </a>
            <a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank" class="d-block text-decoration-none text-primary mb-2">
              <i class="fab fa-linkedin me-2"></i>https://www.bing.com/searchsdasdaasdadas
            </a>
            <a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank" class="d-block text-decoration-none text-primary mb-2">
              <i class="fab fa-linkedin me-2"></i>https://www.bing.com/searchasdadsadsdasd
            </a>
            <a href="https://www.linkedin.com/in/nome-do-perfil" target="_blank" class="d-block text-decoration-none text-primary mb-2">
              <i class="fab fa-linkedin me-2"></i>https://www.bing.com/searchasdadasdsadad
            </a>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Contato</h6>
          <p><i class="fas fa-envelope me-2"></i>gimo.projeto@email.com</p>
          <p><i class="fas fa-phone me-2"></i>(11) 12345-6789</p>
          <p><i class="fas fa-map-marker-alt me-2"></i>Senac - SBC, Brasil</p>
        </div>
      </div>

      <!-- Redes Sociais - Siga-nos (centralizado) -->
      <div class="row">
        <div class="col-12 text-center mt-4">
          <h6 class="text-uppercase fw-bold mb-3">Redes Sociais</h6>
          <a href="https://www.linkedin.com" target="_blank" class="me-4 text-reset">
            <i class="fab fa-linkedin fa-lg"></i>
          </a>
          <a href="https://www.instagram.com" target="_blank" class="me-4 text-reset">
            <i class="fab fa-instagram fa-lg"></i>
          </a>
          <a href="https://www.github.com" target="_blank" class="me-4 text-reset">
            <i class="fab fa-github fa-lg"></i>
          </a>
        </div>
      </div>

      <!-- Direitos Autorais -->
      <div class="row">
        <div class="col-12 text-center mt-4">
          <p class="mb-0">&copy; 2025 Projeto GIMO. Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- FontAwesome (caso ainda não esteja incluído) -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</x-layout>
