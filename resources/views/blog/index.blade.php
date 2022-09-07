@extends('layouts.main')
@section('title',"PortfolioBlog | Blog")
@section('content')
    @if (Session::has('success'))
        <p class="btn-info align-content-center">{{ Session::get('success') }}</p>
    @endif
    <div class="row mx-2">
        <div class="h-20 w-20 col-6">
            <img class="rounded img-responsive img-rounded w-100" src="{{ asset('images/personal_1.jpg') }}" alt="Madhop Pur Lack" title="Madhopur Lake, Clicked By: Al Mehdi Saadat Sir."/>
        </div>
        <div class="h-20 w-20 col-6">
            <img class="rounded img-responsive img-rounded w-100 " src="{{ asset('images/personal_2.jpg') }}" alt="Madhop Pur Lack" title="Madhopur Lake, Clicked By: Al Mehdi Saadat Sir."/>
        </div>
    </div>
    <div class="row" style="overflow: auto;">
       @foreach ($blogs as $blog )
        <div class="col-6">
            <p>{{ $blog->title }}</p>
            <p>Created By: {{ $blog->user->name }}</p>
            <p>Posted At: {{ $blog->created_at->diffForHumans() }}</p>
        </div>
        <div class="col-6">
            <p>{{ $blog->body }}</p>
        </div>
       @endforeach
    </div>
@endsection
