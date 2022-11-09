@extends('layouts.template')

@section('title','Escritorio')

@section('css')
<style>
    body{
        background: url('{{ asset("img/background.jpg")   }}') no-repeat;
        background-size: cover;
    }
</style>
@stop

@section('content')
    @include('layouts.header')
<div class="row">
    @foreach($menu as $item)
    <div class="col-md-4">
        <a href="{{ route($item['route']) }}" style="text-decoration: none;">
            <div class="row item-box" style="background: {{ $item['color'] }};">
                <div class="col-md-4">
                    <img src="{{ asset('img/'.$item['img']) }}" alt="">
                </div>
                <div class="col-md-8">
                    <h3>{{ $item['title'] }}</h3>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $("#logout").click(function(){
            $("#logout-form").submit();
        })
    });
</script>
@stop
