<div class="form-group">
    <select {{ $attributes->class(['form-control', 'border-danger border-2 border' => !!$errorMessage]) }}>
        {{ $slot }}
    </select>
    <x-request.error-hint :message="$errorMessage" />
</div>
