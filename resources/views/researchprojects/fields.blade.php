<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Project code :') !!}
    {!! Form::text('title', null, ['class' => 'form-control','minlength' => 3]) !!}
</div>

<!-- Startdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('startDate', 'Starting date  :') !!}
    {!! Form::date('startDate', null, ['class' => 'form-control','id'=>'startDate']) !!}
</div>



<!-- Enddate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endDate', 'Finish date :') !!}
    {!! Form::date('endDate', null, ['class' => 'form-control','id'=>'endDate']) !!}
</div>



<!-- Abstract Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('abstract', 'Theme :') !!}
    {!! Form::textarea('abstract', null, ['class' => 'form-control','minlength' => 3]) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::select('role', ['Project President' => 'Project President', 'Member' => 'Member'], null, ['class' => 'form-control']) !!}
</div>

<!-- Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::text('path', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('researchprojects.index') !!}" class="btn btn-default">Cancel</a>
</div>
