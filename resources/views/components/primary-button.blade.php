<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2 px-4 text-center bg-emerald-500 rounded-md text-white text-sm hover:bg-emerald-600']) }}>
    {{ $slot }}
</button>
