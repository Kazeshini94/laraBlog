@extends('layouts.app')

@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header>

    <div class="offset-1 col-10">
        <!-- Page content-->
        <section class="container-fluid row g-2">
            <!-- Blog entries-->
            <!-- Nested row for non-featured blog posts-->
            <article class="col-9 row">
                <!-- Blog post-->
                @foreach($posts as $post)
                    <div class="col-md-6">
                        <div class="card mb-4 ">
                            <a href="#!"><img class="card-img-top"
                                              src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..."/></a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $post->created_at }}</div>
                                <h2 class="card-title h4">{{ $post->title }}</h2>
                                <p class="card-text">{{ $post->post_text }}</p>
                                <a class="btn btn-primary" href="{{ route('post.show', $post->id) }} ">Read more →</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </article>

            <aside class="col-3">
                <!-- Categories widget-->
                <section class="card mb-4">
                    <h4 class="card-header ">Categories</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled mb-0">
                                    @foreach($categories AS $category)
                                        <li>
                                            <a href="{{ route('home') }}?category_id={{ $category->id }}">{{$category->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </aside>
        </section>
    </div>
@endsection
