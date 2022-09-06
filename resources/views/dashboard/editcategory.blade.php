@extends('template.template')

@section('main')
    <form action="/category/{{ $data->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="category">Category</label> <input type="text" name="category" value="{{ $data->nama_category }}">
        @error('category')
            <small style="color: red;">
                {{$message}}
            </small>
        @enderror
        <button class="btn" type="submit">Submit</button>
    </form>
@endsection