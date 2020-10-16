@extends('layouts.base')

@section('title', 'Ajout')
@section('style', '/css/addStyle.css')


@section('content')
<section>
    <article>
        <form action="/add" method="post">
            @csrf
            <h2>Formulaire d'ajout pour une statue</h2>
            <div>
                <label for="name">Le nom de la statue</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="date">Date de création</label>
                <input type="number" name="date" id="date">
            </div>
            <div>
                <label for="country">Payx d'origin</label>
                <input type="text" name="country" id="country">
            </div>
            <div>
                <label for="price">Estimation du prix</label>
                <input type="number" name="price" id="price">
            </div>
            <div>
                <label for="author">Nom de l'artiste</label>
                <input type="text" name="author" id="author">
            </div>
            <input type="submit" value="Validé">
        </form>
    </article>
</section>

@endsection 