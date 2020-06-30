@extends('templates.master')

@section('main')
    @include('errors')
    <form action="{{ route('admin.update') }}" method="POST">
        <input type="hidden" name="id" value="{{ $itemId}}">
        <input type="text" placeholder="Title..." class="form-control" name="title" id="title" value="{{$item['title']}}">
        <input type="text" placeholder="Content..." class="form-control" name="content" id="content" value="{{$item['content']}}">
{{csrf_field()}}
        <button type="submit" class="btn btn-success my-4 w-100">Update</button>
    </form>
@endsection