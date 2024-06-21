@extends('site.layout')



@section('conteudo')
  <div class="container-fluid text-center">
    <nav class="navbar navbar-expand-lg navbar-custom w-100">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h1>ITZY</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('site.home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('site.somos') }}">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('site.contato') }}">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
  

    <br><br><br>
    <div class="container text-center mt-4 ">
      <div class="row align-items-center ">
        <div class="col-md-10 offset-md-1 ">
          
       

          <div class="container mt-5 form-container ">
          
          <form action="{{ route('site.contato') }}" method="post" >
            @csrf
    <p class="text-justify Descubra titulo2"> Tire dúvidas entrando em contato conosco!</p><br><br>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome">
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Digite seu telefone">
    </div>
    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço:</label>
        <input type="text" id="endereco" name="email" class="form-control" placeholder="Digite seu endereço">
    </div>
    <div class="mb-3">
        <label for="sexo" class="form-label">Sexo:</label>
        <select id="sexo" name="sexo" class="form-select">
            <option value="" disabled selected>Selecione</option>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
            <option value="agenero">Agênero</option>
            <option value="outro">Outro</option>
        </select>
    </div>
    <button type="submit" class="btn btn-orange">Enviar</button>
        </form>
    </div>

        </div>
      </div>
    </div>
    <footer class="container">
    <div class="d-flex justify-content-between align-items-center">
        <p class="mb-0">&copy; ITZY - Amanda 3°DS</p>
        <div class="d-flex">
            <a href="https://open.spotify.com/intl-pt/artist/2KC9Qb60EaY0kW4eH68vr3"><img src="spotify.png" alt="Spotify" width="40" height="40"></a>
            <a href="https://www.youtube.com/@ITZY"><img src="youtube.png" alt="YouTube" width="45" height="45"></a>
            <a href="https://www.instagram.com/itzy.all.in.us/"><img src="insta.png" alt="Instagram" width="40" height="40"></a>
        </div>
    </div>
</footer>
    <br><br><br>
    @endsection
