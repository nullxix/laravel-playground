
<div {{ $attributes->merge(['class' => " bob"]) }}>
    @for ($i = 0; $i < $iterations; $i++)
        <center id="box-{{$i}}"> {{ $slot }} </center>
    @endfor
    <center style="width: 100%">{{ $footer }} </center>
</div>