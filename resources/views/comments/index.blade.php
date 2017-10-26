@extends('layouts.app')

@section('content')
    @if (Gate::forUser(Auth::user())->allows('access-user'))
        <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-users"></i>  All Goals</div>

            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> </th>
                            <th>ID#</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Due Date</th>
                            <th>User ID</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($goals as $goal)
                            <tr>
                                <td><a href="/goals/{{$goal->id}}/edit"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                <td>{{$goal->id}}</td>
                                <td>{{$goal->goal_title}}</td>
                                <td>{{$goal->goal_status}}</td>
                                <td>{{$goal->due_date}}</td>
                                <td>{{$goal->user_id}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection