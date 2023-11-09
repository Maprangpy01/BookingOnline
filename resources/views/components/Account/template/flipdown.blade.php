<div id="{{ $id }}" class="flipdown"></div>

<link rel="stylesheet" href="{{ asset('flipdown/flipdown.min.css') }}">
<script src="{{ asset('flipdown/flipdown.min.js') }}"></script>

<script>
    var time = 5400;
    var date = (new Date().getTime() / 1000) + (time) + 1;
    new FlipDown(date, "{{ $id }}").start();
</script>
