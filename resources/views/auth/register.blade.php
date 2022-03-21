{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="prenom" :value="__('Name')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
             <div>
                <x-label for="prenom" :value="__('Name')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

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
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="col-sm-4 offset-sm-4" style="margin-top: 10%">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center text-info"><b>Authentification</b></h5>
                        <p class="card-text">
                            <p>
                                <label for="prenom" class="mb-2 text-info"><b>Prénom:</b></label>
                                <input type="text" name='prenom' placeholder="Votre Prénom svp *" class="form-control p-3">
                            </p>
                            <p>
                                <label for="nom" class="mb-2 text-info"><b>Nom:</b></label>
                                <input type="text" name='nom' placeholder="Votre Nom svp *" class="form-control p-3">
                            </p>
                            <p>
                                <label for="adresse" class="mb-2 text-info"><b>Adresse:</b></label>
                                <input type="text" name='adresse' placeholder="Votre Adresse svp *" class="form-control p-3">
                            </p>
                            <p>
                                <label for="telephone" class="mb-2 text-info"><b>Téléphone:</b></label>
                                <input type="text" name='telephone' placeholder="Votre Téléphone svp *" class="form-control p-3">
                            </p>
                            <p>
                                <label for="email" class="mb-2 text-info"><b>Email:</b></label>
                                <input type="email" name='email' placeholder="Votre Email svp *" class="form-control p-3">
                            </p>
                            <p>
                                <label for="password" class="mb-2 text-info"><b>Mot de passe:</b></label>
                                <input type="password" name='password' placeholder="Votre Email svp *" class="form-control p-3">
                            </p>
                            <p>
                                <label for="password_confirmation" class="mb-2 text-info"><b>Confirmer:</b></label>
                                <input type="password" name='password_confirmation' placeholder="Confirmation *" class="form-control p-3">
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
