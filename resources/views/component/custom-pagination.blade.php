<div class="pagination">
    {{-- Tombol Previous --}}
    @if ($paginator->onFirstPage())
    <span class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
        <span aria-hidden="true">&lsaquo;</span>
    </span>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
    @endif

    {{-- Angka Pilihan (horizontal) --}}
    @if ($paginator->lastPage() > 1)
    <ul class="horizontal-pagination">
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li>
                <a href="{{ $paginator->url($i) }}" class="{{ $paginator->currentPage() == $i ? 'current' : '' }}">
                    {{ $i }}
                </a>
            </li>
            @endfor
    </ul>
    @endif

    {{-- Tombol Next --}}
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
    @else
    <span class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
        <span aria-hidden="true">&rsaquo;</span>
    </span>
    @endif
</div>