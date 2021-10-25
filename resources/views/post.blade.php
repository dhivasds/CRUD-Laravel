@extends('layouts.main')


@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    {{-- fungsi {!! !!} tidak menjalankan fungsi HtmlSpecialChars --}}
    <p>{!! $post->body !!}</p>
</article>

<a href="/blog">Back to Post</a>
@endsection
