@extends('layouts.app')

@section('content')
    <h1>Список новостей</h1>
    @foreach ($news as $item)
        <h2>{{$item->name}}</h2>
        <div>{{Str::limit($item->body, 200)}}</div>
    @endforeach
@endsection
