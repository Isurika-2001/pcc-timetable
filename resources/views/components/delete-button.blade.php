<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-red-500 mr-4 text-white px-4 py-2 inline-flex items-center border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-400 focus:bg-red-400 active:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
