


              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href="{{ $post->path()}}"><img src="img/blog-post-4.jpeg" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{$post->created_at->toFormattedDateString()}} </div>
                    <div class="category"><a href="#">Business</a></div>
                  </div><a href="{{ $post->path()}}">
                    <h3 class="h4">{{ $post->title }}</h3></a>
                  <p class="text-muted">{{$post->getSummary()}} ...</p>
                  <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                     
                      <div class="title"><span>{{$post->getPosterUserName()}}</span></div></a>
                    <div class="date"><i class="icon-clock"></i> 

       </div>
                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                  </div>
                </div>
              </div>