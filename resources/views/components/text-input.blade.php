@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-md border-amber-500/35 bg-black/50 text-[#F4EFEA] shadow-sm focus:border-[#D4AF37] focus:ring-[#D4AF37]']) }}>
