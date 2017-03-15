<?php
//$episode_cat_id = get_cat_ID('episode');
//$is_episode_page = is_single() && in_array($episode_cat_id,get_post()->post_category);
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/plugins/footer-player/style/footer-player.css"/>
<?php// if($is_episode_page){ ?>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/plugins/footer-player/js/footer-player.js"></script>
<?php// }else{ ?>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/plugins/footer-player/js/footer-player_link.js"></script>
<?php// } ?>
