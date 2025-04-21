<form method="POST">
    @csrf
    Name:<input type="text" name="name" value ="{{ old('name') }}">
    @error('name')
    {{ $message }}
    @enderror
    <br> <br>
    Email:<input type="text" name="email" value="{{ old('email') }}">
    @error('email')
    {{ $message }}
    @enderror
    <br> <br>
    Password:<input type="password" name="password" value="{{ old('password') }}">
    @error('password')
    {{ $message }}
    @enderror
    <br> <br>
    <input type="submit" value="submit">
</form>