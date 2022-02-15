
<h1>get</h1>

<h4>name: {{$t->name}} id: {{$t->id}}  designation: {{$t->designation}}</h4>

@foreach($t->courses as $c)
<h4>course name: {{$c->course->name}} dept: {{$c->course->department->name}}</h4>
@endforeach
