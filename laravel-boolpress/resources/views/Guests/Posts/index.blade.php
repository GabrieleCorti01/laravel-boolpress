@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div>
            <h1 class="mb-4">Libreria Web</h1>
            <h4>di Gabriele Corti</h4>
        </div>
        
        <div class="row justify-content-around">

            @forelse($posts as $post)
            <div class="col-sm-6 mb-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $post->title }}</h5>
                        <p>Categoria: @if ($post->category) {{ $post->category->name }} @else Nessuna categoria @endif</p>
                        <p class="card-text">Autore: {{ $post->author }}</p>
                        <a href="{{ route('guests.post.show', $post->id) }}" class="btn btn-primary">Visualizza</a>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
        </div>
    </div>
@endsection('content')