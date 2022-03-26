@extends('templates.admin_template')
@section('title')
admin | gestion enseignant
@endsection

@section('content')
<div class="container mt-2">
    <div class="bg-dark p-3 text-white text-center">
        <b>Mon profil</b>
    </div>
    @if(Session::has('update_profile'))
    <p class="text-center text-success">
        <b>{{ Session::get('update_profile') }}</b>
    </p>
    @endif
    <div class="container p-2  bg-light">
        <div class="text-center">
            <img src="{{ asset('images/profil.png') }}" style="width: 13em" class="img-fluid">
        </div>
        <form action="{{ route('admin_profil') }}" method="post">
            @csrf
            <div class="row">

                <div class="col-sm-6">
                    <p>
                        <label for="prenom" class="text-warning"><b>Prénom:</b></label>
                        <input type="text" name="prenom" value="{{$admin->prenom}}" class="form-control p-2">
                    </p>
                    <p>
                        <label for="nom" class="text-warning"><b>Nom:</b></label>
                        <input type="text" name="nom" value="{{$admin->nom}}" class="form-control p-2">
                    </p>
                    <p>
                        <label for="telephone" class="text-warning"><b>Téléphone <i class="fa fa-phone" aria-hidden="true"></i>:</b></label>
                        <input type="text" name="telephone" value="{{$admin->telephone}}" class="form-control p-2">
                    </p>
                </div>
                <div class="col-sm-6">
                    <p>
                        <label for="adresse" class="text-warning"><b>Adresse:</b></label>
                        <input type="text" name="adresse" value="{{$admin->adresse}}" class="form-control p-2">
                    </p>
                    <p>
                        <label for="old_password" class="text-warning"><b>Ancien mot de passe:</b></label>
                        <input type="password" name="old_password" value="{{old('old_password')}}" class="form-control p-2">
                    </p>
                    <p>
                        <label for="new_password" class="text-warning"><b>Nouveau mot de passe:</b> <small class="text-muted">(au moins 8 caractères)</small></label>
                        <input type="password" name="new_password" value="{{old('new_password')}}" class="form-control p-2">
                    </p>
                </div>
            </div>
            <input type="hidden" name="id" value="{{$admin->id}}">
            <p class="text-center">
                <button class="btn btn-dark btn-lg" type="submit">Mettre à jour mon profil</button>
            </p>
        </form>
    </div>
</div>
@endsection
