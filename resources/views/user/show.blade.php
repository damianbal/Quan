@extends('layouts.master')

@section('content')
<section class="mb-3">
    <div class="row mb-3">
    <div class="col-sm-2"><img class="img-fluid rounded-circle shadow" src="{{ $user->avatar }}"></div>

        <div class="col-sm">
            <h3>{{ $user->name }}</h3>
            @if($user->admin)
                <div style="color:red;">Administrator</div>
            @else 
                <div class="text-primary">User</div>
            @endif
            <div class="text-muted">Joined {{ $user->created_at->diffForHumans() }} | Answered {{ $user->answers->count() }} times | Asked {{ $user->questions->count() }} questions</div>

        </div>
    </div>
</section>

<section class="mb-3 mt-3 text-muted p-2">
    <div class="row">
        <div class="col-sm-6">
            <h4>Latest Answers</h4>

            @if($user->answers->count() < 1)
                This user did not answer to any of questions yet!
            @else 
               <div class="list-group">
                    @foreach($latestAnswers as $a)
                        <a href="#" class="list-group-item list-group-item-action">{{ $a->question->title }} ({{ $a->created_at->diffForHumans() }})</a>
                    @endforeach
            </div>
            @endif
        </div>

        <div class="col-sm-6">
            <h4>Latest Questions</h4>

            @if($user->questions->count() < 1)
                This user did not ask any questions yet!
            @else 
            <div class="list-group">
                    @foreach($latestQuestions as $q)
                        <a href="#" class="list-group-item list-group-item-action">{{ $q->title }} ({{ $q->created_at->diffForHumans() }})</a>
                    @endforeach
            </div>
            @endif
        </div>
    </div>
</section>
@endsection