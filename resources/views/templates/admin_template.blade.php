<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
  <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">

  <title>SenEcole - @yield('title')</title>
    <style>
        .img_welcome {
            background-image: url("images/img_welcome.jpg"); /* The image used */
            /* background-color:; Used if the image is unavailable */
            height: 500px; /* You must set a specified height */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: auto; /* Resize the background image to cover the entire container */
        }
        .home_hover:hover {
            color: black;
        }
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>

      <main>
        <h1 class="visually-hidden">Sidebars examples</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">

            <span class="fs-4"> {{$title}}</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">

            <li>
              <a href="{{ route('enseignant.index') }}" class="nav-link text-white">
                <i class="fa fa-toolbox" aria-hidden="true"></i>
                Gestion Enseignant
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="fa fa-toolbox" aria-hidden="true"></i>
                Gestion Élève
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="fas fa-book-open    "></i>
                Gestion Cours
              </a>
            </li>

          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#disconnect">
              {{-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> --}}
              <strong>{{$admin->prenom}}</strong>&nbsp;&nbsp;<i class="fas fa-sign-out-alt text-warning"></i>
            </a>

          </div>
        </div>
        @yield('content')
      </main>

    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('welcome_admin') }}"><b>SenEcole</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link"href="{{ route('enseignant.index') }}" style="color: white; font-weight: bold">Gestion Enseignant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;font-weight: bold">Gestion Etudiant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;font-weight: bold">Gestion Cours</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link"  href="{{ route('admin_profil') }}" style="color: white;font-weight: bold">Mon Profil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-warning" data-bs-toggle="modal" data-bs-target="#disconnect"  href="{{ route('admin_profil') }}" style="font-weight: bold"> Se déconnecter <i class="fas fa-sign-out-alt    "></i></a>

                </li>
              </ul>

          </div>
        </div>
    </nav> --}}





    <div class="modal fade" id="disconnect" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Déconnexion ...</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <b>Êtes vous sûre de vouloir vous déconnectez?</b>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Non, annuler</button>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input class="nav-link btn btn-outline-warning btn-sm" type="submit" value="Oui, je suis sûre"></a>
                </form>

            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
    <script src="{{ asset('js/sidebars.js') }}"></script>
    <script src="https://releases.jquery.com/git/jquery-git.js"></script>
</body>
</html>
