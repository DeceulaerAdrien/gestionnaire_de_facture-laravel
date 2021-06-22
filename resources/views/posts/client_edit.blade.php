@extends('layout.app')

@section('title',$client->society)

@section('css')
<link rel="stylesheet" href="{{asset('styles/client_edit.css')}}">
@endsection

@section('content')
<div class="content">
    <h2>Modifier le client : {{$client->society}}</h2>
    <form action="/clients/edit/{{$client->id}}" method="post">
        {{ csrf_field()}}
        {{ method_field('PATCH') }}
        <label for="society">Société</label>
        <input type="text" name="society" value="{{$client->society}}">
        <label for="phone">Téléphone</label>
        <input type="text" name="phone" value="{{$client->phone}}">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{$client->email}}">
        <label for="address">Adresse</label>
        <input type="text" name="address" value="{{$client->address}}">
        <label for="VAT">TVA</label>
        <input type="text" name="VAT" value="{{$client->VAT}}">
        <input type="submit" value="Modifier la fiche client" class="send">
    </form>
</div>



@endsection
