<section class="mt-3">
    <h3>Add Answer</h3>
    <form method="POST" action="{{ route('answer.store', $question->id) }}">
        @csrf
        <div class="from-group">
            {{-- <label>Answer</label> --}}
            <textarea name="body" minlength="10" class="form-control" placeholder="Put your answer here..." required></textarea>
        </div>
        <div class="mt-3">
            <button class="btn btn-outline-primary">Add Answer</button>
        </div>
    </form>
</section>