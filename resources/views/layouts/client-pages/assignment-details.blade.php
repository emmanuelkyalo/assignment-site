@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-7">
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
                        <div>
                            <p>Assignment Files:</p>
                            @forelse ($files as $file )<p><a href="/client-files/{{ $file->file_name  }}">{{ $file->file_name }}</a> Uploaded on {{ $file->created_at }}</p>
                            @empty
                            <p style="color:red">No assignment files found</p>
                            @endforelse

                            <p>Solution Files:</p>
                            @forelse ($solutions as $file )<p><a href="/solutions/{{ $file->file_name  }}">{{ $file->file_name }}</a> Uploaded on {{ $file->created_at }}</p>
                            @empty
                            <p style="color:red">No solution files found</p>
                            @endforelse

                        </div>
                    </div>

                </div>

                </div>
                <div class="col-md-5" >
                    <div class="card">
                        <div class="card-header">{{ __('Comment on this assignment') }}</div>
                        <div class="card-body">
                            <form action="{{ url('/post-new-comment') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">Write New Comment</label>
                                    <textarea class="form-control" rows="6" id="comment"
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
                            <div style="max-height:296px;overflow-y: scroll">
                            @foreach ($comments as $comment)
                                <div class="card mt-1">
                                    <div class="card-body">
                                        <h6 class="card-title"> {{ $comment->user->name }}</h6>
                                        <p class="card-text"> {{ $comment->comment }} </p>
                                        Posted on {{ $comment->created_at }}
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>



        </div>
        @if (Auth::user()->is_admin == 1)
        <div class="row">
            <div class="col-md-7 mt-1">
            <div class="card" >
                <div class="card-header">Payment</div>
                <div class="card-body">
                    <form action="{{ url('/record-payment') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">Transaction ID</label>
                            <input type="text" class="form-control" id="transaction_id" name="transaction_id" >
                          </div>
                          <div class="form-group">
                            <label for="email">Amount(Kshs)</label>
                            <input type="text" class="form-control" id="amount" name="amount" >
                          </div>
                          <div class="form-group">
                            <label for="email">Payment Mode</label>
                            <select type="text" class="form-control" id="payment_mode" name="payment_mode" >
                            <option value="Paypal">Paypal</option>
                            <option value="Western Union">Western Union</option>
                            <option value="Payoneer">Payoneer</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="email">Date of Payment</label>
                            <input type="text" class="form-control" id="payment_date" name="payment_date" >
                          </div>
                          <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <input name="ass_id" type="hidden" value="{{ $assignment->id }}">
                                    <button type="submit" class="btn btn-primary btn-sm">Record Payment</button>
                                </div>
                            </div>
                        </div>

                    </form>
                    <script>
                        instance = new dtsel.DTS('input[name="payment_date"]');
                        instance = new dtsel.DTS('input[name="completion_date"]');
                    </script>
                </div>
            </div>
            </div>
            <div class="col-md-5 mt-1">
            <div class="card ">
                <div class="card-header">Submit Solution</div>
                <div class="card-body">
                    <form action="{{ url('/submit-solution') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="comment">Attach Files for this assignment</label>

                            <div class="input-group control-group increment">
                                <input type="file" name="filename[]" class="form-control">
                                <br>
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="button"><i
                                            class="glyphicon glyphicon-plus"></i>Attach More Files</button>
                                </div>
                            </div>
                            <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="filename[]" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="button"><i
                                                class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <input name="ass_id" type="hidden" value="{{ $assignment->id }}">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit Solution</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">

                        $(".clone").hide();
                        $(document).ready(function() {
                            $(".btn-success").click(function() {
                                var html = $(".clone").html();
                                $(".increment").after(html);
                            });
                            $("body").on("click", ".btn-danger", function() {
                                $(this).parents(".control-group").remove();
                            });
                        });

                    </script>
                </div>
            </div>
        </div>
        </div>
        @endif
    </div>
@endsection
