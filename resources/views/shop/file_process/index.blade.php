@extends('shop.layouts.simple')

@section('title','@Page::Home')

@section('links')

@stop

@section('content')
    <form action="" enctype="multipart/form-data" method="post">
        @csrf
        <label for="email">
            <input name="email" type="text" id="email" placeholder="This is email">
        </label><br>

        <label for="is_file">
            <input name="my_file" type="file" id="is_file" placeholder="This is email">
        </label><br>
        <button type="submit">Upfile Submit</button>
    </form>
@stop



@section('scripts')

@stop