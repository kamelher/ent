<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastname', 'Lastname:') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    {!! Form::date('birthdate', null, ['class' => 'form-control','id'=>'birthdate']) !!}
</div>



<!-- Placeofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('placeOfbirth', 'Placeofbirth:') !!}
    {!! Form::text('placeOfbirth', null, ['class' => 'form-control']) !!}
</div>

<!-- Wilaya Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wilaya', 'Wilaya:') !!}
    {!! Form::text('wilaya', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Photo', 'Photo:') !!}
    {!! Form::text('Photo', null, ['class' => 'form-control']) !!}
</div>

<!-- Departement Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departement_id', 'Departement Id:') !!}
    {!! Form::select('departement_id', $departementItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
