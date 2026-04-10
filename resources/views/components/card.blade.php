@props(['title', 'value', 'desc', 'iconColor' => 'bg-blue-500'])

<div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-sm text-gray-500 uppercase font-semibold tracking-wider">{{ $title }}</p>
            <h3 class="text-2xl font-bold text-slate-800 mt-1">{{ $value }}</h3>
            <p class="text-xs text-gray-400 mt-2">{{ $desc }}</p>
        </div>
    </div>
</div>