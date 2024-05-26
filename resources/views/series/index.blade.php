<?php 
$value = 3;
?>

<x-layout title="Séries" >
    <ul>
        <x-alerta value={{$value}} />
        @foreach($series as $serie)
            <li>{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>
