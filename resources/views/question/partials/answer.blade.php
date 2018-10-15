<article class="row mb-3">
<div class="col-sm-2"><img class="img-fluid shadow rounded-circle" src="{{ $answer->user->avatar }}"></div>
<div class="col-sm-10">
<div class="text-muted">Answer by @include('partials.user_link', ['user' => $answer->user])  added {{ $answer->created_at->diffForHumans() }}</div>
    <div class="p-2">{{ $answer->body }}</div>
    <div class="p-2">
        @if(!$answer->voted(auth()->user()))
            @can('upvote', $answer)
            <form method="POST" action="{{ route('answer.upvote', $answer) }}">
                @csrf
                <button class="btn btn-dark btn-sm">Upvote +1</button>
            </form>
            @endcan
        @else 
        <div class="text-muted small">You upvoted that answer</div>
        @endif

        Upvotes <div class="badge badge-primary">{{ $answer->votes->count() }}</div>
    </div>
    @can('delete', $answer)
        <div class="p-2">
            <form method="POST" action="{{ route('answer.delete', $answer->id) }}">
                @method('DELETE')
                @csrf

                <button class="btn btn-sm btn-outline-danger">Remove</button>
            </form>
        </div>
    @endcan
</div>
</article>