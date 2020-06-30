@extends('templates.master')

@section('main')
    @include('errors')
    <form action="{{ route('admin.create') }}" method="POST">
        <input type="text" placeholder="Title..." class="form-control" name="title" id="title">
        <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Content..."></textarea>
        {{csrf_field()}}
        <button type="submit" class="btn btn-success my-4 w-100">Save</button>
    </form>
@endsection