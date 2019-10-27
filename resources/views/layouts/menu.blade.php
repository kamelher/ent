<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Users </span></a>
</li>

<li class="{{ Request::is('faculties*') ? 'active' : '' }}">
    <a href="{!! route('faculties.index') !!}"><i class="fa fa-building"></i><span>Faculties</span></a>
</li>

<li class="{{ Request::is('departements*') ? 'active' : '' }}">
    <a href="{!! route('departements.index') !!}"><i class="fa fa-edit"></i><span>Departements</span></a>
</li>







<li class="{{ Request::is('interstings*') ? 'active' : '' }}">
    <a href="{!! route('interstings.index') !!}"><i class="fa fa-edit"></i><span>Interstings</span></a>
</li>



<li class="{{ Request::is('adresses*') ? 'active' : '' }}">
    <a href="{!! route('adresses.index') !!}"><i class="fa fa-edit"></i><span>Adresses</span></a>
</li>




<li class="{{ Request::is('formations*') ? 'active' : '' }}">
    <a href="{!! route('formations.index') !!}"><i class="fa fa-edit"></i><span>Formations</span></a>
</li>




<li class="{{ Request::is('researchprojects*') ? 'active' : '' }}">
    <a href="{!! route('researchprojects.index') !!}"><i class="fa fa-edit"></i><span>Researchprojects</span></a>
</li>



<li class="{{ Request::is('posttypes*') ? 'active' : '' }}">
    <a href="{!! route('posttypes.index') !!}"><i class="fa fa-edit"></i><span>Posttypes</span></a>
</li>








<li class="{{ Request::is('administrativetasks*') ? 'active' : '' }}">
    <a href="{!! route('administrativetasks.index') !!}"><i class="fa fa-edit"></i><span>Administrativetasks</span></a>
</li>





<li class="{{ Request::is('typeencarements*') ? 'active' : '' }}">
    <a href="{!! route('typeencarements.index') !!}"><i class="fa fa-edit"></i><span>Typeencarements</span></a>
</li>


<li class="{{ Request::is('students*') ? 'active' : '' }}">
    <a href="{!! route('students.index') !!}"><i class="fa fa-edit"></i><span>Students</span></a>
</li>



<li class="{{ Request::is('tictypes*') ? 'active' : '' }}">
    <a href="{!! route('tictypes.index') !!}"><i class="fa fa-edit"></i><span>Tictypes</span></a>
</li>

