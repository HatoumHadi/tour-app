@if($paginator->hasPages())
    <div class="col-lg-12">
        <div class="pagination_area">
            <ul class="pagination">
                @if($paginator->onFirstPage())
                    <li class="page-item">
                        <div class="page-link" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </div>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                @endif
                @foreach($elements as $element)
                    @if(is_string($element))
                        <li class="page-item"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    @if(is_array($element))
                        @foreach($element as $page => $url)
                            @if($page == $paginator->currentPage())
                                    <li class="page-item"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                @if($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                @else
                    <li class="page-item">
                        <div class="page-link">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endif
