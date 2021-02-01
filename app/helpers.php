<?php
use Carbon\Carbon;

function youtubeID($url) {
    $url_r = explode('/', $url);
    return array_pop($url_r);
}

function youtubeThumbnail($url) {
    $youtube_id = youtubeID($url);
    return 'https://img.youtube.com/vi/' . $youtube_id . '/1.jpg';
}

function humanDateDiff($datetime) {
    return Carbon::parse($datetime)->diffForHumans();
}
