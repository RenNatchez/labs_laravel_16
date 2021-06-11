<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>{{$contenu->contact_titre}}</h2>
                </div>
                <p>{{$contenu->contact_description}}</p>
                <h3 class="mt60">{{$contenu->contact_soustitre}}</h3>
                <p class="con-item">{{$contenu->contact_rue}}<br>{{$contenu->contact_ville}}</p>
                <p class="con-item">{{$contenu->contact_telephone}}</p>
                <p class="con-item">{{$contenu->contact_email}}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
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

