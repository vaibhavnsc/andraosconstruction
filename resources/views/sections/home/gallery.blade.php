<!-- ════ GALLERY ════ -->
<section class="section bg-navy text-white" id="gallery">
    <div class="container">
        <div class="row g-5 mb-5 reveal in">
            <div class="col-lg-6">
                <div class="eyebrow on-dark">Project Gallery</div>
                <h2 class="ff-display display-lg mt-3 text-white">Recent Projects</h2>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-end">
                <p class="lede" style="color:var(--slate-300)">A short list of recent commercial work. Filter by sector.
                </p>
                <div class="d-flex flex-wrap gap-1 mt-3" id="filters"><button class="filter-btn active" data-f="all">All
                        Work</button><button class="filter-btn " data-f="hoa">Property &amp; HOA</button><button
                        class="filter-btn " data-f="hospitality">Hospitality</button><button class="filter-btn "
                        data-f="retail">Retail</button><button class="filter-btn " data-f="civic">Civic</button></div>
            </div>
        </div>
        <div class="row g-3" id="projGrid">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="proj"><img
                        src="{{ asset('assets/images/shadow.jpg') }}" alt="Shadow Canyon HOA">
                    <div class="ov">
                        <div class="cat">hoa</div>
                        <div class="nm">Shadow Canyon HOA</div>
                        <div style="font-size:12px;color:rgba(255,255,255,.65)">Community renewal · Front Range</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="proj"><img
                        src="{{ asset('assets/images/marriott.jpg') }}" alt="Marriott Boulder">
                    <div class="ov">
                        <div class="cat">hospitality</div>
                        <div class="nm">Marriott Boulder</div>
                        <div style="font-size:12px;color:rgba(255,255,255,.65)">Drive court · Boulder</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="proj"><img
                        src="{{ asset('assets/images/boulder.jpg') }}" alt="Boulder Village Plaza">
                    <div class="ov">
                        <div class="cat">retail</div>
                        <div class="nm">Boulder Village Plaza</div>
                        <div style="font-size:12px;color:rgba(255,255,255,.65)">Streetscape masonry</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="proj"><img
                        src="{{ asset('assets/images/rocky.jpg') }}" alt="Rocky Mountain Kids">
                    <div class="ov">
                        <div class="cat">retail</div>
                        <div class="nm">Rocky Mountain Kids</div>
                        <div style="font-size:12px;color:rgba(255,255,255,.65)">Boulder · Sandstone</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="proj"><img
                        src="{{ asset('assets/images/cherry.jpg') }}" alt="Cherry Creek Pedway">
                    <div class="ov">
                        <div class="cat">civic</div>
                        <div class="nm">Cherry Creek Pedway</div>
                        <div style="font-size:12px;color:rgba(255,255,255,.65)">Sidewalk replacement · Denver</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="proj"><img
                        src="{{ asset('assets/images/logan.jpg') }}" alt="Logan Reserve Drives">
                    <div class="ov">
                        <div class="cat">hoa</div>
                        <div class="nm">Logan Reserve Drives</div>
                        <div style="font-size:12px;color:rgba(255,255,255,.65)">Aurora · 14 drive lanes</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="proj"><img
                        src="{{ asset('assets/images/sloan.jpg') }}" alt="Sloan Crossing Lot">
                    <div class="ov">
                        <div class="cat">retail</div>
                        <div class="nm">Sloan Crossing Lot</div>
                        <div style="font-size:12px;color:rgba(255,255,255,.65)">Westminster · Mill &amp; overlay</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="proj"><img
                        src="{{ asset('assets/images/village.jpg') }}" alt="The Village Sandstone">
                    <div class="ov">
                        <div class="cat">retail</div>
                        <div class="nm">The Village Sandstone</div>
                        <div style="font-size:12px;color:rgba(255,255,255,.65)">Boulder · Architectural masonry</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>