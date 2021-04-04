@extends('layouts.app')

@section('title', 'Single news item')

@section('header')
    {{ $singleNewsItem->title }}
@endsection

@section('content')
    <h3>{{ $singleNewsItem->created_at }}</h3>
    <p>{{ $singleNewsItem->body }}</p>
    <br>
    <h1>Об авторе</h1>

    <div class="container">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Имя</th>
            <th scope="col">Рейтинг</th>
            <th scope="col">Количество новостей</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name}}</td>
                <td>{{ $user->rating }}</td>
                <td>{{ $userNewsCount }}</td>
            </tr>
        </tbody>
        </table>
    </div>
@endsection
