<ul class="nav navbar-nav navbar-left">

	<?= generate_menu($menu); ?>
</ul>

<?php if(Auth::user()->role != 'subscriber'): ?>
    <a class="btn btn-primary" href="/user/<?= Auth::user()->username ?>/upgrade_subscription" style="margin-top:10px;"><i class="fa fa-certificate"></i> Upgrade to Premium Subscription</a>
<?php endif; ?>