@extends('layouts.app')

@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">{{ $post->title }}</h1>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container-fluid">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-12">
                <p class="card-text text-center"> {{ $post->post_text }} !!</p>
            </div>
        </div>
    </div>
@endsection
