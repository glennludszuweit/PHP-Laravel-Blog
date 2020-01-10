@if ($paginator->hasPages())
    <div class="d-flex justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="clearfix disabled hidden" aria-disabled="true">
                <span class="btn btn-default float-left"></span>
            </div>
        @else
            <div class="clearfix">
                <a class="btn btn-primary float-left" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-arrow-left"></i></a>
            </div>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <div class="btn btn-outline-dark disabled" aria-disabled="true"><span>{{ $element }}</span></div>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <div class="btn btn-outline-dark active" aria-current="page"><span>{{ $page }}</span></div>
                    @else
                        <div class="btn btn-outline-dark "><a href="{{ $url }}">{{ $page }}</a></div>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-arrow-right"></i></a>
            </div>
        @else
            <div class="clearfix disabled" aria-disabled="true">
                <span class="btn btn-default float-right"></span>
            </div>
        @endif
    </div>
@endif
