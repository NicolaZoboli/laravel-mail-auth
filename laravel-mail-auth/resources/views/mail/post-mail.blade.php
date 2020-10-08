@extends('mail.layouts.app')

@section('content')

  <h1>
    {{ $user -> name }}: {{ $action }}
  </h1>

  <h2>
    {{ $post -> title }}
  </h2>
  {{ $post -> body }}
  <ul>
    LIKE: {{ $post -> like}}<br>
    DISLIKE: {{ $post -> dislike}}<br>
    TAG: {{ $post -> tag}}<br>
  </ul>
@endsection
