@extends(env('THEME') . '.layouts.site')
@section('header')
    {!! $header !!}
@endsection
@section('navigation')
 {!! $navigation !!}
@endsection
@section('slider')
    {!! $sliders !!}
@endsection

@section('footer')
    {!! $footer !!}
@endsection