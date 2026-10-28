@props([
    'label' => '',
    'props' => '',
    'bgcolor' => 'bg-orange-400'
])

<button type="submit" {{ $attributes->merge([
    'class' => "$props $bgcolor border-2 border-black px-3 py-1 shadow-brutal
    transition-all hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-brutal-sm
    active:translate-x-1 active:translate-y-1 active:shadow-none cursor-pointer",
]) }}>
    {{ $label }}
</button>