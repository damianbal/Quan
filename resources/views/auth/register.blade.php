@extends('layouts.master')

@section('content')
<section class="mb-3">
    <h3>Sign Up</h3>
    <div class="small text-muted">Sign up so you can help others or ask for help instead</div>
</section>
<form method="POST" action="/register">
    @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name..." class="form-control w-50" required>
        </div>
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
<button type="submit" class="btn btn-block btn-primary">Sign Up</button>
            </div>
            <div class="col-sm small text-muted">
                Do you have an account? <a href="/sign-in">Sign In</a> instead!
            </div>
        </div>
        
    </form>
@endsection