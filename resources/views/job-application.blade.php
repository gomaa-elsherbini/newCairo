@extends('layout')
@section('title', 'Job Application')

@section('content')
    @if(! session()->has('message'))
        <div class="job-application">
            <div class="main-container">
                <div class="title-center">
                    <span></span>
                    <h2>تقدم لهذه الوظيفة</h2>
                    <span></span>
                </div>


                <div class="form-job-application">
                    @include('job-application-form')
                </div>
            </div>
        </div>
    @endif
@endsection
