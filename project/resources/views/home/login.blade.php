<html>
    <h1>login page</h1>
    <form action="{{route('login.submit')}}" method='post'>
    {{@csrf_field()}} 
    name <br><input type="text" id="name" name="name" value="{{old('name')}}"><br>
    @error('name')
    <span>{{$message}}</span><br>
    @enderror
  password <br><input type="password" id="password" name="password"><br><br>
  @error('password')
    <span>{{$message}}</span><br>
    @enderror
  <input type="submit" value="Login">
</form>
</html>