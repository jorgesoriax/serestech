@if ($paginator->hasPages())
    <nav id="paginate" role="navigation" aria-label="{{ __('Pagination Navigation') }}">
        
        <div id="elements">
            <div id="buttons">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <button aria-disabled="true" aria-label="{{ __('pagination.previous') }}" class="button--neutral-ow sq disabled" id="arrow-l">
                        <i aria-hidden="true" class='bx bx-chevron-left'></i>
                    </button>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="{{ __('pagination.previous') }}" id="arrow-l">
                        <button aria-disabled="true" aria-label="{{ __('pagination.previous') }}" class="button--neutral-ow sq">
                            <i class='bx bx-chevron-left'></i>
                        </button>
                    </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <a>
                            <button aria-disabled="true" class="button--neutral-ow sq">
                                {{ $element }}
                            </button>
                        </a>
                    @endif
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                            <a>
                                <button aria-current="page" class="button--neutral-ow sq selected">
                                    {{ $page }}
                                </button>
                            </a>
                            @else
                                <a href="{{ $url }}" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    <button aria-current="page" class="button--neutral-ow sq">
                                        {{ $page }}
                                    </button>
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="{{ __('pagination.next') }}" id="arrow-r">
                        <button aria-disabled="true" aria-label="{{ __('pagination.next') }}" class="button--neutral-ow sq">
                            <i class='bx bx-chevron-right' ></i>
                        </button>
                    </a>
                @else
                    <button aria-disabled="true" aria-label="{{ __('pagination.next') }}" class="button--neutral-ow sq disabled" id="arrow-l">
                        <i aria-hidden="true" class='bx bx-chevron-right' ></i>
                    </button>
                @endif
            </div>
        </div>
        <div id="description" class="p--description">
            <p class="">
                {!! __('Mostrando') !!}
                @if ($paginator->firstItem())
                    {{ $paginator->firstItem() }}
                    {!! __('-') !!}
                    {{ $paginator->lastItem() }}
                @else
                    {{ $paginator->count() }}
                @endif
                {!! __('de') !!}
                {{ $paginator->total() }}
                {!! __('productos') !!}
            </p>
        </div>
    </nav>
@endif
