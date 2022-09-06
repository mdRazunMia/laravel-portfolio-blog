@extends('layouts.main')
@section('title',"PortfolioBlog | Home")
@section('content')
    <div class="row mx-2">
        <div class="h-20 w-20 col-6">
            <img class="rounded img-responsive img-rounded w-100" src="{{ asset('images/personal_1.jpg') }}" alt="Madhop Pur Lack" title="Madhopur Lake, Clicked By: Al Mehdi Saadat Sir."/>
        </div>
        <div class="h-20 w-20 col-6">
            <img class="rounded img-responsive img-rounded w-100 " src="{{ asset('images/personal_2.jpg') }}" alt="Madhop Pur Lack" title="Madhopur Lake, Clicked By: Al Mehdi Saadat Sir."/>
        </div>
    </div>
@endsection
