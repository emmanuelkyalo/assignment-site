@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="font-size: 11px">
            <div class="card">
                <div class="card-header">{{ __('All My Assignments') }}</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-default table-striped">
                            <thead>
                                <tr>

                                  <th scope="col">Title</th>
                                  <th scope="col">Student Name</th>
                                  <th scope="col">Student Phone</th>
                                  <th scope="col">Student Email</th>
                                  <th scope="col">Subject Area</th>
                                  <th scope="col">Level</th>
                                  <th scope="col">Pages</th>

                                  <th scope="col">Date Posted</th>
                                  <th scope="col">Deadline</th>
                                  <th scope="col">Payment Status</th>
                                  <th scope="col">Completion Status</th>
                                </tr>
                              </thead>
                              <tbody>

                                    @foreach($assignments as $assignment)

                                    <tr>
                                    <td><a href="/assignments/{{ $assignment->id }}">{{ $assignment->title }}</a></td>
                                    <td>{{ $assignment->userName }}</td>
                                    <td>{{ $assignment->userPhone }}</td>
                                    <td>{{ $assignment->userEmail }}</td>
                                    <td>{{ $assignment->subject_area }}</td>
                                    <td>{{ $assignment->level }}</td>
                                    <td>{{ $assignment->pages }}</td>
                                    <td>{{ $assignment->created_at }}</td>
                                    <td>{{ $assignment->deadline }}</td>
                                    <td>
                                        @if( $assignment->paymentStatus ==0)
                                        <button type="button" class="btn btn-warning btn-sm">Pending</button>
                                        @else
                                        <button type="button" class="btn btn-success btn-sm">Completed</button>
                                    @endif
                                    </td>
                                    <td>@if( $assignment->completionStatus ==0)
                                        <button type="button" class="btn btn-warning btn-sm">Pending</button>
                                        @else
                                        <button type="button" class="btn btn-success btn-sm">Completed</button>
                                    @endif</td>
                                  </tr>
                                    @endforeach


                              </tbody>
                              <style>
                                  table td,tr{
                                      text-align: center;
                                  }
                              </style>
                          </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
