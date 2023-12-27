@if ($paginator->hasPages())
    <nav class="pagination-container">
        <div class="prev-btn">
            <ul>
                @if ($paginator->onFirstPage())
                    <li aria-disabled="true">
                        <!-- <span class="page-link">« Previous</span> -->
                        <span class="page-link"><i class="fa-regular fa-chevron-left"></i></span>
                    </li>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}">
                        <li aria-disabled="false">
                            <span class="page-link"><i class="fa-regular fa-chevron-left"></i></span>
                        </li>
                    </a>
                @endif
            </ul>
        </div>

        <div class="page-nums">
            <ul class="pagination">
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <!-- The class "active" is to change color of current page number -->
                                <li class="active" aria-current="page"><span
                                        class="page-link">{{ $page }}</span></li>
                            @else
                                <a class="page-link" href="{{ $url }}">
                                    <li>{{ $page }}</li>
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="next-btn">
            <ul>
                <!-- Class "next" is to change color of next button. If next page is available -->
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}">
                        <li class="next">
                            <!-- <a class="page-link" href="http://127.0.0.1:8000?page=2" rel="next">Next »</a> -->
                            <i class="fa-regular fa-chevron-right"></i>
                        </li>
                    </a>
                    @else
                    <li aria-disabled="true" >
                        <i class="fa-regular fa-chevron-right"></i>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
@endif
