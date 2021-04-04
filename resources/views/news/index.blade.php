@extends('layouts.app')

@section('title', 'news')

@section('header', 'Список новостей')

@section('content')
    <div class="container">
        <table class="table table-primary table-bordered">
        <thead>
            <tr>
            <th scope="col">Название</th>
            <th scope="col">Дата создания</th>
            <th scope="col">Автор</th>
            <th scope="col">Краткое описание</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
                <tr>
                    <th>
                        <a class="nav-link" href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a>
                    </th>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->short_description }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>

    {{ $news->links() }}
@endsection
