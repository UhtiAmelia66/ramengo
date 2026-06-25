<button {{ $attributes->merge(['type' => 'button', 'class' => 'theme-outline inline-flex items-center rounded-md px-4 py-2 text-xs font-semibold uppercase tracking-widest shadow-sm transition ease-in-out duration-150 hover:bg-white/10 focus:outline-none focus:ring-2 disabled:opacity-25']) }}>
    {{ $slot }}
</button>
