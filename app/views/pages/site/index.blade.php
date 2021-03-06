@section('title') Knowledge First... @stop

@section('menu_style') transparent @stop

@section('current_page') index @stop

@section("content")

<div class="blue less-padding section home-header">
	<div class="large background-image show-for-meium-up">&nbsp;</div>
	<div class="small background-image show-for-small-only">&nbsp;</div>

	<div class="row">
		
		<div class="large-12 medium-12 small-12 columns margintop10 marginbottom8">
		
			<div class="row fly-in-plugin">

				<div class="large-6 medium-6 small-12 columns margintop10">

					<h4 class="white-text xl-text robotoslab bold fft">
						Welcome to Nigerias number one professional network.
					</h4>

				</div>

				<div class="large-6 medium-6 small-12 columns margintop6">
					<div class="signup-form ffr">
						<h4 class="title m-text marginbottom2">Sign Up For Free</h4>
						{{Form::open(["url"=>"#", "method"=>"post"])}}
							<div class="row">
								<div class="large-12 medium-12 small-12 columns marginbottom2">
									{{Form::text("email", "", ["placeholder"=>"Email"])}}
								</div>
							</div>
							<div class="row">
								<div class="large-12 medium-12 small-12 columns marginbottom2">
									{{Form::text("reapeat-email", "", ["placeholder"=>"Repeat Email"])}}
								</div>
							</div>
							<div class="row">
								<div class="large-12 medium-12 small-12 columns marginbottom2">
									<input type="password" name="password" placeholder="Password">
								</div>
							</div>

							<div class="row">
								<div class="large-12 medium-12 small-12 columns marginbottom2">
									<select name="type">
										<option value="0">Select account type</option>
										<option value="1">Individual</option>
										<option value="2">Corporate</option>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<button type="submit" class="expand small success button radius">Sign Up</button>
								</div>
							</div>
						{{Form::close()}}

					</div>
				</div>

			</div>

		</div>
	</div>


</div>

<div class="darkblue less-padding section">
	<div class="row">
		<div class="large-4 medium-4 small-12 columns margintop1">
			<h4 class="text-center">Get newsletters & updates!</h4>
		</div>

		<div class="large-8 medium-8 small-12 columns margintop1">
			{{Form::open(["method"=>"post", "class"=>"marginbottom0"])}}
				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<input type="text" class="naked marginbottom0" placeholder="Enter your email address here...">
					</div>
				</div>
			{{Form::close()}}
		</div>
	</div>
</div>

<div class="section fly-in-plugin">

	<h3 class="text-center robotoslab">Both corporations and individuals benefit!</h3>

	<div class="row">
		<div class="row">
			<div class="large-10 medium-10 small-12 large-offset-1 medium-offset-1 columns end">

				<!-- Individuals -->
				<div class="large-6 medium-6 small-12 columns margintop4 fft">
					<div class="row">
						<div class="large-8 medium-8 small-8 large-offset-2 medium-offset-2 small-offset-2 columns end marginbottom2">
							<img class="round fullwidthimage" src="http://dummyimage.com/600x600/eee/fff.png">
						</div>
					</div>
					<h5 class="text-center margintop1 uppercase bold">
						<a href="#">Individuals</a></h5>
						<p class="text-center xs-text">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...
						</p>
				</div>

				<!-- Corporations -->
				<div class="large-6 medium-6 small-12 columns margintop4 fft">
					<div class="row">
						<div class="large-8 medium-8 small-8 large-offset-2 medium-offset-2 small-offset-2 columns end marginbottom2">
							<img class="round fullwidthimage" src="http://dummyimage.com/600x600/eee/fff.png">
						</div>
					</div>
					<h5 class="text-center margintop1 uppercase bold">
						<a href="#">Corporations</a></h5>
						<p class="text-center xs-text">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...
						</p>
				</div>
				
			</div>
		</div>
	</div>

</div>

<div class="grey section fly-in-plugin">

	<h3 class="text-center robotoslab ffr">Easy to get what you want!</h3>

	<div class="row ffr">
		<!-- Individuals -->
		<div class="large-10 medium-10 small-12 large-offset-1 medium-offset-1 columns margintop4">
			<img class="fullwidthimage" src="{{URL::to('/')}}assets/site/img/browser.png">
		</div>
	</div>

</div>

<div class="section">

	<h3 class="text-center robotoslab">Some people think we're cool</h3>

	<div class="row">
		<!-- Testimonials -->
		<div class="large-12 medium-12 small-12 columns margintop4 fly-in-plugin">
			<div class="testimonial-carousel ffl">
				<div class="tc-inner">

					<div class="tc-content">						
						<div class="large-12 medium-12 small-12 columns text-center marginbottom2">
							<img class="round" src="http://dummyimage.com/200x200/eee/fff.png">
						</div>
						<div class="large-8 medium-10 small-12 large-offset-2 medium-offset-1">
							<p class="text-center robotoslab">
								"This is my own dummy text, since i can't go online to get a lorem ipsum at the moment because of lack of internet connctivity on my system, i wrote this to replace lorem ipsum dummy text."
							</p>
							<p class="text-center s-text">
								<span class="blue-text bold">Jeol Haul</span><br>
								<span class="uppercase">
									CEO - Haulicity
								</span>
							</p>
						</div>
					</div>

					<div class="tc-content">						
						<div class="large-12 medium-12 small-12 columns text-center marginbottom2">
							<img class="round" src="http://dummyimage.com/200x200/eee/fff.png">
						</div>
						<div class="large-8 medium-10 small-12 large-offset-2 medium-offset-1">
							<p class="text-center robotoslab">
								"This is my own dummy text, since i can't go online to get a lorem ipsum at the moment because of lack of internet connctivity on my system, i wrote this to replace lorem ipsum dummy text."
							</p>
							<p class="text-center s-text">
								<span class="blue-text bold">Moose Thafa</span><br>
								<span class="uppercase">
									Art Director - Sjiks
								</span>
							</p>
						</div>
					</div>

					<div class="tc-content">						
						<div class="large-12 medium-12 small-12 columns text-center marginbottom2">
							<img class="round" src="http://dummyimage.com/200x200/eee/fff.png">
						</div>
						<div class="large-8 medium-10 small-12 large-offset-2 medium-offset-1">
							<p class="text-center robotoslab">
								"This is my own dummy text, since i can't go online to get a lorem ipsum at the moment because of lack of internet connctivity on my system, i wrote this to replace lorem ipsum dummy text."
							</p>
							<p class="text-center s-text">
								<span class="blue-text bold">Igoor F'rnandez</span><br>
								<span class="uppercase">
									Marketting Officer - Beef n Cheese
								</span>
							</p>
						</div>
					</div>
				</div>

					<div class="tc-nav text-center s-text">
						<!-- Carousel navigations -->
					</div>
			</div>
		</div>
	</div>

</div>

<div class="section grey">
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<h3 class="text-center l-text robotoslab marginbottom5">The Company We Keep</h3>
		</div>

		<div class="large-12 medium-12 small-12 columns">

			<div class="row fly-in-plugin">

				@for ($i=0; $i < 12; $i++)

					<div class="large-2 medium-3 small-6 columns end marginbottom2 ffb">
						<img src="http://dummyimage.com/320x320/ccc/fff" class="fullwidthimage radius">
					</div>

				@endfor

			</div>

			<!-- <img class="fullwidthimage" src="{{URL::to('/')}}assets/site/img/corporate-logos.png"> -->
		
		</div>

	</div>
</div>


@stop