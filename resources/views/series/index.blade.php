<?php
$value = '';
?>

{{-- components/layout.blade.php --}}
<x-layout title="Séries">
    <ul>
      <a href="/series/criar">Criar uma série nova.</a>
        {{-- components/alerta.blade.php --}}
        <x-alerta :value="$value"/>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
