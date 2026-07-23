<div class="col-lg-4 col-md-6">
    <figure class="proj m-0" 
            data-fancybox="gallery-{{ \Illuminate\Support\Str::slug($title) }}" 
            data-src="{{ $cover }}" 
            data-caption="{{ $title }} — {{ $subtitle }}">
        <img height="auto" width="auto" src="{{ $cover }}" alt="{{ $title }} — {{ $subtitle }}">
        <figcaption class="ov">
            <span class="cat">{{ $category }}</span>
            <span class="nm">{{ $title }}</span>
            <span class="small text-white-50">{{ $subtitle }}</span>
            
            @if(isset($images) && count($images) > 0)
                <span class="proj-badge">📷 {{ count($images) + 1 }} Photos</span>
            @endif
            
            <span class="proj-view-link">View Gallery &rarr;</span>
        </figcaption>
    </figure>
    
    @if(isset($images) && count($images) > 0)
        <div style="display:none;">
            @foreach($images as $image)
                <a href="{{ $image }}" 
                   data-fancybox="gallery-{{ \Illuminate\Support\Str::slug($title) }}" 
                   data-caption="{{ $title }} — {{ $subtitle }}"></a>
            @endforeach
        </div>
    @endif
</div>
