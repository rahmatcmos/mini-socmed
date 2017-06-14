@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your notifications</div>

                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($notifications as $notif)
                        <li class="list-group-item">
                            {{ $notif->data['message'] }}
                            <span class="pull-right">{{ $notif->created_at->diffForHumans() }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
