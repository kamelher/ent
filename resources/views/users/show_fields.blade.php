<!-- Firstname Field -->
<div class="form-group">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{!! $user->firstname !!}</p>
</div>

<!-- Lastname Field -->
<div class="form-group">
    {!! Form::label('lastname', 'Lastname:') !!}
    <p>{!! $user->lastname !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Birthdate Field -->
<div class="form-group">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    <p>{!! $user->birthdate !!}</p>
</div>

<!-- Placeofbirth Field -->
<div class="form-group">
    {!! Form::label('placeOfbirth', 'Placeofbirth:') !!}
    <p>{!! $user->placeOfbirth !!}</p>
</div>

<!-- Wilaya Field -->
<div class="form-group">
    {!! Form::label('wilaya', 'Wilaya:') !!}
    <p>{!! $user->wilaya !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{!! $user->phone !!}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('Photo', 'Photo:') !!}
    <p>{!! $user->Photo !!}</p>
</div>

<!-- Departement Id Field -->
<div class="form-group">
    {!! Form::label('departement_id', 'Departement Id:') !!}
    <p>{!! $user->Departement->name !!}</p>

</div>

<!-- Adress Field -->
<div class="form-group">
    {!! Form::label('departement_id', 'Departement Id:') !!}
    <p>{!! $user->Adress->adress !!}</p>

</div>
<!-- Interstings Id Field -->
<div class="form-group">
    <div class="card col-6">
        <h6 class="text-capitalize text-black-50 text-danger"> Domain de Recherche</h6>
        <ul>
            @foreach($user->interstings as $intersting)
                <li>{{$intersting->name}}</li>
            @endforeach
        </ul>
    </div>
</div>

<!-- Formation Id Field -->
<div class="form-group">
    <div class="card col-6">
        <h6 class="text-capitalize text-black-50 text-danger"> Formation</h6>
        <ul>
            @foreach($user->formations as $formation)
                <li>{{$formation->title}}</li>
            @endforeach
        </ul>
    </div>
</div>
<!-- Research Projects Id Field -->
<div class="form-group">
    <div class="card col-6">
        <h6 class="text-capitalize text-black-50 text-danger"> Research Projects</h6>
        <ul>
            @foreach($user->researchProjects as $researchProject)
                <li>{{$researchProject->title}}</li>
            @endforeach
        </ul>
    </div>
</div>
<!-- Encadrement Id Field -->
<div class="form-group">
    <div class="card col-6">
        <h6 class="text-capitalize text-black-50 text-danger"> Encadrement</h6>
        <ul>
            @foreach($user->supervising as $student)
                <li>{{$student->firststudent}}</li>
            @endforeach
        </ul>
    </div>
</div>
