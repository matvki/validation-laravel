@extends('layouts.base')

@section('title', 'Statues')
@section('style', '/css/statuesStyle.css')


@section('content')
<table>
    <tr>
        <th>Nom</th>
        <th>Date de création</th>
        <th>Pays</th>
        <th>Estimation du prix</th>
        <th>Nom de l'artiste</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    @foreach ($statues as $statue)
    <tr>
        <td>{{ $statue->name }}</td>
        <td>{{ $statue->date }}</td>
        <td>{{ $statue->country }}</td>
        <td>{{ $statue->price }}</td>
        <td>{{ $statue->author }}</td>
        <td>
            <form action="/modification" method="post">
                @csrf
                <button type="submit"><img src="/img/write-letter.svg" alt=""></button>
                <input type="hidden" name="id" value="{{$statue->id}}">
            </form>
        </td>
        <td>
            <form action="/delete" method="post">
                @csrf
                <button type="submit"><img src="/img/garbage-can.svg" alt=""></button>
                <input type="hidden" name="id" value="{{$statue->id}}">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection 