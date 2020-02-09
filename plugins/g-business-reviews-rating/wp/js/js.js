// JavaScript Document

function google_business_reviews_rating(e, i) {
	if (typeof e == 'undefined') {
		var e = null;
	}
	else if (typeof e == 'string' && e.match(/^[\d]+$/)) {
		e = parseInt(e);
	}
		
	if (typeof i == 'undefined') {
		var i = null;
	}
	else if (typeof i == 'string') {
		i = parseInt(i.replace(/[^\d]/, ''))
	}
	
	if ((typeof e == 'number' || typeof e == 'object' || typeof e == 'string') && typeof i == 'number') {
		if (typeof e == 'object') {
			e = jQuery('.google-business-reviews-rating').index(e);
		}
		else if (typeof e == 'string') {
			e = jQuery('.google-business-reviews-rating').index(jQuery('#' + e));
		}
		
		jQuery('.review-full-text:eq(0)', '.google-business-reviews-rating:eq(' + e + ') li:eq(' + i + ')').show();
		jQuery('.review-more-link:eq(0)', '.google-business-reviews-rating:eq(' + e + ') li:eq(' + i + ')').remove();
		return;
	}
	
	var stars_width_multiplier,
		rating,
		rating_width,
		safari = navigator.userAgent.match(/^((?!chrome|android).)*safari/i),
		clear_styles = (jQuery('#stylesheet').length && jQuery('#stylesheet:visible:checkbox').length && !jQuery('#stylesheet:visible:checkbox').is(':checked')),
		overall_link = null,
		reviews_window = null;

	jQuery('.google-business-reviews-rating').each(function(index) {
		stars_width_multiplier = 0.196,
		rating = parseFloat(jQuery('.number:eq(0)', this).text().replace(/(\d+(?:\.\d+)?)/, '$1')),
		e = jQuery(this),
		overall_link = (typeof jQuery(this).data('href') == 'string' && jQuery(this).data('href').length && !jQuery('.buttons', this).length && (!jQuery('.listing', this).length || jQuery('.listing', this).length && !jQuery('.listing > *', this).length)) ? jQuery(this).data('href') : null;
		
		if (clear_styles) {
			jQuery(this).removeAttr('class');
		}
		else if (!jQuery(this).prop('id').length && !jQuery(this).parent().hasClass('widget') && !jQuery(this).parent().hasClass('widget-content')) {
			jQuery(this).prop('id', 'google-business-reviews-rating' + ((index > 0) ? '-' + index : ''));
		}
		
		if (!clear_styles && jQuery(this).hasClass('no-styles')) {
			jQuery(this).removeAttr('class');
		}
		
		if (jQuery(this).hasClass('link')) {
			if (overall_link != null) {
				jQuery(this).on('click', { overall_link: overall_link }, function(event) {
					if (!jQuery(event.target).is('a')) {
						event.preventDefault();
						if (event.data.overall_link.match(/^\/.*$/)) {
							document.location.href = event.data.overall_link;
						}
						else {
							reviews_window = window.open(event.data.overall_link, '_blank');
							reviews_window.focus();
						}
						return false;
					}
				});
			}
			else {
				jQuery(this).removeClass('link');
			}
			
			jQuery(this).removeData('href').removeAttr('data-href');
		}

		if (jQuery('.review-more-placeholder', e).length) {
			jQuery('.review-more-placeholder', e).each(function(more) {
				if (jQuery(this).siblings('.review-full-text').length && !jQuery(this).siblings('.review-full-text').html().length) {
					jQuery(this).parent().removeClass('text-excerpt');
					jQuery(this).siblings('.review-full-text').remove();
					jQuery(this).remove();
				}
				else if (jQuery(e).hasClass('js-links')) {
					jQuery(this).after('<a href="javascript:google_business_reviews_rating(' + index + ', ' + jQuery('li', jQuery(e)).index(jQuery(this).closest('li')) + ');" class="review-more-link">' + jQuery(this).html() + '</a>');
					jQuery(this).remove();
				}
				else {
					jQuery(this).after('<a href="#' + e.prop('id') + '" class="review-more-link">' + jQuery(this).html() + '</a>');
					jQuery('.review-more-link', jQuery(this).parent()).on('click', function(event) {
						event.preventDefault();
						jQuery(this).next('.review-full-text').show();
						jQuery(this).remove();
						return false;
					});
					jQuery(this).remove();
				}
			});
		}
		
		if (jQuery('.all-stars', e).hasClass('animate')) {
			jQuery('.all-stars', e)
				.after(jQuery('<span>')
					.addClass('all-stars')
					.addClass('backdrop')
					.width(jQuery('.all-stars', e).width() + 1)
					.css({ 'margin': jQuery('.all-stars', e).css('top') + ' 0 0 ' + (-1 * jQuery('.all-stars', e).width() - 0.1) + 'px' })
					.html('<span class="star gray"></span>'.repeat(5)));
					
			jQuery('.star:last', jQuery('.all-stars:eq(0)', e)).on('webkitAnimationEnd oanimationend msAnimationEnd animationend',   
				function(event) {
					jQuery('.all-stars.backdrop', jQuery(this).closest('.rating')).fadeOut(300, function() { jQuery(this).remove(); });
				});
		}
		
		
		if (jQuery(e).attr('class').match(/\bversion[_-]?1\b/i)) {
			if (safari) {
				jQuery('.all-stars', this).addClass('safari');
			}
				
			if (rating == 5) {
				jQuery('.all-stars', this).css('color', 'rgba(0, 0, 0, 0)');
			}
			else if (rating == 0) {
				jQuery('.rating-stars', this).remove();
			}
			
			if (jQuery('.rating-stars', this) && jQuery('.all-stars', this).length) {
				if (typeof jQuery('.rating-stars', this).data('multiplier') == 'number') {
					stars_width_multiplier = jQuery('.rating-stars', this).data('multiplier');
				}
				
				rating_width = Math.round(jQuery('.all-stars', this).width() * rating * stars_width_multiplier + stars_width_multiplier * 0.05 * Math.sin(rating * 2 * Math.PI) + 0.5 * stars_width_multiplier * (Math.round(rating + 0.49) - rating));
				jQuery('.rating-stars', this).width(rating_width);
			}
		}
    });
	return;
}

jQuery(document).ready(function($){
	google_business_reviews_rating();
	return;
});
