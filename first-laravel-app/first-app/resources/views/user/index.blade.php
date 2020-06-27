@extends('templates.MASTER')

@section('content')
    <div class="row">
        @foreach ($items as $item)
            
        <div class="col-12 my-5">
            <div class="card text-center">
                <div class="card-header">
                    {{ $item['type'] }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item['title'] }}</h5>
                    <p class="card-text">{{ $item['description'] }}</p>
                </div>
                <div class="card-footer">
                    {{ $item['price'] }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection