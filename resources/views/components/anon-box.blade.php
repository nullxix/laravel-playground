{{-- 
    
    ANONYMOUS COMPONENT

--}}


@props(['style' => "border:2px dotted black;padding:10px; margin: 10px;"])

<div style="{{$style}}" {{ $attributes }}>
    {{ $slot }}
</div>