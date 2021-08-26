@if ($paginator->hasPages())
    <div class="dataTables_paginate paging_full_numbers" id="kt_datatable_paginate">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="paginate_button page-item first disabled" id="kt_datatable_first">
                    <a href="#" aria-controls="kt_datatable" data-dt-idx="0" tabindex="0" class="page-link">
                        <i class="ki ki-double-arrow-back"></i>
                    </a>
                </li>
            @else
                <li class="paginate_button page-item previous" id="kt_datatable_previous">
                    <a href="{{ $paginator->previousPageUrl() }}" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">
                        <i class="ki ki-arrow-back"></i>
                    </a>
                </li>
            @endif
            
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="paginate_button page-item active">
                        <a href="#" aria-controls="kt_datatable" data-dt-idx="2" tabindex="0" class="page-link">{{ $element }}</a>
                    </li>
                @endif
                
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="paginate_button page-item next" id="kt_datatable_next">
                    <a href="{{ $paginator->nextPageUrl() }}" aria-controls="kt_datatable" data-dt-idx="7" tabindex="0" class="page-link">
                        <i class="ki ki-arrow-next"></i>
                    </a>
                </li>
            @else
                <li class="paginate_button page-item last disabled" id="kt_datatable_last">
                    <a href="#" aria-controls="kt_datatable" data-dt-idx="8" tabindex="0" class="page-link">
                        <i class="ki ki-double-arrow-next"></i>
                    </a>
                </li>
            @endif
        </ul>
    </div>
@endif
