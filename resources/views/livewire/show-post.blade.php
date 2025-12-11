<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4 text-center">Posts</h2>

            <div class="card">
                <div class="card-body">
                    @foreach ($posts as $post)
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">{{ $post->name }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $post->content }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
