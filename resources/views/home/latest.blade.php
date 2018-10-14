@extends('layouts.master')

@section('content')

    <h3 class="mb-3 text-muted">Latest questions</h3>

    <section>
    @foreach($questions as $question)
        @include('home.partials.question', ['q' => $question])
    @endforeach
    </section>

    {{ $questions->links() }}
@endsection

@section('side_content')

<div class="card mb-3 shadow-sm">
    <div class="card-header">Categories</div>
 
<ul class="list-group list-group-flush">
    @foreach($categories as $cat)
        <li class="list-group-item">{{ $cat->title }}</li>
    @endforeach
</ul>
   
</div>

<div class="card mb-3">
    <div class="card-header">Top users</div>
    <div class="card-body">

    </div>
</div>


@endsection