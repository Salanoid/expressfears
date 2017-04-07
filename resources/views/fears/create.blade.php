@extends('main')    

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1 class="dancing-script"> Tell your story! </h1>
            <hr>
            {!! Form::open(['route' => 'fears.store', 'data-parsley-validate' => '']) !!}
                {{ Form::textarea('content', null, ['class' => 'form-control', 'required' => '']) }}
                
                <br>

                {{ Form::submit('Submit Fear', ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection