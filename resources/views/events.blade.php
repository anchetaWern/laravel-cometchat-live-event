@extends('layouts.app')

@section('title')
<title>Events</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5">
            <h4 class="text-center">Events</h4>

            <div class="list-group">
                @foreach ($events as $event)
                <a href="/event/{{ $event->cometchat_group_id }}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex justify-content-between">
                        <div>
                            <img src="{{ youtubeThumbnail($event->youtube_url) }}" alt="{{ $event->title }}">
                        </div>
                        <div class="w-100 p-2">
                            <h5 class="mb-1">{{ $event->title }}</h5>

                            <p class="mb-1">
                            {{ $event->description }}
                            </p>
                        </div>

                        <div class="w-50 text-right">
                            <small>{{ humanDateDiff($event->created_at) }}</small>
                        </div>

                    </div>
                </a>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
