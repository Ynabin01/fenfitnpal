@extends('layouts.master')

@section('content')
    @include('website.slider')
    @include('website.aboutone')
    @include('website.noticeboard')
    @include('website.eventsection')
    @include('website.gallerysection') 
    @include('website.videogallery') 
    @include('website.recentproject')
    @include('website.partner')
@endsection
