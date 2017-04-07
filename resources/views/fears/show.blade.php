@extends('main')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <p class="lead">  {{ $fear->content }} </p>
        </div>
    </div>
@endsection