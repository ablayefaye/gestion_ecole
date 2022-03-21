<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SenEcole Authentification</title>
  </head>
  <body class="bg-dark">
    <div class="row">
        <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="col-sm-4 offset-sm-4" style="margin-top: 10%">
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
                            <button type="submit" class="btn btn-lg btn-outline-info">Se connecter</button>
                        </p>
                    </p>
                </div>
            </div>
        </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>
