<html>
    <h1>reg page</h1>
    <form action="{{route('reg.submit')}}" method='post'>
    {{@csrf_field()}} 
    name <br><input type="text" id="name" name="name" value="{{old('name')}}"><br>
    @error('name')
    <span>{{$message}}</span><br>
    @enderror
  id <br><input type="text" id="id" name="id" value="{{old('name')}}"><br><br>
  @error('id')
    <span>{{$message}}</span><br>
    @enderror
  cgpa <br><input type="text" id="cgpa" name="cgpa" value="{{old('name')}}"><br><br>
  @error('cgpa')
    <span>{{$message}}</span><br>
    @enderror
    password <br><input type="password" id="password" name="password"><br><br>
  @error('password')
    <span>{{$message}}</span><br>
    @enderror
  <input type="submit" value="Login">
</form>
</html>