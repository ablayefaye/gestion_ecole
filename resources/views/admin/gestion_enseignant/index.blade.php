@extends('templates.admin_template')
@section('title')
admin | gestion enseignant
@endsection

@section('content')
<div class="container mt-3">
    <div class="alert alert-warning text-center">
        <b>Liste Enseignants</b>
    </div>
    <table class="table table-responsive table-bordered">
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
