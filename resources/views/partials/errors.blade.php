@if ($errors->any())
    <div class="alert alert-danger mt-2">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
    </div>
@endif
