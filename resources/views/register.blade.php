<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1>Register for the Event</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label>First Name:</label>
            <input type="text" name="firstname" value="{{ old('firstname') }}" required>
        </div>
        <div>
            <label>Last Name:</label>
            <input type="text" name="lastname" value="{{ old('lastname') }}" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>
