@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('All My Assignments') }}</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-default table-striped">
                                <thead>
                                    <tr>

                                        <th scope="col">Title</th>
                                        <th scope="col">Deadline</th>
                                        <th scope="col">Payment Status</th>
                                        <th scope="col">Completion Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($assignments as $assignment)

                                        <tr>
                                            <td><a
                                                    href="/assignments/{{ $assignment->id }}">{{ $assignment->title }}</a>
                                            </td>
                                            <td>{{ $assignment->deadline }}</td>
                                            <td>
                                                @if ($assignment->paymentStatus == 0)
                                                    <button type="button" class="btn btn-warning btn-sm">Pending</button>
                                                @else
                                                    <button type="button" class="btn btn-success btn-sm">Completed</button>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($assignment->completionStatus == 0)
                                                    <button type="button" class="btn btn-warning btn-sm">Pending</button>
                                                @else
                                                    <button type="button" class="btn btn-success btn-sm">Completed</button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                                <style>
                                    table td,
                                    tr {
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
