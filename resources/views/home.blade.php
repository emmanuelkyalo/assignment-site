@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('My Notifications') }}</div>

                <div class="card-body">
                    @forelse($notifications as $notification)
                      @if($notification->read_status==0)
                        <div class="alert alert-info"> <a href="/open-notification/{{ $notification->assignment_id }}/{{ $notification->description }}"><span class="bg-danger" style="color:white">NEW</span> {{ $notification->description }}</a></div>

                        @else
                        <div class="alert alert-success"> <a href="/open-notification/{{ $notification->assignment_id }}/{{ $notification->description }}">{{ $notification->description }}</a></div>
                    @endif


                    @empty

                    @endforelse
            </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
