@extends('layouts.master')

@section('content')
<section class="mb-3">
<h3>Ask</h3>
<div class="text-muted">You are going to ask question as <b>{{ auth()->user()->name }}</b></div>
</section>

<section class="mb-3 mt-3 text-muted p-2">
    <form method="POST" action="{{ route('question.store') }}">
        @csrf
        <div class="form-group">
            Title
            <input name="title" placeholder="How do you want to title it?" class="form-control" minlength="3" required></input>
        </div>

        <div class="form-group">
            Question
            <textarea name="body" placeholder="What do you want to ask?" class="form-control" minlength="10" required></textarea>
        </div>

        <div class="form-group">
            Category 
            <select class="form-control" name="category">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary shadow">Ask now!</button>
        </div>
    </form>
</section>
@endsection