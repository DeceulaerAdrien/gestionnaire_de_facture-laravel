@extends('layout.app')

@section('title',$client->société)

@section('css')
<link rel="stylesheet" href="{{asset('styles/client_edit.css')}}">
@endsection

@section('content')
<div class="content">
    <h2>Modifier le client : {{$client->société}}</h2>
    <form action="/clients/edit/{{$client->id}}" method="post">
        {{ csrf_field()}}
        {{ method_field('PATCH') }}
        <label for="société">Société</label>
        <input type="text" name="société" value="{{$client->société}}">
        <label for="téléphone">Téléphone</label>
        <input type="text" name="téléphone" value="{{$client->téléphone}}">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{$client->email}}">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" value="{{$client->adresse}}">
        <label for="TVA">TVA</label>
        <input type="text" name="TVA" value="{{$client->TVA}}">
        <input type="submit" value="Modifier la fiche client" class="send">
    </form>
</div>



@endsection
