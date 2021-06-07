<div class="newsletter-section spad">
    <div class="container">
        <div class="row flex_newsletter">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form" method="POST" action="{{ route('newsletter') }}">
                    @csrf
                    <input type="text" name="mail" placeholder="Your e-mail here">
                    <button class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
