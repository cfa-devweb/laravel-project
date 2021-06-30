@extends('layouts.app')

@section('content')

<h1 class="text-center">Ajouter une entreprise</h1>

<form class="w-50 m-auto" action="/add-company" method="POST">
    <div class="mb-3">
        <label for="company-name" class="form-label">Nom de l'entreprise</label>
        <input type="text" class="form-control" id="company-name">
    </div>
    <div class="mb-3">
        <label for="comapny-adress" class="form-label">Adresse de l'entreprise</label>
        <input type="password" class="form-control" id="company-adress">
    </div>
    <div class="mb-3">
        <label for="company-mail" class="form-label">Adresse e-mail de l'entreprise</label>
        <input type="email" class="form-control" id="company-mail">
    </div>
    <div class="mb-3">
        <label for="company-phone" class="form-label">Numéro de téléphone de l'entreprise</label>
        <input type="tel" class="form-control" id="company-phone">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>


<table class="table">

    <thead>
        <tr>
            <th scope="col">Nom de l'entreprise</th>
            <th scope="col">Adresse de l'entreprise</th>
            <th scope="col">E-mail de l'entreprise</th>
            <th scope="col">Téléphone de lentreprise</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $key)
        <tr>
            <td>{{ $companies->name }}</td>
            <td>{{ $companies->adress }}</td>
            <td>{{ $companies->email }}</td>
            <td>{{ $companies->phone }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection