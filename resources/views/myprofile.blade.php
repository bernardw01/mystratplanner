@extends('layouts.app')

@section('content')

    @if (Gate::forUser(Auth::user())->allows('access-user'))
        <div class="col-md-7">
            <form class="form-horizontal" method="POST" action="/users/{{$user->id}}">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <input type="hidden" id="id" name="id" value="{{$user->id}}">
                <input type="hidden" id="user_email" name="user_email" value="{{$user->email}}">


                <fieldset>
                    <!-- Form Name -->
                    <legend><i class="fa fa-address-card-o hdrIcon"></i>Edit My Profile</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="first_name">First Name</label>
                        <div class="col-md-10">
                            <input id="first_name" name="first_name" type="text" placeholder="Your First Name"
                                   value="{{$user->first_name}}" class="form-control input-lg" required="">
                            <span class="help-block">Enter your first name here.</span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="last_name">Last Name</label>
                        <div class="col-md-10">
                            <input id="last_name" name="last_name" type="text" placeholder="Your last name"
                                   value="{{$user->last_name}}" class="form-control input-lg" required="">
                            <span class="help-block">Enter your last name here</span>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="job_title">Job Title</label>
                        <div class="col-md-10">
                            <input id="job_title" name="job_title" type="text" placeholder="eg Project Manager"
                                   value="{{$user->job_title}}" class="form-control input-md">

                        </div>
                    </div>


                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="auth_level">Auth Level</label>
                        <div class="col-md-10">
                            <select id="auth_level" name="auth_level" class="form-control">
                                <option @if ($user->auth_level = 0)
                                        selected
                                        @endif
                                        value="3">Adminvalue="0">Guest
                                </option>
                                <option @if ($user->auth_level = 1)
                                        selected
                                        @endif
                                        value="3">Adminvalue="1">User
                                </option>
                                <option @if ($user->auth_level = 2)
                                        selected
                                        @endif
                                        value="3">Adminvalue="2">Manager
                                </option>
                                <option @if ($user->auth_level = 3)
                                        selected
                                        @endif
                                        value="3">Admin
                                </option>
                            </select>
                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submitBtn"></label>
                        <div class="col-md-8">
                            <button id="submitBtn" type="submit" name="submitBtn" class="btn btn-success">Save
                            </button>
                            <button id="editUserCancel" type="button" name="cancel" class="btn btn-danger">
                                Cancel
                            </button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
        <div class="col-md-5">
            @include('users.sidebar')
        </div>

    @endif

@endsection
