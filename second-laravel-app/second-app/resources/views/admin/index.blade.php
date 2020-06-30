@extends('templates.master')

@section('main')
    @include('message')
    <a href="{{ route('admin.create')}}">
        <input type="button" value="Add new" class="btn btn-success">
    </a>
    @foreach ($items as $item)
        <div class="card my-3">
            <div class="card-header">{{ $item['title'] }}</div>
            <div class="card-body">
                {{ $item['content'] }}
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.edit', ['id' => array_search($item, $items)]) }}">
                    <input type="button" value="Edit" class="btn btn-success">
                </a>
            </div>
        </div>
    @endforeach
@endsection