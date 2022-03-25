@extends('templates.admin_template')
@section('title')
    Accueil Admin
@endsection

@section('content')
<div class="container">

    <div class="bg-dark text-center mb-1 text-white p-3">
        <b><i style="font-size: 1.5em" class="fas fa-home    "></i>Aministrateur</b>
    </div>
    <h4 class="text-center"><span style="text-shadow: rgb(230, 199, 117) 2px 2px 1px">Bienvenu dans votre Espace Personnelle</span> <i>{{$admin->name}}</i> </h4>
    <div class="row">
        <div class="col-sm-4 p-5">
            <a href="{{ route('enseignant.index') }}" style="text-decoration: none" title="Aller à gestion enseignant">
            <div class="card alert alert-warning">
                <div class="card-body">
                    <h5 class="card-title"><b> <i class="fas fa-toolbox"></i> Enseignant</b></h5>
                    <p class="card-text text-center">
                        <span class="badge p-3 badge-primary" style="background-color: rgb(22, 192, 155); border-radius: 3em; font-size: 2em">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span class="text-danger">
                                @if (count($enseignants)==0)
                                <small style="font-size: 10px" class="text-white">liste vide</small>
                                @else
                                    @if (count($enseignants)==1)
                                        {{count($enseignants)}} <small style="font-size: 10px" class="text-white">enseignant</small>
                                        @else
                                            {{count($enseignants)}} <small style="font-size: 10px" class="text-white">enseignants</small>
                                    @endif
                                @endif
                            </span>
                        </span>
                    </p>
                </div>

            </div>
            </a>
        </div>

        <div class="col-sm-4 p-5">
            <a href="{{ route('enseignant.index') }}" style="text-decoration: none" title="Aller à gestion enseignant">
            <div class="card alert alert-warning">
                <div class="card-body">
                    <h5 class="card-title"><b> <i class="fas fa-toolbox"></i> Élève</b></h5>
                    <p class="card-text text-center">
                        <span class="badge p-3 badge-primary" style="background-color: rgb(22, 192, 155); border-radius: 3em; font-size: 2em">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span class="text-danger">
                                @if (count($eleves)==0)
                                <small style="font-size: 10px" class="text-white">liste vide</small>
                                @else
                                    @if (count($eleves)==1)
                                        {{count($eleves)}} <small style="font-size: 10px" class="text-white">élève</small>
                                        @else
                                            {{count($eleves)}} <small style="font-size: 10px" class="text-white">élèves</small>
                                    @endif
                                @endif
                            </span>
                        </span>
                    </p>
                </div>

            </div>
            </a>
        </div>

        <div class="col-sm-4 p-5">
            <a href="#" style="text-decoration: none" title="Aller à gestion enseignant">
            <div class="card alert alert-warning">
                <div class="card-body">
                    <h5 class="card-title"><b> <i class="fas fa-toolbox"></i> Cours</b></h5>
                    <p class="card-text text-center">
                        <span class="badge p-3 badge-primary" style="background-color: rgb(22, 192, 155); border-radius: 3em; font-size: 2em">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span class="text-danger">
                                @if (count($cours)==0)
                                <small style="font-size: 10px" class="text-white">liste vide</small>
                                @else
                                {{count($cours)}} <small style="font-size: 10px" class="text-white">cours</small>
                                @endif
                            </span>
                        </span>
                    </p>
                </div>

            </div>
            </a>
        </div>
    </div>

    <div>
        <div class="alert alert-info">
            <strong>Enseignants: </strong>
            <span class="text-muted">
                Dans cette partie de l'apllication, en tant que admin, vous pourrai faire toutes les opérations de Crud sur les enseignants... <a href="{{ route('enseignant.index') }}" class="btn btn-sm btn-warning"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </span>
        </div>
        <div class="alert alert-info">
            <strong>Élève: </strong>
            <span class="text-muted">
                Dans cette partie de l'apllication, en tant que admin, vous pourrai faire toutes les opérations de Crud sur les éléves... <a href="" class="btn btn-sm btn-warning"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </span>
        </div>
        <div class="alert alert-info">
            <strong>Cours: </strong>
            <span class="text-muted">
                Dans cette partie de l'apllication, en tant que admin, vous pourrai faire toutes les opérations de Crud sur les cours... <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </span>
        </div>
    </div>
</div>
@endsection
