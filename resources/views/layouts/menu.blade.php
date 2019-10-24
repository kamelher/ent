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

