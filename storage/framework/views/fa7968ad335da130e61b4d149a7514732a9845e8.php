<li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
    <a href="<?php echo route('users.index'); ?>"><i class="fa fa-users"></i><span>Users </span></a>
</li>

<li class="<?php echo e(Request::is('faculties*') ? 'active' : ''); ?>">
    <a href="<?php echo route('faculties.index'); ?>"><i class="fa fa-building"></i><span>Faculties</span></a>
</li>

<li class="<?php echo e(Request::is('departements*') ? 'active' : ''); ?>">
    <a href="<?php echo route('departements.index'); ?>"><i class="fa fa-edit"></i><span>Departements</span></a>
</li>







<li class="<?php echo e(Request::is('interstings*') ? 'active' : ''); ?>">
    <a href="<?php echo route('interstings.index'); ?>"><i class="fa fa-edit"></i><span>Interstings</span></a>
</li>



<li class="<?php echo e(Request::is('adresses*') ? 'active' : ''); ?>">
    <a href="<?php echo route('adresses.index'); ?>"><i class="fa fa-edit"></i><span>Adresses</span></a>
</li>




<li class="<?php echo e(Request::is('formations*') ? 'active' : ''); ?>">
    <a href="<?php echo route('formations.index'); ?>"><i class="fa fa-edit"></i><span>Formations</span></a>
</li>




<li class="<?php echo e(Request::is('researchprojects*') ? 'active' : ''); ?>">
    <a href="<?php echo route('researchprojects.index'); ?>"><i class="fa fa-edit"></i><span>Researchprojects</span></a>
</li>



<li class="<?php echo e(Request::is('posttypes*') ? 'active' : ''); ?>">
    <a href="<?php echo route('posttypes.index'); ?>"><i class="fa fa-edit"></i><span>Posttypes</span></a>
</li>








<li class="<?php echo e(Request::is('administrativetasks*') ? 'active' : ''); ?>">
    <a href="<?php echo route('administrativetasks.index'); ?>"><i class="fa fa-edit"></i><span>Administrativetasks</span></a>
</li>





<li class="<?php echo e(Request::is('typeencarements*') ? 'active' : ''); ?>">
    <a href="<?php echo route('typeencarements.index'); ?>"><i class="fa fa-edit"></i><span>Typeencarements</span></a>
</li>


<li class="<?php echo e(Request::is('students*') ? 'active' : ''); ?>">
    <a href="<?php echo route('students.index'); ?>"><i class="fa fa-edit"></i><span>Students</span></a>
</li>














<li class="<?php echo e(Request::is('tictypes*') ? 'active' : ''); ?>">
    <a href="<?php echo route('tictypes.index'); ?>"><i class="fa fa-edit"></i><span>Tictypes</span></a>
</li>


<li class="<?php echo e(Request::is('ticusages*') ? 'active' : ''); ?>">
    <a href="<?php echo route('ticusages.index'); ?>"><i class="fa fa-edit"></i><span>Ticusages</span></a>
</li>

<?php /**PATH /var/www/html/ent/resources/views/layouts/menu.blade.php ENDPATH**/ ?>