@extends('layouts.base')

@section('title', 'Modification')
@section('style', '/css/addStyle.css')


@section('content')
<section>
    <article>
        <form action="/update" method="POST">
            @csrf
            
            <input type="hidden" name="id" value="{{$statue->id}}">
            <div>
                <label for="name">Le nom de la statue: </label>
                <input type="text" name="name" id="name" value="{{$statue->name}}">
            </div>
            <div>
                <label for="date">La date de création: </label>
                <input type="number" name="date" id="date" value="{{$statue->date}}">
            </div>
            <div>
                <label for="country">Le pays d'origine: </label>
                <input type="text" name="country" id="country" value="{{$statue->country}}">
            </div>
            <div>
                <label for="price">Estimation du prix: </label>
                <input type="number" name="price" id="price" value="{{$statue->price}}">
            </div>
            <div>
                <label for="author">Nom de l'artiste: </label>
                <input type="text" name="author" id="author" value="{{$statue->author}}">
            </div>
            <input type="submit" value="Modifier">
        </form>
    </article>
</section>
@endsection 