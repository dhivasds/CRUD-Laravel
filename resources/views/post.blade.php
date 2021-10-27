@extends('layouts.main')


@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By. Dhivas Dharma in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</p></a>
    {{-- fungsi {!! !!} tidak menjalankan fungsi HtmlSpecialChars --}}
    <p>{!! $post->body !!}</p>
</article>

<a href="/blog">Back to Post</a>
@endsection
