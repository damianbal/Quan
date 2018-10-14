@extends('layouts.master')

@section('content')
<section class="mb-3">
    <h3>Sign In</h3>
    <div class="small text-muted">Sign in so you can help others or ask for help instead</div>
</section>
<form method="POST" action="/login">
    @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="Email..." class="form-control w-50" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password..." class="form-control w-50" required>
        </div>

        <div class="row">
            <div class="col-sm-3">
<button type="submit" class="btn btn-block btn-primary">Sign In</button>
            </div>
            <div class="col-sm small text-muted">
                Don't have an account? <a href="/sign-up">Sign Up</a> now!
            </div>
        </div>
        
    </form>
@endsection