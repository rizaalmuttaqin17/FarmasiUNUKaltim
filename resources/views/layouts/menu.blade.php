<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('fakultas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('fakultas.index') }}"><i class="fas fa-building"></i><span>Fakultas</span></a>
</li>

<li class="side-menus {{ Request::is('programStudis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('programStudis.index') }}"><i class="fas fa-building"></i><span>Program Studis</span></a>
</li>

<li class="side-menus {{ Request::is('beritas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('beritas.index') }}"><i class="fas fa-building"></i><span>Beritas</span></a>
</li>

<li class="side-menus {{ Request::is('roles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-building"></i><span>Roles</span></a>
</li>

<li class="side-menus {{ Request::is('permissions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('permissions.index') }}"><i class="fas fa-building"></i><span>Permissions</span></a>
</li>

<li class="side-menus {{ Request::is('kategoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kategoris.index') }}"><i class="fas fa-building"></i><span>Kategoris</span></a>
</li>

