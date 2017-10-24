<fieldset>
    <legend >
        <span class="areaTitle"> <i class="fa fa-bars hdrIcon"></i>Main Menu</span>
    </legend>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <ul>
        @if (Gate::forUser(Auth::user())->allows('access-user'))
            <li><a href="/home">Home</a></li>
        @endif
        @if (Gate::forUser(Auth::user())->allows('access-user'))
            <li><a href="{{route('myprofile')}}">My Profile</a></li>
        @endif

        @if (Gate::forUser(Auth::user())->allows('access-mngr'))
            <li><a href="">My Team Dashboard</a></li>
        @endif
        @if (Gate::forUser(Auth::user())->allows('access-admin'))
            <li><a href="">Admin Panel</a></li>
            <li><a href="/users">Manage Users</a></li>
        @endif

        @if (Gate::forUser(Auth::user())->denies('access-user'))
            <li>You have view only access rights.</li>
        @endif
    </ul>
</fieldset>


