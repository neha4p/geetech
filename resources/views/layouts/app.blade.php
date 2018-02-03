<!DOCTYPE html>
<html>
<head>

	@include('layouts.header')
	@yield('css')
</head>
<body <?php if(Request::is('/')) echo 'class="home"'; ?>>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">

		<div class="row">

			<div class="navbar-header col-md-2 col-sm-12">
				<a href="/" class="navbar-brand">
					<img src="<?= ImageHandler::getImage($settings->logo,'','settings/'); ?>" />
				</a>
				<div class="menu-toggle">
					<i class="fa fa-caret-left"></i><i class="fa fa-bars"></i><i class="fa fa-caret-right"></i>
				</div>
			</div>



			<div class="col-md-8 search col-sm-12">
                <?php  if(Auth::user()){ ?>
				<form role="search" action="/search" method="GET">
					<i class="fa fa-search"></i>
					<input type="text" id="value" name="value" placeholder="Search...">
				</form>
                <?php }?>
			</div>


			<div class="col-md-2 right-nav">
				<div class="row">
					<ul class="nav navbar-nav navbar-right">

                        <?php if(Auth::guest()): ?>

						<li class="login-desktop"><a href="/login"><i class="fa fa-lock"></i> Login<span class="border-bottom"></span></a></li>
						<li class="signup-desktop"><a href="/signup"> Signup<span class="border-bottom"></span></a></li>

                        <?php else: ?>

						<li class="dropdown">
							<a href="#_" class="user-link-desktop dropdown-toggle" data-toggle="dropdown"><img src="<?= ImageHandler::getImage( Auth::user()->avatar,'','avatars/'); ?>" class="img-circle" /> <span><?= ucwords(Auth::user()->username) ?></span> <i class="fa fa-chevron-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?= ($settings->enable_https) ? secure_url('user') : URL::to('user'); ?><?= '/' . Auth::user()->username; ?>">My Profile</a></li>
								<li><a href="<?= ($settings->enable_https) ? secure_url('favorites') : URL::to('favorites') ?>">My Favorites</a></li>

                                <?php if(Auth::user()->role == 'admin' || Auth::user()->role == 'demo'):  ?>
								<li class="divider"></li>
								<li><a href="<?= ($settings->enable_https) ? secure_url('admin') : URL::to('admin') ?>"> Admin</a></li>
                                <?php endif; ?>
								<li class="divider"></li>
								<li><a href="<?= ($settings->enable_https) ? secure_url('logout') : URL::to('logout') ?>" id="user_logout_mobile"><i class="fa fa-power-off"></i> Logout</a></li>
							</ul>
						</li>

                        <?php endif; ?>
					</ul>
				</div>

				<!--form class="navbar-form navbar-right search" role="search"><div class="form-search search-only"><i class="fa fa-search"></i> <input class="form-control search-query" placeholder="search..."></div></form-->

			</div>

		</div><!-- .row -->

	</div>

	</div>
</nav>

<div class="container-fluid">

	<div class="row" style="position:relative; height:100%;">

		<div id="main-content">
			@yield('content')

@include('layouts.footer')