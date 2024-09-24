@extends('layouts.layout')

@push('head-scripts')
    <script>
        $(document).ready(() => {
            tutorials.init();
        })
    </script>
@endpush

@section('content')
<div>
    <div class="videoHeader">
        <h1>Learn Faster with our Video Tutorials</h1>
    </div>
    <div class="videoContainer">
        <div class="video">
            <iframe class='featuredVideo' width="100%" height="300px" src="https://www.youtube.com/embed/tenEhE8gESQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe class='featuredVideo' width="100%" height="300px" src="https://www.youtube.com/embed/e4BJHQq2vgg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe class='featuredVideo' width="100%" height="300px" src="https://www.youtube.com/embed/ocqQj5fnLis" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe class='featuredVideo' width="100%" height="300px" src="https://www.youtube.com/embed/eUP6hPNovtY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe class='featuredVideo' width="100%" height="300px" src="https://www.youtube.com/embed/ZCR4ptPIb4s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe class='featuredVideo' width="100%" height="300px" src="https://www.youtube.com/embed/N1cd97oAKns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection
