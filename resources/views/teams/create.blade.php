@extends('layouts.app')

@section('content')
    <fieldset>
        <legend><i class="fa fa-tasks hdrIcon"></i>Create New Team</legend>

        <form method="post" action="/teams" class="form-horizontal">
            <input type="hidden" value="{{$id}}" id="user_id" name="user_id">
            <input type="hidden" value="{{Auth::user()->email}}" id="user_email" name="user_email">
            {{csrf_field()}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="Team Name">Team Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="team_name" placeholder="title" name="team_name">
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="review_type">Team Lead Name</label>
                <div class="col-md-8">
                    <select id="review_type" name="review_type" class="form-control">
                        <option value="1">Bernard Williams
                        </option>
                        <option value="2">Jessica Wrenn
                        </option>
                        <option value="3">Jess W
                        </option>
                        <option value="4">Bob McCoy
                        </option>
                    </select>
                </div>
            </div>


            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="submitBtn"></label>
                <div class="col-md-10">
                    <button id="submitBtn" type="submit" name="submitBtn" class="btn btn-success">Save</button>
                    <button id="cancelCreateReview" type="button" name="cancel" class="btn btn-danger">
                        Cancel
                    </button>
                </div>
            </div>
        </form>

    </fieldset>
@endsection
