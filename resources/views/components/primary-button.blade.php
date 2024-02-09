<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button bg-primary text-white w-full']) }}>
    {{ $slot }}
</button>
