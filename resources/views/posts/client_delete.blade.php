@extends('layout.app')

@section('title','Suppression')

@section('css')
<link rel="stylesheet" href="{{asset('styles/client_delete.css')}}">
@endsection

@section('content')
<div class="content">
    <h2>Êtes vous sûre de vouloir supprimer {{$client->society}} ?</h2>
    <div class="buttons">
        <button><a href="/clients">annuler</a></button>
        <form action="{{ route('clients.destroy', [$client->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="confirmer">
        </form>
    </div>

</div>
@endsection
