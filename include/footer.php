<?php
$episode_cat_id = get_cat_ID('Episode');
$is_episode_page = is_single() && in_array($episode_cat_id,get_post()->post_category);
$args = array(
'posts_per_page' => 1,
'offset' => 0,
'category' => get_cat_ID('Episode'),
'orderby' => 'date',
'order' => 'DESC',
'post_type' => 'post',
'post_status' => 'publish',
'suppress_filters' => true
);
$latest_episode = get_posts( $args )[0];
$latest_episode_link = get_permalink($latest_episode->ID);
// powerpress_get_enclosureを呼び出す？
$url = powerpress_get_enclosure($latest_episode->ID);

$title;
if($is_episode_page){
  $title = get_post()->post_title;
}else{
  $title = $latest_episode->post_title;
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/plugins/footer-player/style/footer-player.css"/>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/plugins/footer-player/js/footer-player.js"></script>
<?php if($is_episode_page){ ?>
<?php }else{ ?>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/plugins/footer-player/js/footer-player_link.js"></script>
<?php } ?>
<div class="footer-player">
<?php if(!$is_episode_page) { ?>
<a href="<?php echo $latest_episode_link;?>" class="link-to-latest-episode"></a>
<?php } ?>
<div class="wrapper">
<div class="icon">
<img src="/wp-content/plugins/footer-player/images/white-1logo.png">
</div>
<div class="title">
<?php if(!$is_episode_page) { ?>
<span>最新のエピソード</span><br>
<?php } ?>
<?php echo $title; ?>
</div>

<?php if($is_episode_page) { ?>
<div class="play-button">
<img class="play" src="<?php echo get_site_url(); ?>/wp-content/plugins/footer-player/images/play.png">
<img class="pause" src="<?php echo get_site_url(); ?>/wp-content/plugins/footer-player/images/pause.png">
</div>
<?php } ?>
</div>
</div>
<?php return "";?>
