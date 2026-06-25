<button {{ $attributes->merge(['type' => 'submit', 'class' => 'theme-btn inline-flex items-center rounded-md px-4 py-2 text-xs font-semibold uppercase tracking-widest transition ease-in-out duration-150 focus:outline-none focus:ring-2']) }}>
    {{ $slot }}
</button>
