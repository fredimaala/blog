@if ($paginator->hasPages())
    <nav>
        <ul class="pagination flex justify-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><span class="btn btn-sm btn-outline-secondary">&laquo; @lang('pagination.previous')</span></li>
            @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn btn-sm btn-outline-secondary" style="padding: 0.5rem 1rem;">&laquo; @lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn btn-sm btn-outline-secondary" style="padding: 0.5rem 1rem;">@lang('pagination.next') &raquo;</a></li>
            @else
            <li class="disabled" aria-disabled="true"><span class="btn btn-sm btn-outline-secondary" style="padding: 0.5rem 1rem;">@lang('pagination.next') &raquo;</span></li>
            @endif
        </ul>
    </nav>
@endif
