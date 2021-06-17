					<!-- Single widget -->
					<div class="widget-item">
						<form action="{{route('search')}}" class="search-form" >
							<input type="text" placeholder="Search" name="article">
							<button class="search-btn" type="submit"><i class="flaticon-026-search"></i></button>
						</form>
									</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
                            @foreach ($categorie as $item)
							<li><a href={{route('categorie', $item->id)}}>{{$item->nom}}</a></li>
                            @endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
                            @foreach ($tags as $item)
							<li><a href="{{route('tag', $item->id)}}">{{$item->nom}}</a></li>
                            @endforeach
						</ul>
					</div>