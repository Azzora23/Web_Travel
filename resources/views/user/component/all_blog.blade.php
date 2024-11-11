
@if (count($articles) != 0)
  @foreach ($articles as $article)
      <div class="section-header mt-3">
        <div class="mb-3">
          <a href="{{ route('blog.show', ['slug' => $article['slug']]) }}" class="decoration-none">
            <div class="text-primary" style="font-size: 40px; letter-spacing: .5px; line-height: 1.3;">
              {{ $article['title'] }}
            </div>
          </a>

          <p class="text-muted">
            {{ Str::limit($article['content'], 150) }} <!-- Membatasi teks hingga 150 karakter -->
          </p>

          <a href="{{ route('blog.show', ['slug' => $article['slug']]) }}" class="ml-3"> <span class="text-primary">Read More <i class="fa fa-long-arrow-right"></i> </span></a>
        <hr class="mt-3">
        </div>
      </div>
    @endforeach
@else
  <style>
    .page {
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 100;
        height: 100vh;
    }

  </style>
  <div class="full-height bg-white mt-5 d-flex align-items-center justify-content-center" style="height: 10vh;">
    <div class="code font-weight-bold text-center" style="border-right: 3px solid; font-size: 60px; padding: 0 15px 0 15px;">
      404
    </div>
    <div class="text-center" style="padding: 10px; font-size: 46px;">
      Not Found
    </div>
  </div>
@endif