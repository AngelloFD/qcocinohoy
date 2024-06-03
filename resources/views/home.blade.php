@extends('layouts.app')
@section('content')
    @if (count($result_foods) > 0)
        @foreach ($result_foods as $result_food)
            <div class="card mb-3 mx-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $result_food->food_image }}" class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex">
                                <h5 class="card-title">{{ $result_food->food_name }}</h5>
                                <div class="container-fluid">
                                    <i class="bi bi-chat-dots-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <p class="card-text">{{ $result_food->food_description }}</p>
                            <p class="card-text"><small class="text-body-secondary">
                                    @foreach ($result_food->ingredients as $ingredient)
                                        {{ $ingredient->ing_name }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </small></p>
                            <button type="button" class="btn btn-corpa-primary">Ver más</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        {{-- Show home view --}}
    @endif
@endsection
