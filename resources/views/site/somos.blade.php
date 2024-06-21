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
    
    <div id="carouselExampleCaptions" class="carousel slide w-100">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('somos.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
          <img src="{{ asset('grupo.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            
           
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br><br><br>

    <div class="container text-center mt-4">
      <div class="row align-items-center">
        <div class="col-md-10 offset-md-1">
          <p class="text-justify Descubra titulo2"><h2>Descubra mais sobre o grupo:</h2></p>
          <p class="text-justify gray-text"><br>Em 21 de janeiro de 2019, a JYP anunciou que estrearia um novo girl group, o primeiro desde Twice em 2015 e o primeiro grupo ídolo geral desde Stray Kids em 2017.[5] O canal oficial da gravadora no YouTube carregou um trailer revelando os cinco membros. No dia 12 de fevereiro, o grupo lançou seu primeiro single álbum, It'z Different, liderado pelo single "Dalla Dalla". A canção incorporou elementos de subgêneros EDM, como future house e bass house, e suas letras poderosas foram bem recebidas pelo público. O grupo marcou uma das maiores estreias na Billboard para um novo grupo de K-pop em anos, com "Dalla Dalla" entrando em terceiro lugar e chegando ao número dois na parada World Digital Song Sales. A canção vendeu 2.000 downloads nos EUA na semana encerrada em 14 de fevereiro, de acordo com a Nielsen Music, tornando-se a canção de K-pop mais vendida no país naquela semana. <br>"Want It?" foi lançada junto com "Dalla Dalla" e estreou na oitava posição, vendendo 1.000 downloads. "Dalla Dalla" também estreou como a segunda canção mais popular no YouTube.[17][18] A Billboard confirmou que o videoclipe de "Dalla Dalla" ultrapassou 17,1 milhões de visualizações em 24 horas após seu lançamento e quebrou o recorde de videoclipe de estreia de K-pop mais visto em 24 horas. Em 21 de fevereiro, oito dias após sua estreia, Itzy recebeu sua primeira vitória em um programa musical no M Countdown, quebrando o recorde de tempo mais rápido para um girl group alcançar sua primeira vitória em um programa musical. A música ganhou nove vezes em programas musicais, e seu videoclipe se tornou o videoclipe de estreia de K-pop mais rápido a atingir 100 milhões de visualizações no YouTube na época.</p>
          
      </div>
    </div>
    <br><br><br>
    <footer class="container">
    <div class="d-flex justify-content-between align-items-center">
        <p class="mb-0">&copy; ITZY - Amanda 3°DS</p>
        <div class="d-flex">
            <a href="https://open.spotify.com/intl-pt/artist/2KC9Qb60EaY0kW4eH68vr3"><img src="spotify.png" alt="Spotify" width="40" height="40"></a>
            <a href="https://www.youtube.com/@ITZY"><img src="youtube.png" alt="YouTube" width="45" height="45"></a>
            <a href="https://www.instagram.com/itzy.all.in.us/"><img src="insta.png" alt="Instagram" width="40" height="40"></a>
        </div>
    </div>
    <p class="float-end"><a href="#">Voltar ao topo</a></p>
</footer>
    @endsection