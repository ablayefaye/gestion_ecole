@extends('templates.base')


@section('title')
    Accueil
@endsection
@section('content')
{{-- <h2 class="text-info text-center mt-2"><b>Bienvenu sur <i>senEcole</i></b></h2> --}}
<div class="container img_welcome">
    <div class="row">
        <div class="col-sm-4 offset-sm-4" style="padding-top: 5em">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-info text-center"><b>Bienvenu sur <i>senEcole</i></b></h5>
                    <p class="card-text text-center">
                        <button class="btn btn-lg btn-info">voir plus</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
