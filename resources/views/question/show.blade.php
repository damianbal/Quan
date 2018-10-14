@extends('layouts.master')

@section('content')
@can('delete', $question)
<section class="mb-3">
    <h3 class="text-muted mb-3">Manage Question</h3>
    <form method="POST" action="{{ route('question.delete', $question->id) }}">
        @method('DELETE')
        @csrf
        <button class="btn btn-outline-danger">Delete Question</button>
    </form>
</section>
@endcan

<section class="mb-3">
<h3>{{ $question->title }}</h3>
<div class="text-muted">Asked by @include('partials.user_link', ['user' => $question->user]) {{ $question->created_at->diffForHumans() }}</div>
</section>

<section class="mb-3 mt-3 text-muted p-2">
    {{ $question->body }}
</section>

<section class="p-2">
    @if($question->answers->count() > 0)
        <h4>Answers ({{ $question->answers->count() }})</h4>

        @foreach($question->answers as $answer)
            @include('question.partials.answer', ['answer' => $answer])
        @endforeach
    @else 
        <div class="bg-light text-muted p-3 rounded shadow-sm">There is no answers to that question, be first to answer it!</div>
    @endif
</section>

@auth
@include('question.partials.answer_create', ['question' => $question])
@endauth
@endsection