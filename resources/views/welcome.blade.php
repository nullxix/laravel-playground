@extends('layouts.main')

@section('content')
    <center>it can</center>

    <x-charli-box :iterations="10" class="alice" style="border: 2px solid black;" carl='7'>
        <x-anon-box class="charlie sheen" >
            @include('employee-month', ['name' => 'charlie'])
            @includeWhen(true, 'employee-month', ['name' => 'not david'])
        </x-anon-box>
        <x-slot name='footer'>
            content is up there
        </x-slot>
    </x-charli-box>
@endsection