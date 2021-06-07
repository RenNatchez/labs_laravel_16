<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
                <p class="con-item">0034 37483 2445 322</p>
                <p class="con-item">hello@company.com</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                {{-- <form method="POST" action="{{ route('mail') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="mail" class="form-label">Email </label>
                      <input type="email" class="form-control" id="mail" name="mail" >
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="message" class="form-label">message</label>
                      <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> --}}
                <form class="form-class" id="con_form" method="POST" action="{{ route('mail') }}"> 
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" name="name"  placeholder="Your name">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="mail" placeholder="Your email">
                    </div>
                    <div class="col-sm-12">
                      <select for='subject_id'  name="subject_id" id="subject_id" class="select_form">
                        @foreach ($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->nom}}</option>
                        @endforeach
                      </select>
                      <textarea name="message" placeholder="Message"></textarea>
                      <button class="site-btn">send</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

