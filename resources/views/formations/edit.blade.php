@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Formation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($formation, ['route' => ['formations.update', $formation->id], 'method' => 'patch']) !!}
                       <div class="col">
                          <div class="row">
                        @include('formations.fields')
                          </div>
                     </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
