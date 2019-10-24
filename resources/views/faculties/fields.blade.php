<!-- Name Field -->
<div class="row align-items-center">
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control','minlength' => 5]) !!}
    </div>

    <!-- Name Ar Field -->
    <div class="form-group col-sm-6 text-right" dir="rtl">
        {!! Form::label('name_ar', ' اسم الكلية بالعربي :') !!}
        {!! Form::text('name_ar', null, ['class' => 'form-control','minlength' => 5]) !!}
    </div>

    <!-- Name Ar Field -->
    <div class="form-group col-12">
        {!! Form::label('desription', 'Description De la faculté') !!}
        {!! Form::label('desription', ' التعريف بالكلية ', ['class'=>'pull-right']) !!}
        {!! Form::textarea('desription', null, ['class' => 'form-control', 'rows'=>'5']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('faculties.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>

