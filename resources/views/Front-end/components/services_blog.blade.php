	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
                @foreach ($blog as $item)
				<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="{{ asset('image/blog/'.$item->image) }}" alt="">
						</div>
						<div class="card-text">
							<h2>{{$item->titre}}</h2>
                            <p>{{Str::limit($item->contenu, 80, '...') }}</p>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->
