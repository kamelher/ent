<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::text('Title', null, ['class' => 'form-control','minlength' => 5]) !!}
</div>

<!-- Suppervisingyear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('suppervisingYear', 'Suppervisingyear:') !!}
    {!! Form::text('suppervisingYear', null, ['class' => 'form-control','minlength' => 4]) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control','minlength' => 4]) !!}
</div>

<!-- Firststudent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firststudent', 'Firststudent:') !!}
    {!! Form::text('firststudent', null, ['class' => 'form-control','minlength' => 3]) !!}
</div>

<!-- Secondstudent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('secondstudent', 'Secondstudent:') !!}
    {!! Form::text('secondstudent', null, ['class' => 'form-control']) !!}
</div>

<!-- Thirdstudent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thirdstudent', 'Thirdstudent:') !!}
    {!! Form::text('thirdstudent', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Typeencarement Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('typeencarement_id', 'Typeencarement Id:') !!}
    {!! Form::select('typeencarement_id', $typeencarementItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('students.index') !!}" class="btn btn-default">Cancel</a>
</div>
