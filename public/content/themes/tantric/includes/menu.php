<ul class="nav navbar-nav navbar-left">

	<?= generate_menu($menu); ?>
</ul>

<?php if(Auth::user()->role != 'subscriber'): ?>
    <a class="btn btn-primary" href="/user/<?= Auth::user()->username ?>/upgrade_subscription" style="margin-top:10px;width:100%"><i class="fa fa-certificate"></i> Upgrade to <br/>Path of Pleasure</a>
<?php endif; ?>