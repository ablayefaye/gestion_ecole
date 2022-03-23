<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SenEcole Authentification</title>
  </head>
  <body style="background-color: #aed3d1">
    <div class="container  p-3" style="margin-top: 5%">

        <div class="row">
            <div class="col-sm-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('images/img_welcome.jpg') }}" style="height: 350px" class="d-block w-100" alt="...">

                        <div class="text-dark carousel-caption d-none d-md-block" style="margin: 30px;
                        background-color: #3febe2;
                        opacity: 0.6;">
                            <h5 ><b>Administrateur</b></h5>
                            <p >Some representative placeholder content for the first slide.</p>
                        </div>
                        </div>

                      <div class="carousel-item">
                        <img src="{{ asset('images/enseignant.jpg') }}" class="d-block w-100" alt="..." style="height: 350px">
                        <div class="text-dark carousel-caption d-none d-md-block" style="margin: 30px;
                        background-color: #3febe2;
                        opacity: 0.6;">
                            <h5 ><b>Enseignant</b></h5>
                            <p >Some representative placeholder content for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('images/img_welcome.jpg') }}" style="height: 350px" class="d-block w-100" alt="...">
                        <div class="text-dark carousel-caption d-none d-md-block" style="margin: 30px;
                        background-color:  #3febe2;
                        opacity: 0.6;">
                            <h5 ><b>Élève</b></h5>
                            <p >Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-sm-6 text-dark">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center text-info"><b>Authentification</b></h5>
                        <p class="card-text">
                            <p>
                                <label for="email" class="mb-2 text-info"><b>Email:</b></label>
                                <input type="email" name='email' placeholder="Votre Email svp *" class="form-control p-3">
                            </p>
                            <p>
                                <label for="email" class="mb-2 text-info"><b>Mot de passe:</b></label>
                                <input type="text" name='password' placeholder="Votre Email svp *" class="form-control p-3">
                            </p>
                            <p class="text-center">
                                <a href="{{ route('welcome_app') }}" class="btn btn-light" style="text-decoration: none">Retourner à accueil</a>
                                <button type="submit" class="btn btn-lg btn-outline-info">Se connecter</button>
                            </p>
                        </p>
                    </div>
                </form>
                </div>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>
