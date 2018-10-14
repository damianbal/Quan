<article class="row mb-3">
<div class="col-sm-2"><img class="img-fluid shadow rounded-circle" src="{{ $answer->user->avatar }}"></div>
<div class="col-sm-10">
<div class="text-muted">Answer by @include('partials.user_link', ['user' => $answer->user])  added {{ $answer->created_at->diffForHumans() }}</div>
    <div class="p-2">{{ $answer->body }}</div>
</div>
</article>