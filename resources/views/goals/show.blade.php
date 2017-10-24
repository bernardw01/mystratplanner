
@extends('layouts.app')

@section('content')
    <fieldset>
        <legend><i class="fa fa-tasks hdrIcon"></i>Edit Goal</legend>

        <form method="post" action="/goals/{{$goal->id}}" class="form-horizontal">
            <input type="hidden" value="{{$goal->user_id}}" id="user_id" name="user_id">
            <input type="hidden" value="{{Auth::user()->email}}" id="user_email" name="user_email">
            {{csrf_field()}}
            {{ method_field('post') }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="goal_title">Title:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="goal_title" placeholder="title" name="goal_title" value="{{$goal->goal_title}}">
                </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="goal_status">Status</label>
                <div class="col-md-8">
                    <select id="goal_status" name="goal_status" class="form-control">
                        <option @if ($goal->goal_status == "New")
                                selected
                                @endif
                                value="New">New
                        </option>
                        <option @if ($goal->goal_status == "In-Progress")
                                selected
                                @endif
                                value="In-Progress">In-Progress
                        </option>
                        <option @if ($goal->goal_status == "Completed")
                                selected
                                @endif
                                value="Completed">Completed
                        </option>
                        <option @if ($goal->goal_status == "")
                                selected
                                @endif
                                value="">Not Selected
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="due_date">Due Date:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="due_date" placeholder="title" name="due_date" value="{{$goal->due_date}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="goal_text">Description:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="goal_text" name="goal_text" >{{$goal->goal_text}}</textarea>
                </div>
            </div>
            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="submitBtn"></label>
                <div class="col-md-10">
                    <button id="submitBtn" type="submit" name="submitBtn" class="btn btn-success">Save</button>
                    <button id="cancelEditGoal" type="button" name="cancel" class="btn btn-danger">
                        Cancel
                    </button>
                </div>
            </div>
        </form>

    </fieldset>
@endsection
