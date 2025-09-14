<x-layout>
    <h2>this is about page</h2>
    @foreach($student as $s)
   <ul>
    <li>{{$s ['name']}}</li>
    <li>{{$s ['address']}}</li>
    <li>{{$s ['age']}}</li>
    
   </ul>
   @endforeach
</x-layout>