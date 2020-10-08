@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post edit:</div>

                <div class="card-body">
                  <form action="{{ route('post.update', $post -> id) }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                      <label for="title">TITLE: </label><br>
                      <input type="text" name="title" value="{{ $post -> title }}">
                    </div>
                    <div class="form-group">
                      <label for="body">BODY: </label><br>
                      <input type="text" name="body" value="{{ $post -> body }}">
                    </div>
                    <div class="form-group">
                      <label for="like">LIKE: </label><br>
                      <input type="number" name="like" value="{{ $post -> like }}">
                    </div>
                    <div class="form-group">
                      <label for="dislike">DISLIKE: </label><br>
                      <input type="number" name="dislike" value="{{ $post -> dislike }}">
                    </div>
                    <div class="form-group">
                      <label for="tag">TAG: </label><br>
                      <input type="text" name="tag" value="{{ $post -> tag }}">
                    </div>

                    <button class="btn btn-primary" type="submit">SAVE</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
