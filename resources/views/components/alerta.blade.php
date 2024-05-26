@if (!empty($value))
    <div style="color: red">{{ $value }} - error</div>
@else
    <div style="color: green">success</div>
@endif
