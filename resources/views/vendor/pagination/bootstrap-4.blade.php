@if ($paginator->hasPages())
    <nav class=''>
        <ul class="pagination m-auto">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link bg_mauve text_green" aria-hidden="true"><i class="fas fa-ban"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link text_green bg_mauve" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-chevron-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link bg_mauve">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item" aria-current="page"><span class="page-link text_green bg_mauve">{{ $page }}</span></li>
                        @else
                            <li class="page-item "><a class="page-link text_green bg_mauve" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link text_green bg_mauve" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-chevron-right"></i></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link bg_mauve text_green" aria-hidden="true"><i class="fas fa-ban"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
