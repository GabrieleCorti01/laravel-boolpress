@extends('layouts.app')

<div class="card-wrapper">

    @section('content')
        <div class="container-fluid row justify-content-center mt-5">

            

            <div class="col-6"> 
                <img src="{{ $post->image_url }}" alt="">
            </div>

            <div class="col-3">
                <h2>{{ $post->title }}</h2>
                <h3>{{ $post->author }}</h3>
                <p>{{ $post->post_content }}</p>
                <a href="{{ route('guests.index') }}" class="btn btn-primary">Torna alla HOME</a>
            </div>

        </div>
    @endsection
</div>