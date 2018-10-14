<article class="bg-light p-3 rounded shadow-sm mb-3">
    <div class="row">
    <div class="col-sm-6"><a href="{{ route('question.show', $q->id) }}"><h5>{{ $q->title ?? 'Question Title' }}</h5></a></div>
        <div class="col-sm-6 text-sm-right"><a href="#">{{ $q->category->title }}</a></div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-muted small">
            Created by @include('partials.user_link', ['user' => $q->user]) {{ $q->created_at->diffForHumans() ?? '???' }} | Answers: {{ $q->answers->count() }}
        </div>
    </div>
</article>