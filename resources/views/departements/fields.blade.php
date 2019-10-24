<div class="row align-items-center">
    <!-- Name Field -->
    <div class="form-group offset-2 col-4">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control','minlength' => 3]) !!}
    </div>

    <!-- Name Ar Field -->
    <div class="form-group  col-4 text-right" dir="rtl">
        {!! Form::label('name_ar', 'الاسم بالعربي') !!}
        {!! Form::text('name_ar', null, ['class' => 'form-control','minlength' => 3]) !!}
    </div>

    <!-- Faculty Id Field -->
    <div class="form-group  offset-2  col-sm-8">
        {!! Form::label('faculty_id', 'Faculty:') !!}
        {!! Form::select('faculty_id', $facultyItems, null, ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group  offset-3 col-sm-6">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('departements.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>

