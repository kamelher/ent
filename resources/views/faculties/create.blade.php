@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Faculty
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <div class="col-12">
                        {!! Form::open(['route' => 'faculties.store']) !!}

                        @include('faculties.fields')

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
