<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       <title>About</title>
    </head>
    <body>
    @section('Cars')

    <h1>Cars</h1>
    <ul>
            @foreach($cars as $car)
            <li>
            <a href ="{{route("single-car",["id"=>$car->id])}}" >
            {{$car->title}}
            
            </a>
            </li>
   
            @endforeach
        </ul>
     
    @endsection
    </body>
</html