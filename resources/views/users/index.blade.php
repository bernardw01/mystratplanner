@extends('layouts.app')

@section('content')
    @if (Gate::forUser(Auth::user())->allows('access-user'))
 <fieldset>
     <legend><i class="fa fa-users hdrIcon"></i>All Users</legend>
     <div class="table-responsive">
         <table class="table">
             <thead>
             <tr>
                 <th> </th>
                 <th>ID#</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Title</th>
                 <th>Email</th>
                 <th>Auth Level</th>
             </tr>
             </thead>
             <tbody>
             @foreach($users as $user)
                 <tr>
                     <td><a href="/users/{{$user->id}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                     <td>{{$user->id}}</td>
                     <td>{{$user->first_name}}</td>
                     <td>{{$user->last_name}}</td>
                     <td>{{$user->job_title}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->auth_level}}</td>
                 </tr>
             @endforeach
             </tbody>
         </table>
     </div>
 </fieldset>


    @endif
@endsection
