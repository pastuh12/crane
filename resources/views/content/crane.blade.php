@extends('layouts.layout')
@section('content')
    <main class="container">
        <div class="row mb-3">
            <div>
                <h2>
                    {{$crane->mark . ' ' . $crane->model}}
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-start flex-wrap">
                @foreach ($images as $image)
                    <div class="mb-md-5 mx-3">
                        <img class="tech_img" src="{{URL::asset($image->path)}}" alt="crane">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="d-flex flex-column">
                <div class="mb-md-5">
                    <h4>Характеристики</h4>
                </div>
                <div>
                    <h5 class="">{{$crane->mark . " " . $crane->model}}</h5>
                    <p class="">{{$crane->description}}</p>
                    <ul class="">
                        <li class="">Тип крана: {{$crane->tipe}}</li>
                        <li class="">Грузовой момент: {{$crane->cargo_moment}}</li>
                        <li class="">Длина стрелы: {{$crane->min_boom_length . " - " . $crane->max_boom_length}}</li>
                    </ul>
                </div>

            </div>
        </div>
    </main>
@endsection
