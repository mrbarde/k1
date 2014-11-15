@extends("site.layout.master")
@section("content")

<div class="section dark">

	<h4 class="xl-text text-center robotoslab margintop10 marginbottom10">
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
	</h4>

</div>

<div class="section">

	<div class="row fly-in-plugin">

		@for ($i=0; $i < 6; $i++)

			<div class="large-12 medium-12 small-12 columns marginbottom4 ffb">

				<div class="row">
					<div class="large-4 medium-4 small-12 columns">
						<img src="http://dummyimage.com/500x323/eee/fff" class="fullwidthimage radius">
					</div>
					<div class="large-8 medium-8 small-12 columns end">
						<h4 class="xs-text uppercase">
							Category/<span class="bold">Subcategory</span>
						</h4>

						<h4 class="l-text">
							<a href="#">
								Typi non habent claritatem insitam
							</a>
						</h4>

						<p>
							Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum...
						</p>

						<div>
							<a href="#" class="right small button">Read more</a>
						</div>

					</div>
				</div>

			</div>

		@endfor

	</div>

</div>

@stop