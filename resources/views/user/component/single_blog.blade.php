

@if ($article != null)
  <div class="section-header mt-3">
    <div class="mb-3">
      <div class="text-dark" style="font-size: 40px; letter-spacing: .5px; line-height: 1.3;">
        {{ $article['title'] }}
      </div>
    </div>
    <p class="mb-3 article text-justify"> 
      {{ $article['content'] }}
    </p>
  </div>    
@else
  <div class="full-height bg-white mt-5 d-flex align-items-center justify-content-center" style="height: 10vh;">
    <div class="code font-weight-bold text-center" style="border-right: 3px solid; font-size: 60px; padding: 0 15px 0 15px;">
      404
    </div>
    <div class="text-center" style="padding: 10px; font-size: 46px;">
      Not Found
    </div>
  </div>    
@endif
