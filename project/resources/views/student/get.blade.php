
<h1>get</h1>

<a href="/student/show/{{$s->name}}/{{$s->id}}/{{$s->cgpa}}"><h4>name: {{$s->name}} id: {{$s->id}}  cg: {{$s->cgpa}}</h4></a>
<a href="{{route('sshow',['id'=>$s->id,'name'=>$s->name,'cg'=>$s->cgpa])}}"><h4>name: {{$s->name}} id: {{$s->id}}  cg: {{$s->cgpa}}</h4></a>
@foreach($s->courses as $c)
<h4>course name: {{$c->course->name}} dept: {{$c->course->department->name}}</h4>
@endforeach
