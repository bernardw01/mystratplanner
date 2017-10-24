@extends('layouts.app')

@section('content')
    <fieldset>
        <legend><i class="fa fa-tasks hdrIcon"></i>Create New Review</legend>

        <form method="post" action="/reviews" class="form-horizontal">
            <input type="hidden" value="{{Auth::user()->id}}" id="user_id" name="user_id">
            {{csrf_field()}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="review_period_start">Start Date:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="review_period_start" placeholder="title" name="review_period_start">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="review_period_end">End Date:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="review_period_end" placeholder="title" name="review_period_end">
                </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="review_status">Status</label>
                <div class="col-md-8">
                    <select id="review_status" name="review_status" class="form-control">
                        <option @if ($review->review_status == "New")
                                selected
                                @endif
                                value="New">New
                        </option>
                        <option @if ($review->review_status == "In-Progress")
                                selected
                                @endif
                                value="In-Progress">In-Progress
                        </option>
                        <option @if ($review->review_status == "Completed")
                                selected
                                @endif
                                value="Completed">Completed
                        </option>
                        <option @if ($review->review_status == "")
                                selected
                                @endif
                                value="">Not Selected
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="review_text">Review Text:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="review_text" name="review_text"></textarea>
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
