<!-- Postname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postname', 'Postname:') !!}
    {!! Form::text('postname', null, ['class' => 'form-control','minlength' => 3]) !!}
</div>

<!-- Postdescription Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postDescription', 'Postdescription:') !!}
    {!! Form::text('postDescription', null, ['class' => 'form-control','minlength' => 3]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('posttypes.index') !!}" class="btn btn-default">Cancel</a>
</div>
