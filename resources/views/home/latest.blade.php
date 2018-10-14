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