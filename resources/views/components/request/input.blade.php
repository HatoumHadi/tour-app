<div class="form-group">
    <input {{ $attributes->class(['form-control', 'border-danger border-2 border' => !!$errorMessage])->merge(['type' => 'text']) }} />
    <x-request.error-hint :message="$errorMessage" />
</div>
