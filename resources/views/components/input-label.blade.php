@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-bold text-[#D4AF37]']) }}>
    {{ $value ?? $slot }}
</label>
