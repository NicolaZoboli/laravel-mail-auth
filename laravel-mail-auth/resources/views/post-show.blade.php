@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post -> title }}</div>

                <div class="card-body">

                  {{ $post -> body }}
                  <ul>
                    LIKE: {{ $post -> like}}<br>
                    DISLIKE: {{ $post -> dislike}}<br>
                    TAG: {{ $post -> tag}}<br>
                  </ul>

                  @auth

                    <a class="btn btn-secondary"
                       href="{{ route('post.create') }}">
                          CREATE NEW POST
                    </a>

                    <a class="btn btn-primary"
                       href="{{ route('post.edit', $post -> id) }}">
                          EDIT
                    </a>

                    <a class="btn btn-danger"
                       href="{{ route('post.delete', $post -> id) }}">
                          DELETE
                    </a>


                  @else
                    <a class="btn btn-primary"
                       href="{{ route('login') }}">
                        LOGIN
                    </a>
                  @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
