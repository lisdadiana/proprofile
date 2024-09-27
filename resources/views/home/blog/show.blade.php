<div class="row">
    <div class="col-md-8 mx-auto py-5"> <!-- Mengganti offset dengan mx-auto untuk sentralisasi -->

        <a href="/blog" class="btn btn-primary px-4">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>

        <h4><b>{{ $blog->title }}</b></h4>
        <p>date created {{ $blog->created_at }}</p>

        <img src="/{{ $blog->cover }}" class="img-fluid" alt="{{ $blog->title }}"> <!-- Menambahkan img-fluid untuk gambar responsif -->

        <div class="py-3"></div>

        <p>{!! $blog->body !!}</p>
    </div>
</div>
