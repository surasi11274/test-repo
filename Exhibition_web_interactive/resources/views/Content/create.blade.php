@extends('layouts.app')
@section('page')
<!-- content -->
<div class="container" style="margin-top:100px;">
    <form action="/createContentComplete" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Header</label>
            <input class="form-control" name="header" aria-describedby="emailHelp" placeholder="Header">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input class="form-control" name="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <input class="form-control" name="category" aria-describedby="emailHelp" placeholder="Category">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <input class="form-control" name="content" placeholder="Content">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Credit</label>
            <input class="form-control" name="credit" aria-describedby="emailHelp" placeholder="Credit">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" class="form-control-file" name="image">
        </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        <div class="mt-4">
            @if($errors->any())  
                <div>
                    <ul>
                    @foreach($errors  ->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif 
        </div>
 </div>
@endsection