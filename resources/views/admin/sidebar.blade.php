<div class="side-bar">
    <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">

    <div class="page-links">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Stats</a></li>
            <li><a href="{{ route('admin.users') }}">Users</a></li>
            <li><a href="{{ route('admin.files') }}">Files</a></li>
            <li><a href="{{ route('admin.comments') }}">Comments</a></li>
        </ul>
    </div>
    <a href="{{ route('admin.logout') }}"><button class="logout-btn"><i
                class="fa-regular fa-right-from-bracket"></i>Logout</button></a>
</div>
