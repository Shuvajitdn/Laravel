<!DOCTYPE html>
<html>
<head>
    <title>Set Cookie Form</title>
</head>
<body>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <h2>Enter Your Information</h2>
    <form action="{{ url('/submit-form') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Phone:</label>
        <input type="text" name="phone" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
