<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Adress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adress', 'Adress:') !!}
    {!! Form::text('adress', null, ['class' => 'form-control','minlength' => 3]) !!}
</div>

<!-- Commune Field -->
<div class="form-group col-sm-6">
    {!! Form::label('commune', 'Commune:') !!}
    {!! Form::text('commune', null, ['class' => 'form-control']) !!}
</div>

<!-- Daira Field -->
<div class="form-group col-sm-6">
    {!! Form::label('daira', 'Daira:') !!}
    {!! Form::text('daira', null, ['class' => 'form-control']) !!}
</div>

<!-- Wilaya Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wilaya', 'Wilaya:') !!}
    {!! Form::text('wilaya', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('adresses.index') !!}" class="btn btn-default">Cancel</a>
</div>
