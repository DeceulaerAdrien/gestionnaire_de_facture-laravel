@extends('layout.app')

@section('title','Accueil')

@section('css')
<link rel="stylesheet" href="{{asset('styles/welcome.css')}}">
@endsection

@section('content')
<div class="content">
    <div class="clients">
    <h2>Clients</h2>
    <img src="{{asset('images/768x492_tous-trolls.webp')}}" alt="trololol">
    <a href="">Afficher tous les clients</a>
    <a href="">Créer un nouveau client</a>
</div>
<div class="factures">
    <h2>Factures</h2>
    <img src="{{asset('images/768x492_tous-trolls.webp')}}" alt="trololol">
    <a href="">Afficher toutes les factures</a>
    <a href="">Créer une facture</a>
</div>
</div>

@endsection
