@extends('layouts.main')


@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>

            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{
                    $post->author->name}}</a> in
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{
                    $post->category->name}}</a>
            </p>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid">

            {{-- fungsi {!! !!} tidak menjalankan fungsi HtmlSpecialChars --}}
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>

            <a href="/posts" class="text-decoration-none">Back to Post</a>
        </div>
    </div>
</div>

<article>

</article>


@endsection
