<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between gap-6">
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span
                        class="min-w-7 w-7 max-w-7 min-h-7 h-7 max-h-7 flex items-center justify-center rounded-full hover:border hover:border-gray-800">
                        < </span>
                        @else
                            <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev"
                                class="min-w-7 w-7 max-w-7 min-h-7 h-7 max-h-7 flex items-center justify-center rounded-full hover:bg-gray-950 hover:text-gray-50">
                                < </button>
                @endif
            </span>

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span
                        class="min-w-7 w-7 max-w-7 min-h-7 h-7 max-h-7 flex items-center justify-center rounded-full bg-gray-800 text-sm text-gray-50 hover:bg-gray-950">{{ $element }}</span>
                @endif

                {{-- Array of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span
                                class="min-w-7 w-7 max-w-7 min-h-7 h-7 max-h-7 flex items-center justify-center rounded-full text-sm text-gray-50 bg-gray-950 outline outline-4 outline-gray-300">{{ $page }}</span>
                        @else
                            <a class="min-w-7 w-7 max-w-7 min-h-7 h-7 max-h-7 flex items-center justify-center rounded-full bg-gray-800 text-sm text-gray-50 hover:bg-gray-950"
                                href="{{ route('skills', ['page' => $page]) }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next"
                        class="min-w-7 w-7 max-w-7 min-h-7 h-7 max-h-7 flex items-center justify-center rounded-full hover:bg-gray-950 hover:text-gray-50">
                        >
                    </button>
                @else
                    <span
                        class="min-w-7 w-7 max-w-7 min-h-7 h-7 max-h-7 flex items-center justify-center rounded-full hover:border hover:border-gray-800">
                        >
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
