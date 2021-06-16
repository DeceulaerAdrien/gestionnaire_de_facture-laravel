@extends('layout.app')

@section('title',$client->société)

@section('css')
<link rel="stylesheet" href="{{asset('styles/client_show.css')}}">
@endsection

@section('content')

<div class="content">
<h2>{{$client->société}}</h2>
<p>Numéro de téléphone: {{$client->téléphone}}</p>
<p>Email: {{$client->email}}</p>
<p>Adresse: {{$client->adresse}}</p>
<p>Numéro de TVA: {{$client->TVA}}</p>
<p>Dernière facture: <a href="">{{$client->facture}}</a></p>
</div>

@endsection
