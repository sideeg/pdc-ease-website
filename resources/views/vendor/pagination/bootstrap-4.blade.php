@if ($paginator->hasPages())
    <nav>
        <ul class="pagination my-3">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled mx-2" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link pagination-link" aria-hidden="true">&#129120;</span>
                </li>
            @else
                <li class="mx-2 ">
                    <a class="page-link pagination-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&#129120;</a>
                </li>
            @endif

  

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="mx-2">
                    <a class="page-link pagination-link mx-2 " href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">	&#129122;</a>
                </li>
            @else
                <li class="disabled  mx-2" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link pagination-link" aria-hidden="true">	&#129122;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
