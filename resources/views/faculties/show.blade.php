@extends('layouts.app')
@section('title')
    {{$faculty->name}} | Unic-Msila
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Faculty
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('faculties.show_fields')

                    <a href="{!! route('faculties.index') !!}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
