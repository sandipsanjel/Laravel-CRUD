<!DOCTYPE html>
<html>

<body>
    @for ($i=0; $i<=10; $i++) 
    <h2>
    {{$i}}
    </h2>
        @endfor
        {{'this is to print the numbers form 1-10'}}


        @php
        $array=[1,3,4,5];
        @endphp
        @foreach ($array as $v)
        <h1>{{$v}}</h1>

        @endforeach


        @for ($i=0; $i<=10;$i++) 
        @if($i==8) 
        {{$i}} {{--to comment--}}
        @continue 
         @endif 
         {{$i}}
         @endfor
         </body>

</html>