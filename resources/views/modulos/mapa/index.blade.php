@extends('layouts.app')
@section('content')
<script type="text/javascript" src="{{ asset('js/map.js') }}"></script>

<script type="text/javascript">
    $( document ).ready(function() {
        load_map();
    });    
</script>

<div id="map" class="map"></div>
@endsection