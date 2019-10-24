@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Researchproject
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($researchproject, ['route' => ['researchprojects.update', $researchproject->id], 'method' => 'patch']) !!}
                       <div class="col">
                          <div class="row">
                        @include('researchprojects.fields')
                          </div>
                     </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
