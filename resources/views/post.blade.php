@extends('layouts.main')


@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By. {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{
            $post->category->name }}</p></a>
    {{-- fungsi {!! !!} tidak menjalankan fungsi HtmlSpecialChars --}}
    <p>{!! $post->body !!}</p>
</article>

<a href="/blog" class="text-decoration-none">Back to Post</a>
@endsection
