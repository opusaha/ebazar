<ul class="page_navigation">
    <li class="page-item {{ $orders->onFirstPage() ? 'disabled' : '' }}">
        <a class="page-link" href="{{ $orders->previousPageUrl() }}" tabindex="-1" aria-disabled="{{ $orders->onFirstPage() ? 'true' : 'false' }}">
            <span class="fas fa-angle-left"></span>
        </a>
    </li>
    @for ($i = 1; $i <= $orders->lastPage(); $i++)
        <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
            <a class="page-link" href="{{ $orders->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="page-item {{ $orders->currentPage() == $orders->lastPage() ? 'disabled' : '' }}">
        <a class="page-link" href="{{ $orders->nextPageUrl() }}">
            <span class="fas fa-angle-right"></span>
        </a>
    </li>
</ul>

{{-- <p class="mt20 pagination_page_count text-center">1 – 20 of 300+ properties found</p> --}}
