<fieldset>
    <legend>
        <i class="fa fa-cogs hdrIcon"></i>
        <span>User Action Menu</span>
    </legend>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#goals"><i class="fa fa-tasks " aria-hidden="true"></i>
                Goals</a></li>
        <li><a data-toggle="tab" href="#reviews"><i class="fa fa-user-circle " aria-hidden="true"></i>
                Reviews</a></li>
        <li><a data-toggle="tab" href="#comments"><i class="fa fa-comments " aria-hidden="true"></i>
                Comments</a></li>
    </ul>

    <div class="tab-content">
        <div id="goals" class="tab-pane fade in active">
            <div class="navLinks"><a href="/goals/create/{{$user->id}}"><i class="fa fa-plus hdrIcon" aria-hidden="true"></i>Add
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
                        <th>User ID</th>

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
                            <td>{{$goal->user_id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="reviews" class="tab-pane fade">
            <div class="navLinks"><a href="/reviews/create/{{$user->id}}"><i class="fa fa-plus hdrIcon"
                                                               aria-hidden="true"></i>Add New Review</a>
            </div>
        @foreach($reviews as $review)
            <!-- Right-aligned -->
                <div class="media commentMediaObject">
                    <div class="media-left rightBoarder">
                        <a href="/comments/{{$review->id}}/edit"><i class="fa fa-edit"
                                                                    aria-hidden="true"></i></a>
                        <a href="/comments/{{$review->id}}/delete"><i class="fa fa-trash-o"
                                                                      aria-hidden="true"></i></a>
                    </div>
                    <div class="media-body">
                        <span class="media-heading">{{$review->review_period_end}}</span>
                        <span class="userHeading">by {{$review->last_user}}</span>
                        <p class="commentBody">Rating: {{$review->rating}} - Type: {{$review->review_type}} -
                            Status: {{$review->review_status}} </p>
                    </div>

                </div>
            @endforeach

        </div>

        <div id="comments" class="tab-pane fade">
            <div class="navLinks">
                <a href="/comments/create/{{$user->id}}">
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

