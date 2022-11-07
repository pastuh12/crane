@extends('layouts.layout')
@section('content')
    <main class="container">
        <div class="row mb-3">
            <div>
                <h2>
                    {{$service->title}}
                </h2>
            </div>
        </div>
        {{-- <div class="row">
            <div class="d-flex justify-content-start flex-wrap">
                @foreach ($images as $image)
                    <div class="mb-md-5 mx-3">
                        <img class="tech_img" src="{{URL::asset($image->path)}}" alt="service">
                    </div>
                @endforeach
            </div>
        </div> --}}
        <div class="row">
            <div class="d-flex flex-column">
                <div class="mb-md-5">
                    <h4>Описание</h4>
                </div>
                <div>
                    <p class="">{{$service->description}}</p>
                </div>
            </div>
        </div>
    </main>
@endsection
