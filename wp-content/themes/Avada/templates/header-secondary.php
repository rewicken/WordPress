<?php

$content_1 = avada_secondary_header_content( 'header_left_content' );
$content_2 = avada_secondary_header_content( 'header_right_content' );
?>

<div class="fusion-secondary-header">
	<div class="fusion-row">
		<?php if ( $content_1 ) : ?>
			<div class="fusion-alignleft"><?php echo $content_1; ?></div>
		<?php endif; ?>
		<?php if ( $content_2 ) : ?>
			<div class="fusion-alignright">
				<?php echo $content_2; ?>
				<div class="lan-switcher">
					
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>

<script>
	jQuery(function () {

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

if (getUrlParameter('lang') == 'en') {
	jQuery('.lan-switcher').append('<span style="margin-left: 15px">英</span>');
}else {
	jQuery('.lan-switcher').append('<span>中</span>');
}
		jQuery('.lan-switcher').on("click", function () {
			if (getUrlParameter('lang') == 'en') {	
				jQuery(this).find('span').css("margin-left", "0px").text("中");
				window.location.href = "/?lang=zh";
			}else {
				jQuery(this).find('span').css("margin-left", "15px").text("英");
				window.location.href = "/?lang=en";
			}
		});
	});
</script>
