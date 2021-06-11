



    <div class="row">
        <div class="col-md-9 comment-from"  >
            <h2>Leave a comment</h2>
            <form class="form-class"  method="POST" action="{{ route('blog.addcom',  $article) }}">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" name="name"  placeholder="Your name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="mail" placeholder="Your email">
                  </div>
                  <div class="col-sm-12">
                    <textarea name="message" placeholder="Message"></textarea>
                    <button class="site-btn">send</button>
                  </div>
                </div>
          </form>
        </div>
    </div>









{{-- <form class="form-class" id="con_form" method="POST" action="{{ route('mail') }}"> 
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" name="name"  placeholder="Your name">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="mail" placeholder="Your email">
                    </div>
                    <div class="col-sm-12">
                      <textarea name="message" placeholder="Message"></textarea>
                      <button class="site-btn">send</button>
                    </div>
                  </div>
</form> --}}
