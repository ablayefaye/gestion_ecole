@extends('templates.admin_template')
@section('title')
admin | gestion enseignant
@endsection

@section('content')
<div class="container mt-1">
    <div class="alert alert-warning text-center">
        <b>Liste Enseignants</b>
    </div>
    <div class="text-end pr-2">
        <button class="btn btn-lg btn-outline-warning" data-bs-toggle="modal" data-bs-target="#addTeacher"><i class="fa fa-plus" aria-hidden="true"></i></button>

    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="modal fade" id="addTeacher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>

                            <div class="card-body">
                                <h5 class="card-title text-center text-dark"><b>Enregistrement Enseignant</b></h5>
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

    <table class="table table-responsive table-bordered mt-1">
        <tr class="text-center text-warning table-dark">
            <th><b>ID</b></th>
            <th><b>Prénom</b></th>
            <th><b>Nom</b></th>
            <th><b>Télephone <i class="fa fa-phone" aria-hidden="true"></i></b></th>
            <th colspan="3"><b>Actions <i class="fas fa-toolbox    "></i></b></th>
        </tr>
        <tr class="text-center">
            <td class="text-warning table-dark"><b>#1</b></td>
            <td><b>Ablaye</b></td>
            <td><b>Faye</b></td>
            <td><b>77 854 53 82</b></td>
            <td>
                <button class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
            <td>
                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit    "></i></button>
            </td>
            <td>
                <button class="btn btn-sm btn-outline-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
            </td>
        </tr>
        <tr class="text-center">
            <td class="text-warning table-dark"><b>#2</b></td>
            <td><b>Ass</b></td>
            <td><b>Diop</b></td>
            <td><b>77 854 53 85</b></td>
            <td>
                <button class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
            <td>
                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit    "></i></button>
            </td>
            <td>
                <button class="btn btn-sm btn-outline-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
            </td>
        </tr>
        <tr class="text-center">
            <td class="text-warning table-dark"><b>#3</b></td>
            <td><b>Cheikh</b></td>
            <td><b>Sarr</b></td>
            <td><b>77 864 53 82</b></td>
            <td>
                <button class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
            <td>
                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit    "></i></button>
            </td>
            <td>
                <button class="btn btn-sm btn-outline-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
            </td>
        </tr>
        <tr class="text-center">
            <td class="text-warning table-dark"><b>#4</b></td>
            <td><b>Samba</b></td>
            <td><b>Diouf</b></td>
            <td><b>77 666 53 82</b></td>
            <td>
                <button class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
            <td>
                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit    "></i></button>
            </td>
            <td>
                <button class="btn btn-sm btn-outline-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
            </td>
        </tr>
    </table>
    <div class="alert alert-dark">
        <strong class="text-dark text-muted">6 enseignants</strong>
    </div>
</div>
@endsection
