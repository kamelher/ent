<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','minlength' => 3]) !!}
</div>

<!-- Ticdescription Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ticdescription', 'Ticdescription:') !!}
    {!! Form::textarea('ticdescription', null, ['class' => 'form-control','minlength' => 20]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tictypes.index') !!}" class="btn btn-default">Cancel</a>
</div>
