@extends('layouts.main')
@section('title',"PortfolioBlog | Blog")
@section('content')
    @if (Session::has('success'))
        <div class="row text-center">
            <div class="col-4"></div>
            <div  x-data="{show: true }" x-show="show" x-init="setTimeout(()=> show = false, 3000)"  class="col-4 alert alert-success alert-dismissible">
                    <p class="btn-info">{{ Session::get('success') }}</p>
            </div>
            <div class="col-4"></div>
        </div>
    @endif
    <div class="row text-center h-auto">
       @foreach ($blogs as $blog )
        <div class="col-8 bg-info m-auto rounded mt-2 mb-4">
            <h2 class="mt-2" style="">{{ $blog->title }}</h2>
            <p>Created By: {{ $blog->user->name }} | Posted At: {{ $blog->created_at->diffForHumans() }}</p>
            <hr>
            <p>{!! $blog->body !!}</p>
            <hr>
           @if(auth::user()->user_type == 'admin')
               <div class="float-left">
                 <a class="btn btn-primary mb-2 center-block" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
                <form method="POST" action="{{ route('blog.destroy',$blog->id) }}">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger center-block mb-1" type="submit"  value="Delete"/>
                </form>
           </div>
           @endif
        </div>
       @endforeach
    </div>
@endsection
