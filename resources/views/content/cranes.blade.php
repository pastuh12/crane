@extends('layouts.layout')
@section('content')
    <main class="mb-5">
        <div class="container" style="width: 100%">
            <div>
                <div>
                    <h3>Краны</h3>
                </div>
                <div>
                    <p>Описание</p>
                </div>
            </div>
            @foreach ($cranes as $crane)
                <div class="card" style="width: 18rem;">
                    <img src="./storage/crane/crane.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$crane->mark . " " . $crane->model}}</h5>
                        <p class="card-text">{{$crane->decription}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Тип крана: {{$crane->tipe}}</li>
                        <li class="list-group-item">Грузовой момент: {{$crane->cargo_moment}}</li>
                        <li class="list-group-item">Длина стрелы: {{$crane->min_boom_length . " - " . $crane->max_boom_length}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
