@extends('layouts.app')

@section('content')
    <fieldset>
        <legend><i class="fa fa-tasks hdrIcon"></i>Edit Comments</legend>

        <form method="post" action="/comments" class="form-horizontal">
            <input type="hidden" value="{{Auth::user()->email}}" id="last_user" name="last_user">
            {{csrf_field()}}
            <span class="userHeading col-md-offset-2">On {{$comment->created_at}} {{$comment->last_user}} wrote </span>
            <div class="form-group">
                <label class="control-label col-sm-2" for="comment_text">Comment Text:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="comment_text"
                              name="comment_text">{{$comment->comment_text}}</textarea>
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
