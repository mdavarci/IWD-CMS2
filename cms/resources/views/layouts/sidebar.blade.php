@auth
<aside class="col-md-4 blog-sidebar">
<!-- Widget [Latest Posts Widget]        -->
<div class="widget latest-posts">
  <header>
    <h3 class="h6">Information Menu</h3>
  </header>
  @foreach ($pages as $page)
    @if ($page->place === 1)
    <div class="blog-posts">
      <a href="{{ $page->path()}}">
        <div class="item d-flex align-items-center">
            <div class="title"><strong>{{ $page->title}}</strong>
            </div>
        </div>
      </a>
    </div>
    @endif
  @endforeach
</div>
     <!-- Widget [Search Bar Widget]-->
<div class="widget search">
  <header>
    <h3 class="h6">Search the blog</h3>
  </header>
  <form action="#" class="search-form">
    <div class="form-group">
      <input type="search" placeholder="What are you looking for?">
      <button type="submit" class="submit"><i class="icon-search"></i></button>
    </div>
  </form>
</div>
<!-- Nep data en menu, staat wel mooi -->
 <div class="widget tags">       
        <header>
         <h3 class="h6">Archives</h3>
            </header>
          <ol class="list-unstyled mb-0">

          @foreach ($archives as $stats)
          <li>
          <a href="/?month={{$stats['month'] }}&year={{$stats['year']}}">
          {{ $stats['month'] . ' ' . $stats['year'] }}
          </a>
        </li>
          @endforeach
         </ol>
          </div>

           <!-- Widget [Categories Widget]-->
          <div class="widget categories">
            <header>
              <h3 class="h6">Categories</h3>
            </header>
            <div class="item d-flex justify-content-between"><a href="#">Growth</a><span>12</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
          </div>

          <div class="widget tags">       
            <header>
            <h3 class="h6">Tags</h3>
            </header>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
            </ul>
          </div>
</aside>
@endauth