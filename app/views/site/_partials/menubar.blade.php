<div class="large nav-bar {{$transparent_menu}} show-for-medium-up">
	<div class="nav-bar-inner">
		<ul class="logo-area">
			<li class="name">
				<span><a href="{{$base_url}}">Knowledge First</a></span>
			</li>
		</ul>

		<!-- This part of the menu appears on the left of the menu -->
		<ul class="menu left">
			<li class="<?php if($current_page == 'wwd'){echo 'bold';} ?>">
				<a href="{{$base_url}}what-we-do">What we do</a>
			</li>
			<li class="<?php if($current_page == 'case-study'){echo 'bold';} ?>">
				<a href="{{$base_url}}case-study">Case study</a>
			</li>
			<li class="<?php if($current_page == 'blog'){echo 'bold';} ?>">
				<a href="{{$base_url}}blog">Blog</a>
			</li>
		</ul>
		
		<!-- This part of the menu appears on the right of the menu -->
		<ul class="menu right">
			<li class="<?php if($current_page == 'contanct'){echo 'bold';} ?>">
				<a href="{{$base_url}}contact">Contact</a>
			</li>
			<li class="<?php if($current_page == 'login'){echo 'bold';} ?>">
				<a href="{{$base_url}}login">Login</a>
			</li>
			<li class="round-outline-link  <?php if($current_page == 'signup'){echo 'bold';} ?>">
				<a href="{{$base_url}}signup"><span>Sign up</span></a>
			</li>
		</ul>

	</div>
</div>