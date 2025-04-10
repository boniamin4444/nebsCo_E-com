     
    <div class="row mb-3">
        <div class="col-12">
            <h2 class="mb-3">Top Category</h2>
            <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
    
                    @foreach ($categories->chunk(4) as $chunkIndex => $chunk)
                        <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                            <div class="row g-3">
                                @foreach ($chunk as $category)
                                    <div class="col-6 col-md-3 text-center">
                                        <div class="card h-100">
                                            <img src="{{ $category->image ?? asset('images/default-category.png') }}"
                                                class="card-img-top img-fluid"
                                                alt="{{ $category->name }}"
                                                style="height: 200px; object-fit: cover; border-radius: 10px;">
                                            <div class="card-body p-2">
                                                <h6 class="card-title mb-0">{{ $category->name }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
    
                </div>
    
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    