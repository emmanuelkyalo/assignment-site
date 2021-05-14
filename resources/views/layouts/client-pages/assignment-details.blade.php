@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-7"  >
                <div class="card">
                    <div class="card-header"><a href="/client-dashboard">{{ __('All My Assignments') }}</a>/This
                        Assignment</div>


                    <div class="card-body">
                        <p>Title: <span style="color:#65AAD8">{{ $assignment->title }}</span></p>
                        <p>Pages: <span style="color:#65AAD8">{{ $assignment->pages }}</span></p>
                        <p>Level: <span style="color:#65AAD8">{{ $assignment->level }}</span></p>
                        <p>Instructions: <span style="color:#65AAD8">{{ $assignment->instructions }}</span></p>
                        <p>Referencing Style: <span style="color:#65AAD8">{{ $assignment->referencing }}</span></p>
                        <p>Number of References: <span style="color:#65AAD8">{{ $assignment->no_of_references }}</span>
                        </p>
                        <p>Subject Area: <span style="color:#65AAD8">{{ $assignment->subject_area }}</span></p>
                        <p>Payment Status: <span style="color:#65AAD8">
                                @if ($assignment->paymentStatus == 0)
                                    <button type="button" class="btn btn-warning btn-sm">Pending</button>
                                @else
                                    <button type="button" class="btn btn-success btn-sm">Completed</button>
                                @endif
                            </span></p>
                        <p>Completion Status: <span style="color:#65AAD8">
                                @if ($assignment->completionStatus == 0)
                                    <button type="button" class="btn btn-warning btn-sm">Pending</button>
                                @else
                                    <button type="button" class="btn btn-success btn-sm">Completed</button>
                                @endif
                            </span></p>
                        <p>Deadline: <span style="color:#65AAD8">{{ $assignment->deadline }}</span></p>
                        <p>Date Posted: <span style="color:#65AAD8">{{ $assignment->created_at }}</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('Comment on this assigment') }}</div>


                    <div class="card-body">
                        <form action="{{ url('/post-new-comment') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <textarea required class="form-control" rows="6" id="instructions"
                                    name="comment"></textarea>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <input name="ass_id" type="hidden" value="{{ $assignment->id }}">
                                        <button type="submit" class="btn btn-primary btn-sm">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @foreach ($comments as $comment )
                        <div class="card mt-1">

                            <div class="card-body">
                              <h6 class="card-title">By  {{ $comment->user->name }}</h6>
                              <p class="card-text"> {{ $comment->comment }} </p>
                             Posted on   {{ $comment->created_at }}
                            </div>
                          </div>


                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
