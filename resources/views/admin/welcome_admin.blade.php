@extends('templates.admin_template')
@section('title')
    Accueil Admin
@endsection

@section('content')
<div class="container pt-5">
        <h4 class="text-center"><span class="text-muted">Bienvenu dans votre Espace Personnelle</span> <i>{{$admin->name}}</i> </h4>
        <div class="row pt-3">
            <div class="col-sm-4">
                <a href="{{ route('enseignant.index') }}" style="text-decoration: none" title="Aller à gestion enseignant">
                <div class="card alert alert-warning">
                    <div class="card-body">
                        <h5 class="card-title"><b>Enseignant</b></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, distinctio doloremque corporis voluptates amet ullam aliquid unde repellat, quae, adipisci laborum? Molestias, facilis natus exercitationem dolorum quasi sint culpa corporis.</p>
                    </div>

                </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="" style="text-decoration: none">
                    <div class="card alert  alert-warning">
                        <div class="card-body">
                            <h5 class="card-title"><b>Élève</b></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, distinctio doloremque corporis voluptates amet ullam aliquid unde repellat, quae, adipisci laborum? Molestias, facilis natus exercitationem dolorum quasi sint culpa corporis.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4 ">
                <a href="" style="text-decoration: none">
                <div class="card alert alert-warning">
                    <div class="card-body">
                        <h5 class="card-title"><b>Cours</b></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, distinctio doloremque corporis voluptates amet ullam aliquid unde repellat, quae, adipisci laborum? Molestias, facilis natus exercitationem dolorum quasi sint culpa corporis.</p>
                    </div>

                </div>
                </a>
            </div>
        </div>
    </div>
@endsection
