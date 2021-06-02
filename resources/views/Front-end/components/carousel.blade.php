	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="img/big-logo.png" alt="">
				<p>Get your freebie template now!</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
            @foreach ($carousels as $carousel)
			<div class="item  hero-item" data-bg="{{asset('image/'.$carousel->image)}}"></div>
            @endforeach
		</div>
	</div>
	<!-- Intro Section -->
