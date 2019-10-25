@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Typeencarement
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($typeencarement, ['route' => ['typeencarements.update', $typeencarement->id], 'method' => 'patch']) !!}
                       <div class="col">
                          <div class="row">
                        @include('typeencarements.fields')
                          </div>
                     </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
