<div class="row">
        @foreach($blog as $item)
          <div class="col-md-3 my-3">
            <div class="card shadow-sm h-100 d-flex flex-column">
              <!-- Wrapper for image and content -->
              <img src="/{{ $item->cover }}" class="img-fluid" alt="" style="height: 200px; object-fit: cover;">

              <div class="card-body d-flex flex-column justify-content-between">
                <div>
                  <a href="/blog/show/{{ $item->id }}" class="text-decoration-none">
                    <h5>{{ $item->title }}</h5>
                  </a>
                  <p>{!! Illuminate\Support\Str::limit($item->body, 100) !!}</p>
                </div>
                <div class="mt-auto">
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>