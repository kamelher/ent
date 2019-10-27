@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tictype
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tictype, ['route' => ['tictypes.update', $tictype->id], 'method' => 'patch']) !!}
                       <div class="col">
                          <div class="row">
                        @include('tictypes.fields')
                          </div>
                     </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
