<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Posttype Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('posttype_id', 'Posttype Id:') !!}
    {!! Form::select('posttype_id', $posttypeItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Startdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('startDate', 'Startdate:') !!}
    {!! Form::date('startDate', null, ['class' => 'form-control','id'=>'startDate']) !!}
</div>



<!-- Enddate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endDate', 'Enddate:') !!}
    {!! Form::date('endDate', null, ['class' => 'form-control','id'=>'endDate']) !!}
</div>



<!-- Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::text('path', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('administrativetasks.index') !!}" class="btn btn-default">Cancel</a>
</div>
