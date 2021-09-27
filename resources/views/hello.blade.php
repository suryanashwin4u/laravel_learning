<h1>calling hello.blade.php file as view</h1>

<!-- to include other view pages -->
@include('inner')

<!-- using javascript and php together to show data -->
<script>
    var data= @json($users);
    console.log(data);
    console.log(data[0]);
    console.warn(data);
</script>

<!-- using foreach -->
@foreach ($users as $user)
<h4>{{$user}}</h4>
@endforeach

