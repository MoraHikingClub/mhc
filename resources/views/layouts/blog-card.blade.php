<li class="{{ ($side === 'right' ? 'timeline-inverted' : '') }}">
    <div class="timeline-badge">
        <a><i class="fa fa-circle {{ ($side === 'right' ? 'invert' : '') }}" id=""></i></a>
    </div>
    <div class="timeline-panel">
        <div class="timeline-heading">
            <h3>{{ $title }}</h3>
        </div>
        <div class="timeline-body">
            <div class="blog-header-container">
            @if($header!='')
                <img src="{{ $header }}" class="blog-header" alt="{{ $title }}">
            @endif
            </div>
            <div class="timeline-content"><p>{!! $content !!}{{ strlen($content) > 299 ? '...' : '' }}</p></div>
            <div class="readmore"><a href="{{ $link }}" class="readmore-btn"><span>Read more</span></a></div>
        </div>
        <div class="timeline-footer">
            <p class="text-right">{{ $date }}</p>
        </div>
    </div>
</li>