<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','minlength' => 3]) !!}
</div>

<!-- Startdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('startDate', 'Startdate:') !!}
    {!! Form::text('startDate', null, ['class' => 'form-control','id'=>'startDate']) !!}
</div>



<!-- Enddate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endDate', 'Enddate:') !!}
    {!! Form::date('endDate', null, ['class' => 'form-control','id'=>'endDate']) !!}
</div>



<!-- Organization Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organization', 'Organization:') !!}
    {!! Form::text('organization', null, ['class' => 'form-control','minlength' => 3]) !!}
</div>

<!-- Pfetitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pfeTitle', 'Pfetitle:') !!}
    {!! Form::text('pfeTitle', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('formations.index') !!}" class="btn btn-default">Cancel</a>
</div>
