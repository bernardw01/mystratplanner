@extends('layouts.app')

@section('content')

    @if (Gate::forUser(Auth::user())->allows('access-user'))
        <fieldset>
            <legend>
                <i class="fa fa-tachometer hdrIcon"></i>
                <span>My Dashboard</span>
            </legend>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#goals"><i class="fa fa-comments " aria-hidden="true"></i>
                        Goals</a></li>
                <li><a data-toggle="tab" href="#reviews"><i class="fa fa-user-circle " aria-hidden="true"></i>
                        Reviews</a></li>
                <li><a data-toggle="tab" href="#comments"><i class="fa fa-comments " aria-hidden="true"></i>
                        Comments</a></li>
            </ul>

            <div class="tab-content">
                <div id="goals" class="tab-pane fade in active">
                    <div class="navLinks"><a href="/goals/create/{{Auth::user()->id}}"><i class="fa fa-plus hdrIcon" aria-hidden="true"></i>Add
                            New Goal</a></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>ID#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Due Date</th>
                                <th>Last Updated</th>
                                <th>Last User</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($goals as $goal)
                                <tr>
                                    <td><a href="/goals/{{$goal->id}}/edit"><i class="fa fa-edit"
                                                                               aria-hidden="true"></i></a></td>
                                    <td><a href="/goals/{{$goal->id}}/delete"><i class="fa fa-trash-o"
                                                                                 aria-hidden="true"></i></a></td>
                                    <td>{{$goal->id}}</td>
                                    <td>{{$goal->goal_title}}</td>
                                    <td>{{$goal->goal_status}}</td>
                                    <td>{{$goal->due_date}}</td>
                                    <td>{{$goal->updated_at}}</td>
                                    <td>{{$goal->last_user}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="reviews" class="tab-pane fade">
                    <div class="navLinks"><a href="/reviews/create/{{Auth::user()->id}}"><i class="fa fa-plus hdrIcon"
                                                                       aria-hidden="true"></i>Add New Review</a></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>ID#</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Rating</th>
                                <th>Review Type</th>
                                <th>Review Status</th>
                                <th>Last Update</th>
                                <th>Last User</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reviews as $review)
                                <tr>
                                    <td><a href="/reviews/{{$review->id}}/edit"><i class="fa fa-edit"
                                                                                   aria-hidden="true"></i></a></td>
                                    <td><a href="/reviews/{{$review->id}}/delete"><i class="fa fa-trash-o"
                                                                                     aria-hidden="true"></i></a></td>
                                    <td>{{$review->id}}</td>
                                    <td>{{$review->review_period_start}}</td>
                                    <td>{{$review->review_period_end}}</td>
                                    <td>{{$review->rating}}</td>
                                    <td>{{$review->review_type}}</td>
                                    <td>{{$review->review_status}}</td>
                                    <td>{{$review->updated_at}}</td>
                                    <td>{{$review->last_user}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="comments" class="tab-pane fade">
                    <div class="navLinks">
                        <a href="/comments/create/{{Auth::user()->id}}">
                            <i class="fa fa-plus hdrIcon" aria-hidden="true"></i>Add New Comment</a>
                    </div>
                @foreach($comments as $comment)
                    <!-- Right-aligned -->
                        <div class="media commentMediaObject">
                            <div class="media-left">
                                <a href="/comments/{{$comment->id}}/edit"><i class="fa fa-edit"
                                                                             aria-hidden="true"></i></a>
                                <a href="/comments/{{$comment->id}}/delete"><i class="fa fa-trash-o"
                                                                               faria-hidden="true"></i></a>
                            </div>
                            <div class="media-body">
                                <span class="media-heading">{{$comment->created_at}}</span>
                                <span class="userHeading">by {{$comment->last_user}}</span>
                                <p class="commentBody">{{$comment->comment_text}}</p>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>

        </fieldset>
    @else
        <h3>You have not been set up for this application. Please contact your system administrator for access.</h3>
        <section>
            Provide your username and email address.
        </section>
    @endif
@endsection
