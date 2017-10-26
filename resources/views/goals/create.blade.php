@extends('layouts.app')

@section('content')
    <fieldset>
        <legend><i class="fa fa-tasks hdrIcon"></i>Create New Goal</legend>

        <form method="post" action="/goals" class="form-horizontal">
            <input type="hidden" value="{{$id}}" id="user_id" name="user_id">
            {{csrf_field()}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="goal_title">Title:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="goal_title" placeholder="title" name="goal_title">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="due_date">Due Date:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="due_date" placeholder="title" name="due_date">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="goal_text">Description:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="goal_text" name="goal_text"></textarea>
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
