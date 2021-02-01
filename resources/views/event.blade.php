@extends('layouts.app')

@section('title')
<title>{{ $event->title }}</title>
@endsection

@section('page_scripts')
<link rel="stylesheet" href="{{ asset('css/event.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<script>
var cometchat_app_id = "{!! config('services.comet_chat.app_id') !!}";
var cometchat_region = "{!! config('services.comet_chat.region') !!}";
var cometchat_auth_key = "{!! config('services.comet_chat.api_key') !!}";
var cometchat_widget_id = "{!! config('services.comet_chat.widget_id') !!}";
var event_id = "{!! $event->cometchat_group_id !!}";
var user_id = "{!! $cometchat_user_id !!}";
</script>
<script defer src="https://widget-js.cometchat.io/v2/cometchatwidget.js"></script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
            <div class="pt-3">
                <i class="fas fa-arrow-left"></i>
                <a href="/events">View Events</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">

            <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{ youtubeID($event->youtube_url) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <div class="video-info-container">
                <div class="video-description">
                    <h4 class="text-left">{{ $event->title }}</h4>
                    <span class="date sub-text">{{ $event->created_at->format('M d, Y') }}</span>
                </div>

                <div class="video-actions sub-text">
                    <div class="action-item">
                        <i class="fas fa-thumbs-up"></i> 1000
                    </div>
                    <div class="action-item">
                        <i class="fas fa-thumbs-down"></i> 150
                    </div>
                    <div class="action-item">
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="action-item">
                        <i class="fas fa-save"></i> Save
                    </div>
                    <div class="action-item">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>

            <div class="subscription-container">
                <div class="account-container">
                    <div class="icon-container">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <div>
                        <div>
                            <strong>YouTube</strong>
                        </div>

                        <div>
                            <span class="small-text sub-text">200M subscribers</span>
                        </div>
                    </div>

                </div>
                <div class="subscribe-container">
                    <button class="btn btn-danger">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-5">

            <div id="comet-chat-widget"></div>
        </div>
    </div>
</div>
@endsection

@section('foot_scripts')
<script src="{{ asset('js/chat-widget.js') }}" defer></script>
@endsection
