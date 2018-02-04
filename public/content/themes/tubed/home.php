<?php include('includes/header.php'); ?>

    <style type="text/css">
        ul.video_list {
            margin: 0px;
            padding: 0px;
        }

        .video_list li {
            display: inline;
            list-style: none;
        }
    </style>

    <div class="container-fluid">

        <div id="home-content">

            <div class="row">

                <?php $featured_videos = Video::where('active', '=', 1)->where('featured', '=', 1)->orderBy('created_at', 'DESC')->get(); ?>

                <div class="col-md-10 col-md-offset-2 right-content-10" id="featured">

                    <ul>

                        <?php foreach ($featured_videos as $index => $video): ?>
                            <li <?php if ($index == 0): ?>class="active"<?php endif; ?>>
                                <div class="bg"
                                     style="background-image:url(<?=Config::get('site.uploads_url').'/images/'.$video->image?>)">
                                    <div class="bg-dimmer"></div>
                                </div>
                                <div class="bg-dim-right"></div>
                                <div class="featured-content">
                                    <div class="row">
                                        <div class="col-md-6 left-featured">
                                            <a href="<?=($settings->enable_https) ? secure_url('video') : URL::to('video');?><?='/'.$video->id;?>"><img
                                                        src="<?=ImageHandler::getImage($video->image, 'medium')?>"
                                                        width="100%" class="featured-img"/></a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-info">
                                                <h2><?=$video->title?></h2>
                                                <div class="feature_duration"><i
                                                            class="fa fa-clock-o"></i> <?=TimeHelper::convert_seconds_to_HMS($video->duration);?>
                                                </div>
                                                <p><?=$video->description?></p>
                                                <a href="<?=($settings->enable_https) ? secure_url('video') : URL::to('video');?><?='/'.$video->id;?>"
                                                   class="btn btn-primary">Watch Now</a>
                                            </div>

                                        </div>

                                    </div>
                                    <div style="clear:both"></div>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                    <div id="featured_loader"></div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-8 col-md-offset-2 right-content-8" id="home-main">

                    <div class="col-md-12">
                        <?php $free_videos = Video::where('active', '=', 1)->where('access', '=', 'guest')->orderByRaw("RAND()")->take(12)->get(); ?>
                        <div class="mini-slider" data-index="1">
                            <h6 class="no-padding">Free Videos</h6>
                            <div class="dot-nav top12">
                                <div class="dot active" data-index="0"></div>
                                <div class="dot" data-index="1"></div>
                            </div>
                            <ul> <?php foreach ($free_videos  as $index => $video): ?>
                            <?php if (($index % 4 == 0 && $index != 0)): ?><?php endif; ?>
                        <?php if ($index % 4 == 0): ?>
                        <li>
                            <div class="row"><?php endif; ?>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <?php include('partials/video-block.php'); ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        </ul>
                        </div><!-- .mini-slider -->
                    </div>

                    <div class="col-md-12">
                        <?php $premium_videos = Video::where('active', '=', 1)->where('video_category_id', '=', '24')->orderBy('created_at', 'ASC')->take(12)->get(); ?>
                        <div class="mini-slider" data-index="1">
                            <h6 class="no-padding">Path To Pleasure Videos</h6>
                            <div class="dot-nav top12">
                                <div class="dot active" data-index="0"></div>
                                <div class="dot" data-index="1"></div>
                            </div>
                            <ul><?php foreach ($premium_videos as $index => $video): ?>
                            <?php if (($index % 4 == 0 && $index != 0)): ?>
                                <?php endif; ?>
                                <?php if ($index % 4 == 0): ?>
                                <li>
                                    <div class="row"><?php endif; ?>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <?php include('partials/video-block.php'); ?>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- .mini-slider -->
                    </div>

                <div class="col-md-12">
                    <?php $bonusVideos = Video::where('active', '=', 1)->where('video_category_id', '=', '33')->orderBy('created_at', 'ASC')->take(12)->get(); ?>
                    <div class="mini-slider" data-index="1">
                        <h6 class="no-padding">Bonus Videos</h6>
                        <div class="dot-nav top12">
                            <div class="dot active" data-index="0"></div>
                            <div class="dot" data-index="1"></div>
                        </div>
                        <ul><?php foreach ($bonusVideos as $index => $video): ?>
                        <?php if (($index % 4 == 0 && $index != 0)): ?><?php endif; ?>
                    <?php if ($index % 4 == 0): ?>
                    <li>
                        <div class="row"><?php endif; ?>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <?php include('partials/video-block.php'); ?>
                            </div>
                            <?php endforeach; ?></div>
                    </li>
                    </ul>
                    </div><!-- .mini-slider -->
                </div>

        <div class="col-md-2" id="home-right-sidebar">
            <h6>Recent Articles</h6>
            <?php $posts = Post::where('active', '=', 1)->orderBy('created_at', 'DESC')->take(4)->get(); ?>
            <?php foreach ($posts as $post): ?>
                <?php include('partials/post-block.php'); ?>
            <?php endforeach; ?>
        </div>
    </div>

    </div>

<?php //include('partials/pagination.php'); ?>

    </div>

    <script src="<?=THEME_URL.'/assets/js/mini-slider.jquery.js';?>"></script>
<?php include('includes/footer.php'); ?>