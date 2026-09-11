@props(['variant' => 'primary'])

<a {{ $attributes->merge(['class' => $variant === 'primary' ? 'btn-primary' : 'btn-secondary']) }}>
    {{ $slot }}
</a>
