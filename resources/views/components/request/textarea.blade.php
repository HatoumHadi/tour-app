<div class="form-group">
    <textarea {{ $attributes->class(['form-control', 'border-danger border-2 border' => !!$errorMessage]) }}>{{ $value }}</textarea>
    <x-request.error-hint :message="$errorMessage" />
</div>
