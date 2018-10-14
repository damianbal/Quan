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
 
<div class="list-group list-group-flush">
    @foreach($categories as $cat)
<a href="{{ route('category.show', $cat->id) }}" class="list-group-item list-group-item-action">{{ $cat->title }} ({{ $cat->questions->count() }} questions)</a>
    @endforeach
</div>
   
</div>

<div class="card mb-3">
    <div class="card-header">Top users</div>
    <div class="list-group list-group-flush">
        @foreach($topUsers as $u)
    <a href="{{ route('user.show', $u->id) }}" class="list-group-item list-group-item-action">{{ $u->name }} ({{ $u->answers->count() }} answers)</a>
        @endforeach
    </div>
</div>


@endsection