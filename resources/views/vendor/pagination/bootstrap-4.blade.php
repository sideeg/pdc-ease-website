@if ($paginator->hasPages())
    <!-- Pagination-->
    <div class="row row-paginate mt-4">
        <div class="col-sm-12">
            <ul class="pagination justify-content-center">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span aria-hidden="true">&lsaquo;</span>
                    </li> --}}
                <li class="next disabled"  aria-disabled="true" >
                    <a href="javascript:void(0);" aria-hidden="true">
                        <i class="fas fa-caret-left"></i>
                    </a>
                </li>

                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                            <i class="fas fa-caret-left"></i>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                {{-- <li class="active" aria-current="page"><span>{{ $page }}</span></li> --}}
                                <li class="active" aria-current="page">
                                    <a href="#">{{ $page }}</a>
                                </li>

                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                {{-- <li class="next"><a href="#"><i class="fas fa-caret-left"></i></a></li> --}}
                {{-- <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li> --}}

                @if ($paginator->hasMorePages())
                    {{-- <li>
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                    </li> --}}
                    <li class="prev"><a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-caret-right"></i></a></li>

                @else
                    {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span aria-hidden="true">&rsaquo;</span>
                    </li> --}}
                    <li class="prev disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <a href="javascript:void(0);" aria-hidden="true">
                            <i class="fas fa-caret-right" aria-hidden="true"></i>
                        </a>
                    </li>

                @endif
                {{-- <li class="prev"><a href="#"><i class="fas fa-caret-right"></i></a></li> --}}
            </ul>
        </div>
    </div>
    <!-- Pagination end-->


@endif
