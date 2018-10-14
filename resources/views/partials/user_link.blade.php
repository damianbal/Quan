@if($user->admin)
<a href="{{ route('user.show', $user->id) }}" style="color:red;text-decoration:underline;">{{ $user->name }}</a>
@else
<a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a>
@endif