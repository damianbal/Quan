@extends('layouts.master')

@section('content')
<section class="mb-3">
    <h3>{{ $category->title }}</h3>
    <div class="text-muted"><b>{{ $questions->count() }}</b> questions asked in this category</div>
    <div class="text-muted"><b>{{ $answeredQuestionsCount }}</b> got answered</div>
</section>

<section>
    @foreach($questions as $q)
        @include('home.partials.question', ['q' => $q])
    @endforeach

    {{ $questions->links() }}
</section>
@endsection