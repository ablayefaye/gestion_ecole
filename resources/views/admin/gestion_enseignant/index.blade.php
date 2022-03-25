@extends('templates.admin_template')
@section('title')
admin | gestion enseignant
@endsection

@section('content')
<div class="container-fluid">
    <div class="bg-dark text-center mb-1 text-white p-3">
        <b>Liste Enseignants</b>
    </div>
    @if(Session::has('teacher_created'))
        <p class="text-center text-success">
            <b>{{ Session::get('teacher_created') }}</b>
        </p>
    @endif
    @if(Session::has('delete_message'))
    <p class="text-center text-success">
        <b>{{ Session::get('delete_message') }}</b>
    </p>
    @endif
    @if(Session::has('message_update'))
    <p class="text-center text-success">
        <b>{{ Session::get('message_update') }}</b>
    </p>
    @endif

    <div class="text-end">
        <button class="btn btn-lg btn-outline-warning" data-bs-toggle="modal" data-bs-target="#addTeacher"><i class="fa fa-plus" aria-hidden="true"></i></button>

    </div>
    <form method="POST" action="{{ route('enseignant.store') }}">
        @csrf
        <div class="modal fade" id="addTeacher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Enregistrement Enseignant</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>

                            <div class="card-body">
                                <p class="card-text">
                                    <input type="hidden" name="profil" value="enseignant">
                                    <p>
                                        <label for="prenom" class="mb-2 text-dark"><b>Prénom:</b></label>
                                        <input type="text" name='prenom' placeholder="Votre Prénom svp *" class="form-control p-3">
                                    </p>
                                    <p>
                                        <label for="nom" class="mb-2 text-dark"><b>Nom:</b></label>
                                        <input type="text" name='nom' placeholder="Votre Nom svp *" class="form-control p-3">
                                    </p>
                                    <p>
                                        <label for="adresse" class="mb-2 text-dark"><b>Adresse:</b></label>
                                        <input type="text" name='adresse' placeholder="Votre Adresse svp *" class="form-control p-3">
                                    </p>
                                    <p>
                                        <label for="telephone" class="mb-2 text-dark"><b>Téléphone:</b></label>
                                        <input type="text" name='telephone' placeholder="Votre Téléphone svp *" class="form-control p-3">
                                    </p>
                                    <p>
                                        <label for="email" class="mb-2 text-dark"><b>Email:</b></label>
                                        <input type="email" name='email' placeholder="Votre Email svp *" class="form-control p-3">
                                    </p>


                                    <p class="text-center">
                                        <button type="submit" class="btn btn-lg btn-outline-dark">Enregistrer Enseignant</button>
                                    </p>


                                </p>
                            </div>

                    </div>
                </div>

              </div>
            </div>
        </div>

    </form>

    <table class="table table-sm table-hover table-responsive table-bordered mt-1">

        <tr class="text-center text-warning table-dark">
            <th><b>ID</b></th>
            <th><b>Prénom</b></th>
            <th><b>Nom</b></th>
            <th><b>Télephone <i class="fa fa-phone" aria-hidden="true"></i></b></th>
            <th colspan="3"><b>Actions <i class="fas fa-toolbox    "></i></b></th>
        </tr>
        @foreach ($users as $user)
            <tr class="text-center">

                <td class="text-warning table-dark"><b>#{{$user->id}}</b></td>
                <td><b>{{$user->prenom}}</b></td>
                <td><b>{{$user->nom}}</b></td>
                <td><b>{{$user->telephone}}</b></td>
                <td>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#detele{{$user->id}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    <div class="modal text-start fade" id="detele{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header bg-dark text-white">
                              <h5 class="modal-title" id="exampleModalLabel">Supprission Enseignant {{$user->id}} ...</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Êtes-vous sûre de vouloir effectuer cette action ?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Non, annuler</button>
                              <form action="{{ route('enseignant.destroy', ['enseignant'=>$user->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Oui, je suis sûre</button>
                            </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </td>
                <td class="text-start">
                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit{{$user->id}}"><i class="fas fa-edit"></i></button>
                    <form method="POST" action="{{ route('enseignant.update', ['enseignant'=>$user->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="modal fade" id="edit{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modification Enseignant #{{$user->id}}</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div>

                                            <div class="card-body">
                                                <p class="card-text">
                                                    <input type="hidden" name="profil" value="enseignant">
                                                    <p>
                                                        <label for="prenom" class="mb-2 text-dark"><b>Prénom:</b></label>
                                                        <input value="{{$user->prenom}}" type="text" name='prenom' placeholder="Votre Prénom svp *" class="form-control p-3">
                                                    </p>
                                                    <p>
                                                        <label for="nom" class="mb-2 text-dark"><b>Nom:</b></label>
                                                        <input value="{{$user->nom}}" type="text" name='nom' placeholder="Votre Nom svp *" class="form-control p-3">
                                                    </p>
                                                    <p>
                                                        <label for="adresse" class="mb-2 text-dark"><b>Adresse:</b></label>
                                                        <input value="{{$user->adresse}}" type="text" name='adresse' placeholder="Votre Adresse svp *" class="form-control p-3">
                                                    </p>
                                                    <p>
                                                        <label for="telephone" class="mb-2 text-dark"><b>Téléphone:</b></label>
                                                        <input value="{{$user->telephone}}" type="text" name='telephone' placeholder="Votre Téléphone svp *" class="form-control p-3">
                                                    </p>

                                                    <p class="text-center">
                                                        <button type="submit" class="btn btn-lg btn-outline-dark">Modifier Enseignant</button>
                                                    </p>


                                                </p>
                                            </div>

                                    </div>
                                </div>

                              </div>
                            </div>
                        </div>

                    </form>
                </td>
                <td>
                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#show{{$user->id}}"><i class="fa fa-eye" aria-hidden="true"></i></button>
                    <div class="modal text-start fade" id="show{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header bg-dark text-white">
                              <h5 class="modal-title" id="exampleModalLabel">#{{$user->id}} {{$user->prenom}} {{$user->nom}}</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p><i class="fa fa-user" aria-hidden="true"></i> {{$user->prenom}} {{$user->nom}}</p>
                              <p><i class="fa fa-phone" aria-hidden="true"></i> {{$user->telephone}}</p>
                              <p> <i class="fas fa-mail-bulk    "></i> {{$user->email}}</p>
                              <p><i class="fa fa-address-book" aria-hidden="true"></i> {{$user->adresse}}</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">fermer</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

    </table>
    <div class="alert alert-dark">
        <strong class="text-dark text-muted">
            @if (count($users)==0)
                {{count($users)}}  enseignant
            @else
                {{count($users)}} enseignants
            @endif
        </strong>
    </div>
    <div class="d-flex">
        {!! $users->links() !!}
    </div>
</div>
@endsection
