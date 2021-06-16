@extends('layout.app')

@section('title','Clients')

@section('css')
<link rel="stylesheet" href="{{asset('styles/client.css')}}">
@endsection

@section('content')

<div class="content">
    <h2>Mes clients</h2>
    <p>Dans cette section,vous pouvez voir la liste de tous vos clients</p>
    <table>
        <tr>
            <th>#</th>
            <th>Société</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>TVA</th>
            <th>Factures</th>
            <th>Opérations</th>
        </tr>

@foreach ($clients as $client)

<tr>
    <td>{{$client->id}}</td>
    <td>{{$client->société}}</td>
    <td>{{$client->téléphone}}</td>
    <td>{{$client->email}}</td>
    <td>{{$client->adresse}}</td>
    <td>{{$client->TVA}}</td>
    <td>{{$client->facture}}</td>
    <td> <a href="./">Nice</a> <button> <a href="./">Pas Nice</a></button></td>
</tr>

@endforeach

    </table>
</div>

@endsection
