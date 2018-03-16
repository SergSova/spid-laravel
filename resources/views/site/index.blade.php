@extends('site.layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/index.css">
@endsection

@section('body')
    <canvas id="canvas"></canvas>
    <div class="texts-wrap">
        <div class="scroll-box">
            <div class="scroll-box-text hidden">
            {!! $model->title !!}
            </div>
            <div class="scroll-box-line"></div>
            <div class="scroll-box-text">{{$model->description}}</div>
        </div>
        <div class="no-aids">
            <div class="no-inside">
                <div>
                    {!! $model->longtitle !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/js/madam.js"></script>
@endsection