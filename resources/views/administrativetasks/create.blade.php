@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Administrativetask
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'administrativetasks.store']) !!}
                        <div class="col">
                          <div class="row">
                            @include('administrativetasks.fields')
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection