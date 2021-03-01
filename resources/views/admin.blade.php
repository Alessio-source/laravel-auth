@extends('layouts.app')

@section('content')

<div class="container">

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Testo</th>
            <th scope="col">Img</th>
            <th scope="col">Data di creazione</th>
            <th scope="col">Ultima modifica</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->text }}</td>
                    <td><img src="{{ asset('storage/' . $post->img_path ) }}" alt="{{ $post->title }}"></td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

    <a href="{{ route('admin.create') }}">Aggiungi Post</a>

</div>
@endsection