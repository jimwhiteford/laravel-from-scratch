<div x-data="{ open: false }" @click.away="open = false">
    <button @click="open = ! open"
        class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left">{{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

    </button>

    <div x-show="open" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50" style="display:none">
        {{ $slot }}
    </div>
</div
