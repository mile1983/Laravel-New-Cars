    @extends('layouts.master')
    @section('title')
    single-car
    @endsection
    @section('content')
   {{$car->title}}
   {{$car->producer}}
   {{$car->number_of_doors}}
   @endsection
