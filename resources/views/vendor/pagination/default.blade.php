@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="item disabled"><span>&laquo;</span></span>
        @else
            <a class="item" href="{{ $paginator->previousPageUrl() }}" rel="prev"><span>&laquo;</span></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="item disabled"><span>{{ $element }}</span></span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="item active"><span>{{ $page }}</span></span>
                    @else
                        <a class="item" href="{{ $url }}"><span >{{ $page }}</span></a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="item" href="{{ $paginator->nextPageUrl() }}" rel="next"><span >&raquo;</span></a>
        @else
            <span class="item disabled"><span>&raquo;</span></span>
        @endif
    </div>
@endif
