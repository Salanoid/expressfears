@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center fears">
            <h1 class="dancing-script">
                Express your fears in short stories.
            </h1>
            <br>
            <br>    
            <div class="fears fear card blue-grey">
                <div class="card-content white-text">
                    @foreach ($fears as $fear)
                        {{ $fear->content }}

                        <!-- View button
                            <a href="{{ route('fears.show', $fear->id) }}" class="btn btn-default btn-sm"> View </a>
                       -->
                       
                        <br>
                        <hr>
                        <br>
                    @endforeach
                    <div class="text-center">
                        {!! $fears->links(); !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection