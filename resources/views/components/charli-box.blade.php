
<div {{ $attributes->merge(['class' => " bob"]) }}>
    @for ($i = 0; $i < $iterations; $i++)
        <center> {{ $slot }} </center>
    @endfor
    <center style="width: 100%">{{ $footer }} </center>
</div>