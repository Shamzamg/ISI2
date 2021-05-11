@extends('layout')

@section('titrePage', 'Les Mangas')

@section('titreItem', 'Tous les mangas')

@section('contenu')
<table class="table table-bordered table-striped">
    <thead>
        <th>Id</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Genre</th>
        <th>Nom dessinateur</th>
        <th>Prenom dessinateur</th>
    </thead>
    @foreach($mangas as $manga)
        <tr>
            <td> {{ $manga->id_manga }} </td>
            <td> {{ $manga->titre }} </td>
            <td> {{ $manga->prix }} </td>
            <td> {{ $manga->lib_genre }} </td>
            <td> {{ $manga->nom_dessinateur}} </td>
            <td> {{ $manga->prenom_dessinateur }} </td>
        </tr>
    @endforeach
</table>
@endsection
