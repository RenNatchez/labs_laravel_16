					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
                            @foreach ($categorie as $item)
							<li><a href="#">{{$item->nom}}</a></li>
                            @endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
                            @foreach ($tags as $item)
							<li><a href="">{{$item->nom}}</a></li>
                            @endforeach
						</ul>
					</div>