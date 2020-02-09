<?php

if (!defined('ABSPATH'))
{
	die();
}

?>
<div id="google-business-reviews-rating-settings" class="wrap banner">
	<h1><?php echo __('Reviews and Rating - Google Business') . (($this->demo) ? ' <span class="demo"><span class="dashicons dashicons-warning"></span> ' . __('Demo Mode') . '</span>' : ''); ?></h1>
    <p id="plugin-attribution"><span class="powered-by-google"></span></p>
		<nav class="nav-tab-wrapper wp-clearfix" aria-label="Secondary menu">
            <a href="#setup" class="nav-tab<?php echo ($this->section == NULL) ? ' nav-tab-active' : ''; ?>"><span class="dashicons dashicons-admin-settings"></span> <?php echo __('Setup'); ?></a>

<?php if ($this->valid()): ?>
            <a href="#shortcodes" class="nav-tab<?php echo ($this->section == 'shortcodes') ? ' nav-tab-active' : ''; ?>"><span class="dashicons dashicons-editor-code"></span> <?php echo __('Shortcodes'); ?></a><?php endif; ?>

<?php if ($this->count_reviews_all >= 1): ?>
            <a href="#reviews" class="nav-tab<?php echo ($this->section == 'reviews') ? ' nav-tab-active' : ''; ?>"><span class="dashicons dashicons-star-filled"></span> <?php echo __('Reviews'); ?> <span class="count"><?php echo esc_html($this->count_reviews_all); ?></span></a><?php endif; ?>

<?php if ($this->retrieved_data_check()): ?>
            <a href="#data" class="nav-tab<?php echo ($this->section == 'data') ? ' nav-tab-active' : ''; ?>"><span class="dashicons dashicons-cloud"></span> <?php echo __('Retrieved Data'); ?></a><?php endif; ?>

<?php if ($this->valid()): ?>
            <a href="#advanced" class="nav-tab<?php echo ($this->section == 'advanced') ? ' nav-tab-active' : ''; ?>"><span class="dashicons dashicons-buddicons-groups"></span> <?php echo __('Advanced'); ?></a><?php endif; ?>

            <a href="#about" class="nav-tab<?php echo ($this->section == 'about') ? ' nav-tab-active' : ''; ?>"><span class="dashicons dashicons-heart"></span> <?php echo __('About'); ?></a>
		</nav>
		<div id="setup" class="section<?php echo (($this->section != NULL) ? ' hide' : '').((preg_match('/\bdark\b/i', get_option('google_business_reviews_rating_reviews_theme'))) ? ' dark' : '').((preg_match('/\bfonts\b/i', get_option('google_business_reviews_rating_reviews_theme'))) ? ' fonts' : '') ?>"<?php echo ($this->data_hunter('test')) ? ' data-hunter="' . esc_attr($this->data_hunter('json')) . '"' : ''; ?>>
            <form method="post" action="options.php" id="google-business-reviews-rating-setup">
<?php
	settings_fields('google_business_reviews_rating_settings');
	do_settings_sections('google_business_reviews_rating_settings');
	
if ($this->valid()): ?>
            <h2><?php echo __('Reviews and Rating'); ?></h2>
            <p><?php echo __('The general settings for your reviews and rating elements. Shortcode parameters will take precedence.'); ?></p>
            <table id="reviews-rating-settings" class="form-table">
                <tr>
                    <th scope="row"><label for="review-limit"><?php echo __('Review Limit'); ?></label></th>
                    <td>
                        <p class="input">
                            <input type="number" id="review-limit" class="small-text" name="google_business_reviews_rating_review_limit" value="<?php echo esc_attr(get_option('google_business_reviews_rating_review_limit')); ?>" placeholder="&mdash;" step="1" min="0" max="<?php echo ($this->count_reviews_all > 1) ? esc_attr($this->count_reviews_all) : 1; ?>">
                            <label for="review-limit-hide"><input type="radio" id="review-limit-hide" name="google_business_reviews_rating_review_limit_option" value="0"<?php echo (!$this->show_reviews) ? ' checked="checked"' : ''; ?>> <?php echo __('Hide Reviews'); ?></label>
                            <label for="review-limit-set"><input type="radio" id="review-limit-set" name="google_business_reviews_rating_review_limit_option" value="1"<?php echo ($this->show_reviews && is_numeric(get_option('google_business_reviews_rating_review_limit'))) ? ' checked="checked"' : ''; ?>> <?php echo __('Show Limited Reviews'); ?></label>
                            <label for="review-limit-all"><input type="radio" id="review-limit-all" name="google_business_reviews_rating_review_limit_option" value="all"<?php echo ($this->show_reviews && !is_numeric(get_option('google_business_reviews_rating_review_limit'))) ? ' checked="checked"' : ''; ?>> <?php echo __('Show All Reviews'); ?></label>
                        </p>
                        <p class="description"><?php printf(esc_html__('You currently have %1$s active reviews retrieved from Google Places (and imported).'), $this->count_reviews_active); ?></p>
                    </td>
                </tr>
                <tr class="show-reviews">
                    <th scope="row"><label for="review-sort"><?php echo __('Review Sort'); ?></label></th>
                    <td>
                        <select id="review-sort" name="google_business_reviews_rating_review_sort"<?php echo (!$this->show_reviews) ? ' disabled="disabled"' : ''; ?>>
<?php
	foreach ($this->review_sort_options as $k => $a)
	{
?>
                            <option value="<?php echo (($k == 'relevance_desc') ? '' : esc_attr($k)); ?>"<?php echo (get_option('google_business_reviews_rating_review_sort') == $k || $k == 'relevance_desc' && get_option('google_business_reviews_rating_review_sort') == NULL) ? ' selected' : ''; ?>><?php echo esc_attr($a['name'] . ((isset($a['min_max_values']) && is_array($a['min_max_values'])) ? ' (' . implode(' → ', $a['min_max_values']) . ')' : '')); ?></option>
<?php
	}
?>
                        </select>
                    </td>
                </tr>
                <tr class="show-reviews">
                    <th scope="row"><label for="rating-min"><?php echo __('Rating Range'); ?></label></th>
                    <td>
                        <select id="rating-min" class="min" name="google_business_reviews_rating_rating_min"<?php echo (!$this->show_reviews) ? ' disabled="disabled"' : ''; ?>>
                            <option value=""<?php echo (get_option('google_business_reviews_rating_rating_min') == NULL) ? ' selected' : ''; ?>>&mdash;</option>
<?php
	for ($i = 1; $i <= 5; $i++)
	{
?>

                            <option value="<?php echo esc_attr($i); ?>"<?php echo (get_option('google_business_reviews_rating_rating_min') == $i) ? ' selected' : ''; ?>><?php echo esc_attr($i); ?></option>
<?php
	}
?>
                        </select> – 
                        <select id="rating-max" class="max" name="google_business_reviews_rating_rating_max"<?php echo (!$this->show_reviews) ? ' disabled="disabled"' : ''; ?>>
                            <option value=""<?php echo (get_option('google_business_reviews_rating_rating_max') == NULL) ? ' selected' : ''; ?>>&mdash;</option>
<?php
	for ($i = 1; $i <= 5; $i++)
	{
?>
                            <option value="<?php echo esc_attr($i); ?>"<?php echo (get_option('google_business_reviews_rating_rating_max') == $i) ? ' selected' : ''; ?>><?php echo esc_attr($i); ?></option>
<?php
	}
?>
                        </select>
                    </td>
                </tr>
                <tr class="show-reviews">
                    <th scope="row"><label for="rating-min"><?php echo __('Review Text Length Range'); ?></label></th>
                    <td>
                        <input type="number" id="review-text-min" class="min" name="google_business_reviews_rating_review_text_min" value="<?php echo esc_attr(get_option('google_business_reviews_rating_review_text_min')); ?>" placeholder="&mdash;" step="1" min="0"<?php echo (!$this->show_reviews) ? ' disabled="disabled"' : ''; ?>> – 
                        <input type="number" id="review-text-max" class="min" name="google_business_reviews_rating_review_text_max" value="<?php echo esc_attr(get_option('google_business_reviews_rating_review_text_max')); ?>" placeholder="&mdash;" step="1" min="0"<?php echo (!$this->show_reviews) ? ' disabled="disabled"' : ''; ?>> 
                    </td>
                </tr>
                <tr class="show-reviews">
                    <th scope="row"><?php echo __('Review Excerpt Length'); ?></th>
                    <td>
                        <p class="input">
                            <input type="number" id="review-text-excerpt-length" class="small-text" name="google_business_reviews_rating_review_text_excerpt_length" value="<?php echo esc_attr(get_option('google_business_reviews_rating_review_text_excerpt_length')); ?>" placeholder="&mdash;" step="1" min="20"<?php echo (!$this->show_reviews) ? ' disabled="disabled"' : ''; ?>>
                        </p>
                        <p class="description"><?php echo sprintf(__('The characters displayed before a <a href="%s" class="void">… More</a> toggle is shown to reveal the full review text. Leave empty for no excerpt.'), '#review-text-excerpt-length'); ?></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="reviews-theme"><?php echo __('Theme'); ?></label></th>
                    <td>
                        <select id="reviews-theme" name="google_business_reviews_rating_reviews_theme"<?php echo (!get_option('google_business_reviews_rating_stylesheet') ? ' disabled="disabled"' : ''); ?>>
							<option value=""<?php echo (get_option('google_business_reviews_rating_reviews_theme') == NULL) ? ' selected' : ''; ?>><?php echo __('Default'); ?></option>
<?php
	foreach ($this->reviews_themes as $k => $name)
	{
?>
                            <option value="<?php echo esc_attr($k); ?>"<?php echo (get_option('google_business_reviews_rating_reviews_theme') == $k) ? ' selected' : ''; ?>><?php echo esc_attr($name); ?></option>
<?php
	}
?>
                        </select>
                        <label for="stylesheet"><input type="checkbox" id="stylesheet" name="google_business_reviews_rating_stylesheet" value="1"<?php echo (get_option('google_business_reviews_rating_stylesheet') ? ' checked="checked"' : ''); ?>> <?php echo __('Load Stylesheet'); ?></label>
                        <p id="theme-recommendation-badge" class="description"><?php echo __('We recommend hiding all reviews with this theme.'); ?></p>
                        <p id="theme-recommendation-columns" class="description"><?php echo __('We recommend matching the limit to multiples of columns'); ?></p>
                    </td>
                </tr>
                <tr<?php echo ((get_option('google_business_reviews_rating_icon') == NULL) ? ' class="empty"' : ''); ?>>
                    <th scope="row"><?php echo __('Icon'); ?></th>
                    <td>
                        <p class="icon-image<?php echo (get_option('google_business_reviews_rating_icon') == NULL) ? ' empty' : ''; ?>">
                            <span id="icon-image-preview" class="image thumbnail"><?php echo (get_option('google_business_reviews_rating_icon') != NULL) ? preg_replace('/\s+(?:width|height)="\d*"/i', '', wp_get_attachment_image($this->icon_image_id, 'large')) : ''; ?></span>
                            <span class="set"><button type="button" id="icon-image" class="button button-secondary ui-button" name="icon-image" value="1" data-set-text="<?php echo esc_attr(__('Choose Image')); ?>" data-replace-text="<?php echo esc_attr(__('Replace')); ?>"><span class="dashicons dashicons-format-image"></span> <?php echo (get_option('google_business_reviews_rating_icon') == NULL) ? esc_attr(__('Choose Image')) : esc_attr(__('Replace')); ?></button></span>
                            <span class="delete"<?php echo (get_option('google_business_reviews_rating_icon') == NULL) ? ' style="display: none;"' : ''; ?>><button type="button" id="icon-image-delete" class="button button-secondary ui-button" name="icon-image-delete" value="1"><span class="dashicons dashicons-no"></span> Remove</button></span>
                            <input type="hidden" id="icon-image-id" name="google_business_reviews_rating_icon" value="<?php echo esc_attr($this->icon_image_id); ?>">
                        </p>
                    </td>
                </tr>
            </table>
            <h2 id="reviews-rating-preview-heading" class="hide"><a href="reviews-rating-preview"><span class="dashicons dashicons-arrow-right"></span> <?php echo __('Preview'); ?></a></h2>
            <div id="reviews-rating-preview" class="hide <?php echo esc_attr(get_option('google_business_reviews_rating_reviews_theme')); ?>">
            </div>

<?php else: ?>
            <input type="hidden" id="review-limit" name="google_business_reviews_rating_review_limit" value="<?php echo esc_attr(get_option('google_business_reviews_rating_review_limit')); ?>">
            <input type="hidden" id="rating-min" name="google_business_reviews_rating_rating_min" value="<?php echo esc_attr(get_option('google_business_reviews_rating_rating_min')); ?>">
            <input type="hidden" id="rating-max" name="google_business_reviews_rating_rating_max" value="<?php echo esc_attr(get_option('google_business_reviews_rating_rating_max')); ?>">
            <input type="hidden" id="review-text-min" name="google_business_reviews_rating_review_text_min" value="<?php echo esc_attr(get_option('google_business_reviews_rating_review_text_min')); ?>">
            <input type="hidden" id="review-text-max" name="google_business_reviews_rating_review_text_max" value="<?php echo esc_attr(get_option('google_business_reviews_rating_review_text_max')); ?>">
            <input type="hidden" id="review-text-excerpt-length" name="google_business_reviews_rating_review_text_excerpt_length" value="<?php echo esc_attr(get_option('google_business_reviews_rating_review_text_excerpt_length')); ?>">
            <input type="hidden" id="reviews-theme" name="google_business_reviews_rating_reviews_theme" value="<?php echo esc_attr(get_option('google_business_reviews_rating_reviews_theme')); ?>">
            <input type="hidden" id="stylesheet" name="google_business_reviews_rating_stylesheet" value="<?php echo esc_attr(get_option('google_business_reviews_rating_stylesheet')); ?>">
            <input type="hidden" id="icon" name="google_business_reviews_rating_icon" value="<?php echo esc_attr(get_option('google_business_reviews_rating_icon')); ?>">
            <input type="hidden" id="structured-data" name="google_business_reviews_rating_structured_data" value="<?php echo esc_attr(get_option('google_business_reviews_rating_structured_data')); ?>">
            <input type="hidden" id="telephone" name="google_business_reviews_rating_telephone" value="<?php echo esc_attr(get_option('google_business_reviews_rating_telephone')); ?>">
            <input type="hidden" id="business-type" name="google_business_reviews_rating_business_type" value="<?php echo esc_attr(get_option('google_business_reviews_rating_business_type')); ?>">
            <input type="hidden" id="price-range" name="google_business_reviews_rating_price_range" value="<?php echo esc_attr(get_option('google_business_reviews_rating_price_range')); ?>">
            <input type="hidden" id="logo" name="google_business_reviews_rating_logo" value="<?php echo esc_attr(get_option('google_business_reviews_rating_logo')); ?>">
<?php endif; ?>

<?php if (!$this->demo && $this->valid() && $this->structured_data(TRUE)): ?>
            <h2><?php echo __('Structured Data'); ?></h2>
            <p><?php echo __(sprintf('Allow search engines to easily read review data for your website using Structured Data %s which includes general business information and recent, relevant and visible reviews.', '(<a href="//schema.org" target="_blank">Schema.org</a>)')); ?></p>
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="structured-data"><?php echo __('Structured Data'); ?></label></th>
                    <td>
                        <p>
                            <label for="structured-data"><input type="checkbox" id="structured-data" name="google_business_reviews_rating_structured_data" value="1"<?php echo (get_option('google_business_reviews_rating_structured_data') ? ' checked="checked"' : ''); ?><?php echo ($this->count_reviews_active == 0) ? ' disabled="disabled"' : ''; ?>> <?php echo __(esc_html('Enable and insert Structured Data on home page.')); ?></label>
                            <button type="button" name="structured-data-preview" id="structured-data-preview" class="button button-secondary structured-data"<?php echo (get_option('google_business_reviews_rating_structured_data') ? '' : ' style="display: none"'); ?>><span class="dashicons dashicons-text-page"></span> <?php echo esc_html(__('Preview')); ?></button>
						</p>
                    </td>
                </tr>
                <tr class="structured-data"<?php echo (get_option('google_business_reviews_rating_structured_data') ? '' : ' style="display: none"'); ?>>
                    <th scope="row"><label for="telephone"><?php echo __('Telephone'); ?></label></th>
                    <td>
                        <input type="tel" id="telephone" name="google_business_reviews_rating_telephone" placeholder="&mdash;" value="<?php echo esc_attr(get_option('google_business_reviews_rating_telephone')); ?>">
                    </td>
                </tr>
                <tr class="structured-data"<?php echo (get_option('google_business_reviews_rating_structured_data') ? '' : ' style="display: none"'); ?>>
                    <th scope="row"><label for="business-type"><?php echo __('Business Type'); ?></label></th>
                    <td>
                        <select id="business-type" name="google_business_reviews_rating_business_type">
                        <option value=""<?php echo (get_option('google_business_reviews_rating_business_type') == NULL) ? ' selected' : ''; ?>><?php echo __('Not Applicable/Other'); ?></option>
<?php
	foreach ($this->business_types as $k => $name)
	{
?>
                            <option value="<?php echo esc_attr($k); ?>"<?php echo (get_option('google_business_reviews_rating_business_type') == $k) ? ' selected' : ''; ?>><?php echo esc_attr($name); ?></option>
<?php
	}
?>
                        </select>
                    </td>
                </tr>
                <tr class="structured-data"<?php echo (get_option('google_business_reviews_rating_structured_data') ? '' : ' style="display: none"'); ?>>
                    <th scope="row"><label for="price-range"><?php echo __('Price Range'); ?></label></th>
                    <td>
                        <select id="price-range" name="google_business_reviews_rating_price_range">
                            <option value=""<?php echo (get_option('google_business_reviews_rating_price_range') == NULL) ? ' selected' : ''; ?>><?php echo esc_attr(__('Not Applicable')); ?></option>
<?php
	foreach ($this->price_ranges as $k => $a)
	{
?>
                            <option value="<?php echo esc_attr($k); ?>"<?php echo (get_option('google_business_reviews_rating_price_range') == $k) ? ' selected' : ''; ?>><?php echo esc_attr($a['name']); ?></option>
<?php
	}
?>
                        </select>
                    </td>
                </tr>
                <tr id="logo-image-row" class="structured-data<?php echo ((get_option('google_business_reviews_rating_logo') == NULL) ? ' empty' : ''); ?>"<?php echo ((get_option('google_business_reviews_rating_structured_data') ? '' : ' style="display: none"')); ?>>
                    <th scope="row"><?php echo __('Logo'); ?></th>
                    <td>
                        <p class="logo-image<?php echo (get_option('google_business_reviews_rating_logo') == NULL) ? ' empty' : ''; ?>">
                            <span id="logo-image-preview" class="image thumbnail"><?php echo (get_option('google_business_reviews_rating_logo') != NULL) ? preg_replace('/\s+(?:width|height)="\d*"/i', '', wp_get_attachment_image($this->logo_image_id, 'large')) : ''; ?></span>
                            <span class="set"><button type="button" id="logo-image" class="button button-secondary ui-button" name="logo-image" value="1" data-set-text="<?php echo esc_attr(__('Choose Image')); ?>" data-replace-text="<?php echo esc_attr(__('Replace')); ?>"><span class="dashicons dashicons-format-image"></span> <?php echo (get_option('google_business_reviews_rating_logo') == NULL) ? esc_attr(__('Choose Image')) : esc_attr(__('Replace')); ?></button></span>
                            <span class="delete"<?php echo (get_option('google_business_reviews_rating_logo') == NULL) ? ' style="display: none;"' : ''; ?>><button type="button" id="logo-image-delete" class="button button-secondary ui-button" name="logo-image-delete" value="1"><span class="dashicons dashicons-no"></span> Remove</button></span>
                            <input type="hidden" id="logo-image-id" name="google_business_reviews_rating_logo" value="<?php echo esc_attr($this->logo_image_id); ?>">
                        </p>
                    </td>
                </tr>
            </table>

<?php endif; ?>
            <h2><?php echo __('Google Credentials'); ?></h2>
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="api-key"><?php echo __('Google API Key'); ?></label></th>
                    <td>
                        <p class="input">
                            <input type="text" id="api-key" class="regular-text code" name="google_business_reviews_rating_api_key" placeholder="<?php echo esc_attr(str_repeat('x', 40)); ?>" value="<?php echo esc_attr(get_option('google_business_reviews_rating_api_key')); ?>">
                        </p>
                        <p class="description<?php echo ((get_option('google_business_reviews_rating_api_key') == NULL) ? ' unset' : ''); ?>"><?php echo sprintf(__('In order to retrieve Google Business data, you’ll need your own <a href="%s" target="_blank">API Key</a>, with API: <span class="highlight">Places API</span> and restrict to IP: <span class="highlight">%s</span>.'), 'https://developers.google.com/maps/documentation/javascript/get-api-key', esc_html($_SERVER['SERVER_ADDR'])); ?></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="place-id"><?php echo __('Google Place ID'); ?></label></th>
                    <td>
                        <p class="input">
                            <input type="text" id="place-id" class="regular-text code" name="google_business_reviews_rating_place_id" placeholder="<?php echo esc_attr(str_repeat('x', 26)); ?>" value="<?php echo esc_attr(get_option('google_business_reviews_rating_place_id')); ?>">
                        </p>
                        <p class="description"><?php echo sprintf(__('You can find your unique place ID using the <a href="%s" target="_blank">Place ID Finder</a>.'), 'https://developers.google.com/places/place-id'); ?></p>
                    </td>
                </tr>
<?php if ($this->valid()): ?>
                <tr>
                    <th scope="row"><label for="place-name"><?php echo __('Place Name'); ?></label></th>
                    <td>
                        <p class="input">
                            <input type="text" id="place-name" class="regular-text" name="place_name" placeholder="<?php echo esc_attr(str_repeat('x', 26)); ?>" value="<?php echo esc_attr($this->data['result']['name']); ?>" disabled="disabled">
                        </p>
<?php if (!$this->demo): ?>
                        <p class="description"><?php echo sprintf(__('Edit the place name listing in <a href="%s" target="_blank">Google Maps</a>.'), esc_attr($this->data['result']['url'])); ?></p>
<?php endif; ?>
                    </td>
                </tr>
<?php endif; ?>
                <tr>
                    <th scope="row"><label for="language"><?php echo __('Language'); ?></label></th>
                    <td>
                        <select id="language" name="google_business_reviews_rating_language">
                        <option value=""<?php echo (get_option('google_business_reviews_rating_language') == NULL) ? ' selected' : ''; ?>><?php echo __('Select'); ?></option>
<?php
	foreach ($this->languages as $k => $name)
	{
?>
                            <option value="<?php echo esc_attr($k); ?>"<?php echo (get_option('google_business_reviews_rating_language') == $k) ? ' selected' : ''; ?>><?php echo esc_attr($name); ?></option>
<?php
	}
?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="update"><?php echo __('Update'); ?></label></th>
                    <td>
                        <select id="update" name="google_business_reviews_rating_update">
<?php
	foreach ($this->updates as $k => $name)
	{
?>
                            <option value="<?php echo esc_attr($k); ?>"<?php echo (get_option('google_business_reviews_rating_update') == $k) ? ' selected' : ''; ?>><?php echo esc_attr($name); ?></option>
<?php
	}
?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="demo"><?php echo __('Demo Mode'); ?></label></th>
                    <td>
                        <label for="demo"><input type="checkbox" id="demo" name="google_business_reviews_rating_demo" value="1"<?php echo (get_option('google_business_reviews_rating_demo') ? ' checked="checked"' : ''); ?>> <?php echo __('Enable Demo Mode with dummy data'); ?></label>
                    </td>
                </tr>
            </table>
			<?php submit_button(); ?>
		</form>
    </div>

    <div id="shortcodes" class="section<?php echo ($this->section != 'shortcodes') ? ' hide' : ''; ?>">
        <form method="post" action="options.php" id="google-business-reviews-rating-shortcodes">
	        <h2><?php echo __('Shortcodes'); ?></h2>
            <h3><?php echo __('Reviews'); ?></h3>
            <table class="form-table">
                <tr>
                    <th><?php echo __('Google reviews'); ?></th>
                    <td><input id="<?php $id = 0; echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating]" readonly></td>
                </tr>
                <tr>
                    <th><?php echo __('Google reviews (IDs)'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating id=&quot;1,5,3&quot;]" readonly></td>
                </tr>
                <tr>
                    <th rowspan="4"><?php echo __('Google reviews (options)'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating theme=&quot;Dark Background with Fonts&quot; min=3 max=5 offset=0 limit=3 summary=&quot;yes&quot; icon=&quot;no&quot; excerpt=160 more=&quot;read more&quot;]" readonly></td>
                </tr>
                <tr>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating theme=&quot;dark&quot; vicinity=&quot;E4, London&quot; reviews_link=&quot;View Google Reviews&quot; write_review_link=&quot;Leave A Review&quot;]" readonly></td>
                </tr>
                <tr>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating icon=&quot;/wp-content/uploads/logo.png&quot; avatar=&quot;false&quot; review_item_order=&quot;text first&quot; review_text_min=200]" readonly></td>
                </tr>
                <tr>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating place_id=&quot;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&quot; animate=&quot;no&quot; review_text=&quot;no&quot; attribution=&quot;yes&quot;]" readonly></td>
                </tr>
            </table>
            <h3><?php echo __('Links'); ?></h3>
            <table class="form-table">
                <tr>
                    <th><?php echo __('Google reviews link'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="<?php echo esc_attr('[reviews_rating_link reviews_link]' . __('Our Reviews on Google') . '[/reviews_rating_link]'); ?>" readonly></td>
                </tr>
                <tr>
                    <th rowspan="3"><?php echo __('Google reviews link (options)'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="<?php echo esc_attr('[reviews_rating_link reviews_link class="button" target="_blank"]' . __('Our Reviews on Google') . '[/reviews_rating_link]'); ?>" readonly></td>
                </tr>
                <tr>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="<?php echo esc_attr('[reviews_rating_link reviews_link]&lt;span class=&quot;google-icon&quot;&gt;&lt;/span&gt; ' . __('Our Reviews on Google') . '[/reviews_rating_link]'); ?>" readonly></td>
                </tr>
                <tr>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="<?php echo esc_attr('[reviews_rating_link reviews_link]' . __('Our Reviews on Google') . ' &lt;span class=&quot;google-icon black end&quot;&gt;&lt;/span&gt;[/reviews_rating_link]'); ?>" readonly></td>
                </tr>
                <tr>
                    <th><?php echo __('Write a Google review link'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="<?php echo esc_attr('[reviews_rating_link write_review_link]' . __('Leave Your Review on Google') . '[/reviews_rating_link]'); ?>" readonly></td>
                </tr>
                <tr>
                    <th><?php echo __('Google Maps link'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="<?php echo esc_attr('[reviews_rating_link maps_link]' . __('View Location on Google Maps') . '[/reviews_rating_link]'); ?>" readonly></td>
                </tr>
            </table>
            <h3><?php echo __('Text'); ?></h3>
            <table class="form-table">
                <tr>
                    <th><?php echo __('Google rating'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating rating]" readonly></td>
                </tr>
                <tr>
                    <th><?php echo __('Google review count'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating review_count]" readonly></td>
                </tr>
                <tr>
                    <th><?php echo __('Google reviews URL'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating reviews_url]" readonly></td>
                </tr>
                <tr>
                    <th><?php echo __('Write a Google review URL'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating write_review_url]" readonly></td>
                </tr>
                <tr>
                    <th><?php echo __('Google Maps URL'); ?></th>
                    <td><input id="<?php echo 'shortcode-' . $id; $id++; ?>" name="shortcode[]" class="shortcode" type="text" value="[reviews_rating maps_url]" readonly></td>
                </tr>
            </table>
            
            <h2><?php echo __('Parameters'); ?></h2>
            <p><?php echo __('There are quite a wide range of parameters that are accepted, so a guide will help cover all the possibilities to customise the output of your reviews, links and text. Shortcode parameters will override the values in the Setup. All parameters are optional.'); ?></p>
            <table class="wp-list-table widefat fixed striped parameters">
                <tr>
                    <th class="parameter"><?php echo __('Parameter'); ?></th>
                    <th class="description"><?php echo __('Description'); ?></th>
                    <th class="accepted"><?php echo __('Accepted Values'); ?></th>
                    <th class="default"><?php echo __('Default'); ?></th>
                    <th class="boolean"><?php echo __('Reviews'); ?></th>
                    <th class="boolean"><?php echo __('Links'); ?></th>
                </tr>
                <tr id="parameter-limit">
                    <td class="parameter">limit</td>
                    <td class="description">Simply sets the number of reviews you would like listed. Do not set or leave this empty (<span class="code">NULL</span>) = all reviews and <span class="code">0</span> = hide reviews.</td>
                    <td class="accepted"><span class="code">NULL</span>, <span class="code">0</span>, <span class="code">1</span>, <span class="code">2</span>, &hellip;</td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-sort">
                    <td class="parameter">sort</td>
                    <td class="description">Your preference for sorting when 2 or more reviews are displayed. Leave empty (<span class="code">NULL</span>) to sort by Google&rsquo;s relevance.</td>
                    <td class="accepted"><span class="code">NULL</span>, <?php $review_sort_options = array_keys($this->review_sort_options); array_shift($review_sort_options); echo esc_html(implode(', ', $review_sort_options)); ?></td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-offset">
                    <td class="parameter">offset</td>
                    <td class="description">When the limit is 1 or more, you can offset the review  results to &ldquo;jump&rdquo; forward.</td>
                    <td class="accepted"><span class="code">0</span>, <span class="code">1</span>, <span class="code">2</span>, &hellip;</td>
                    <td class="default"><span class="code">0</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-id">
                    <td class="parameter">id</td>
                    <td class="description">Select one or more reviews by their ID (see Reviews). Ordering is maintained when a comma separated listed is set; enclose in quotes for two or more IDs.</td>
                    <td class="accepted"><span class="code">1</span>, <span class="code">2</span>, <span class="code">3</span>, &hellip; or &quot;1, 5, 6, 2&quot;</td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-place-id">
                    <td class="parameter">place_id</td>
                    <td class="description">If you have more than one Place in the retrieved reviews, you can filter by the Place ID.</td>
                    <td class="accepted"><em>String</em></td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-language">
                    <td class="parameter">language</td>
                    <td class="description">Filter results based on the language using the two letter language code. Empty reviews have no language  will always appear.</td>
                    <td class="accepted">en, fr, de, &hellip;</td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-theme">
                    <td class="parameter">theme</td>
                    <td class="description">Set a theme based on your overall visual requirements. You may use the full text name (not recommended as these are subject to change) or the actual value listed here. These values match with the class attribute set to the main HTML element.</td>
                    <td class="accepted"><span class="code">NULL</span>, <?php echo esc_html('"' . implode('", "', array_keys($this->reviews_themes)) . '"'); ?></td>
                    <td class="default">light</td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-min">
                    <td class="parameter">min</td>
                    <td class="description">Set to filter out any ratings that fall below this minimum value.</td>
                    <td class="accepted"><span class="code">1</span>, <span class="code">2</span>, <span class="code">3</span>, <span class="code">4</span>, <span class="code">5</span></td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-max">
                    <td class="parameter">max</td>
                    <td class="description">Set to filter out any ratings that lie above this maximum value.</td>
                    <td class="accepted"><span class="code">1</span>, <span class="code">2</span>, <span class="code">3</span>, <span class="code">4</span>, <span class="code">5</span></td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-summary">
                    <td class="parameter">summary</td>
                    <td class="description">Show or hide the summary section &mdash; containing the icon, business name and vicinity.</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off</td>
                    <td class="default"><span class="code">TRUE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-icon">
                    <td class="parameter">icon</td>
                    <td class="description">Show or hide business icon &mdash; or specify your own image replacement (jpg, jpeg, png, gif, svg extensions are supported).</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off, <em>/url/to/image.jpg</em></td>
                    <td class="default"><span class="code">TRUE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-name">
                    <td class="parameter">name</td>
                    <td class="description">Show or hide business name &mdash; or specify your own choice of business name.</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off, <em>Any string</em></td>
                    <td class="default"><span class="code">TRUE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-vicinity">
                    <td class="parameter">vicinity</td>
                    <td class="description">Show or hide business vicinity according to Google &mdash; or specify your own text replacement.</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off, <em>Any string</em></td>
                    <td class="default"><span class="code">TRUE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-count">
                    <td class="parameter">count</td>
                    <td class="description">Show or hide total review/rating count.</td>
                    <td class="accepted">yes, no, true, false, show, hide, on, off</td>
                    <td class="default"><span class="code">TRUE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-review-word">
                    <td class="parameter">review_word</td>
                    <td class="description">Word displayed after the total review/rating count number in the summary. For completeness, you may separate singular and plural with , or / characters.</td>
                    <td class="accepted"><em>Any valid string</em></td> 
                    <td class="default"><?php echo __('review'); ?>/<?php echo __('reviews'); ?></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-animate">
                    <td class="parameter">animate</td>
                    <td class="description">Animate the rating stars on load or set as static (<span class="code">FALSE</span>).</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off, animate, static</td>
                    <td class="default"><span class="code">TRUE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-review-text">
                    <td class="parameter">review_text</td>
                    <td class="description">Show or hide all review text leaving just the names, ratings and relative times.</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off</td>
                    <td class="default"><span class="code">TRUE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-review-text-min">
                    <td class="parameter">review_text_min</td>
                    <td class="description">Filter by a minimum review text character count. Empty (<span class="code">NULL</span>) or <span class="code">0</span> = no minimum. </td>
                    <td class="accepted"><span class="code">NULL</span>, <span class="code">0</span>, <span class="code">1</span>, <span class="code">2</span>, &hellip;</td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-review-text-max">
                    <td class="parameter">review_text_max</td>
                    <td class="description">Filter by a maximum review text character count. Empty (<span class="code">NULL</span>) = no maximum. <span class="code">0</span> = no review text. </td>
                    <td class="accepted"><span class="code">NULL</span>, <span class="code">0</span>, <span class="code">1</span>, <span class="code">2</span>, &hellip;</td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-review-text-inc">
                    <td class="parameter">review_text_inc</td>
                    <td class="description">Require a specific word or words in review text. Case insensitive; full word match. Multiple required words as a comma separated list.</td>
                    <td class="accepted">excellent or &quot;good, superb, great, &hellip;&quot;, <em>Any string</em></td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-review-text-exc">
                    <td class="parameter">review_text_exc</td>
                    <td class="description">Filter out reviews containing a specific word or words. Case insensitive; full word match. Multiple required words as a comma separated list.</td>
                    <td class="accepted">poor or &quot;average, bad, avoid, &hellip;&quot;, <em>Any string</em></td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-excerpt">
                    <td class="parameter">excerpt</td>
                    <td class="description">Characters in review text to show before a &ldquo;more&rdquo; toggle link is shown to expand the remainder of the review. Empty (<span class="code">NULL</span>) = no excerpt; show all review text.</td>
                    <td class="accepted"><span class="code">NULL</span>, <span class="code">20</span>, <span class="code">21</span>, <span class="code">22</span>, &hellip;</td>
                    <td class="default"><span class="code">235</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-more">
                    <td class="parameter">more</td>
                    <td class="description">Text to use in the &ldquo;more&rdquo; toggle link.</td>
                    <td class="accepted"><em>Any string</em></td> 
                    <td class="default"><?php echo __('More'); ?></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-date">
                    <td class="parameter">date</td>
                    <td class="description">Choose how to display the review dates, either using the <a href="https://www.php.net/date" target="_blank">PHP date</a>, relative text or to hide entirely. Actual review date may be an approximation if imported.</td>
                    <td class="accepted">relative, no, false, 0, hide, off, <em>Any valid string</em></td>
                    <td class="default">relative</td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-link">
                    <td class="parameter">link</td>
                    <td class="description">Set the entire element as a link to all reviews listed externally at Google (only if no reviews listed). Recommended with Badge theme.</td>
                    <td class="accepted">reviews, &quot;write review&quot;, yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, <em>URL string</em></td>
                    <td class="default"><span class="code">FALSE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-reviews-link">
                    <td class="parameter">reviews_link</td>
                    <td class="description">Show a link/button for all reviews listed externally at Google. Specify custom text string to appear as the link text. This is hidden by default.</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off, <em>Any string</em></td>
                    <td class="default"><span class="code">FALSE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-write-review-link">
                    <td class="parameter">write_review_link</td>
                    <td class="description">Show a link/button to  allow a visitor to leave a review at Google. Specify custom text string to appear as the link text. This is hidden by default.</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off, <em>Any string</em></td>
                    <td class="default"><span class="code">FALSE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-avatar">
                    <td class="parameter">avatar</td>
                    <td class="description">Show or hide users&rsquo; avatars &mdash; or specify your own [single] image replacement (jpg, jpeg, png, gif, svg extensions are supported).</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off, <em>/url/to/image.jpg</em></td>
                    <td class="default"><span class="code">TRUE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-name-format">
                    <td class="parameter">name_format</td>
                    <td class="description">Control the format of reviewers&rsquo; names such as (e.g. initials or last name initials).</td>
                    <td class="accepted"><span class="code">NULL</span>, &quot;full name&quot;, &quot;intials&quot;, &quot;first initial&quot;, &quot;last initial&quot;, &quot;intials with dots&quot;, &quot;first initial with dot&quot;, &quot;last initial with dot&quot;, &quot;initials with dots and space&quot;,  &quot;first initial with dot and space&quot;, &quot;last initial with dot and space&quot;</td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-review-item-order">
                    <td class="parameter">review_item_order</td>
                    <td class="description">Change the ordering of each review item  &mdash; review text can be set to appear at the top of each entry. Add <em>inline</em> to set the author name, stars and date inline. This may be extended if there is a <a href="https://designextreme.com/wordpress/">demand</a>.</td>
                    <td class="accepted"><span class="code">NULL</span>, &quot;text first&quot;, &quot;text last&quot;, inline, &quot;text first inline&quot;, &quot;text last inline&quot;</td>
                    <td class="default">text last</td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-attribution">
                    <td class="parameter">attribution</td>
                    <td class="description">Show or hide the &ldquo;powered by Google&rdquo; attribution.</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off, light, dark</td>
                    <td class="default"><span class="code">TRUE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-html-tags">
                    <td class="parameter">html_tags</td>
                    <td class="description">Set your own HTML tags for elements such as replacing <span class="code">&lt;h3&gt;</span> with <span class="code">&lt;h3&gt;</span>. Any sequence length accepted; separated by commas for: heading, vicinity, rating, list, list item, buttons, attribution and errors.</td>
                    <td class="accepted">h3 or &quot;h4, div, div, <em>&hellip;&quot;</em></td>
                    <td class="accepted"><?php echo esc_html(implode(', ', $this->default_html_tags)); ?></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-class">
                    <td class="parameter">class</td>
                    <td class="description">Set the class attribute for main HTML element or the single anchor link. Use <em>js-links</em> for an alternative <em><?php echo __('More'); ?></em> toggle event. Separated by spaces; not commas.</td>
                    <td class="accepted"><em>Any valid string</em></td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                </tr>
                <tr id="parameter-link-class">
                    <td class="parameter">link_class</td>
                    <td class="description">Specifically set the class attribute for a link or links. Separated by spaces; not commas.</td>
                    <td class="accepted"><em>Any valid string</em></td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                </tr>
                <tr id="parameter-reviews-link-class">
                    <td class="parameter">reviews_link_class</td>
                    <td class="description">Set the class attribute for the Google reviews link only. Separated by spaces; not commas.</td>
                    <td class="accepted"><em>Any valid string</em></td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-write-review-link-class">
                    <td class="parameter">write_review_link_class</td>
                    <td class="description">Set the class attribute for the Write a Google review link only. Separated by spaces; not commas.</td>
                    <td class="accepted"><em>Any valid string</em></td>
                    <td class="default"><span class="code">NULL</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-target">
                    <td class="parameter">target</td>
                    <td class="description">Set the anchor link&rsquo;s <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">target</a>. Empty (<span class="code">NULL</span>) to remove attribute.</td>
                    <td class="accepted"><span class="code">NULL</span>, <em>Any valid string</em></td>
                    <td class="default">_blank</td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                </tr>
                <tr id="parameter-stylesheet">
                    <td class="parameter">stylesheet</td>
                    <td class="description">Choose to not load the style sheet that makes your rating and reviews look good. <em>Not recommended as a parameter.</em></td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off</td>
                    <td class="default"><span class="code">TRUE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-multiplier">
                    <td class="parameter">multiplier</td>
                    <td class="description">If the stars aren&rsquo;t aligning in the overall rating, you can modify this value to adjust the width. Only applicable when used with class parameter: <em>version-1</em>.</td>
                    <td class="accepted"><em>Positive float number:</em> <span class="code">0.001</span> &ndash; <span class="code">10</span></td>
                    <td class="default"><span class="code">0.193</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-no"></span></td>
                </tr>
                <tr id="parameter-errors">
                    <td class="parameter">errors</td>
                    <td class="description">You can choose to hide error notices caused by lack of reviews, filtering that leads to no reviews or lack of source data. Defaults to <span class="code">WP_DEBUG</span> if defined in <em>wp-config.php</em>.</td>
                    <td class="accepted">yes, no, true, false, <span class="code">1</span>, <span class="code">0</span>, show, hide, on, off</td>
                    <td class="default"><span class="code">FALSE</span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                    <td class="boolean"><span class="dashicons dashicons-yes"></span></td>
                </tr>
            </table>
        </form>
    </div>

<?php if ($this->count_reviews_all >= 1): ?>
	<div id="reviews" class="section<?php echo ($this->section != 'reviews') ? ' hide' : ''; ?>">
		<h2><?php echo __('Reviews'); ?></h2>
		<p class="rating"><span class="rating-field"><?php echo esc_html(__('Rating') . ':'); ?></span> <span class="number"><?php echo esc_html(number_format($this->data['result']['rating'], 1)); ?></span> <span class="all-stars"><?php echo esc_html(str_repeat('★', 5)); ?><span class="rating-stars" style="<?php echo esc_attr('width: ' . round(0.835 * $this->data['result']['rating'], 2) . 'em;'); ?>"><?php echo esc_html(str_repeat('★', ceil($this->data['result']['rating']))); ?></span></span> <span class="count"><?php echo esc_html($this->data['result']['user_ratings_total'] . ' ' . (($this->data['result']['user_ratings_total'] == 1) ? __('review') : __('reviews'))) . ($this->data['result']['user_ratings_total'] > $this->count_reviews_all ? '*' : ''); ?></span></p>
<?php echo $this->get_reviews('html'); ?>
<?php if ($this->demo || $this->data['result']['user_ratings_total'] > $this->count_reviews_all): ?>
		<p class="note help">* <?php echo __('Please note: the total number of reviews listed at Google will not always match the number of reviews that are retrievable through its API.'); ?></p>
<?php endif; ?>
	</div>
<?php endif; ?>
<?php if ($this->retrieved_data_check()): ?>
	<div id="data" class="section<?php echo ($this->section != 'data') ? ' hide' : ''; ?>">
		<h2><?php echo __('Retrieved Data'); ?></h2>
<?php echo $this->get_data('html'); ?>
	</div>
<?php endif; ?>

<?php if ($this->valid()): ?>
	<div id="advanced" class="section<?php echo ($this->section != 'advanced') ? ' hide' : ''; ?>">
		<h2><?php echo __('Advanced'); ?></h2>
		<h3><?php echo __('Import'); ?></h3>
<?php if ($this->count_reviews_all >= 1 && $this->place_id != NULL && !$this->demo): ?>
        <div class="introduction">
<?php echo sprintf(__('
            <div class="entry-content advanced">
                <p>Okay, this bit is pretty advanced, if you can use the browser&rsquo;s inspector, you can load <em>all</em> the Google Reviews into your website with approximate dates.</p>
                <ol>
                  <li>Go to your <a href="%s" target="_blank">Google Reviews</a>;</li>
                  <li>Wait until it loads; expand all reviews by scrolling down;</li>
                  <li><em>Inspect</em> the overall popup &mdash; on the outer white margin: <span class="right-click">right click</span> | Inspect (Fig. 1, 2); </li>
                  <li>In the HTML Inspector panel, <span class="right-click">right click</span> on the &lt;div&gt; that highlights all the reviews and <em>Copy |</em> Outer HTML (Fig. 3); </li>
                  <li>Paste this HTML into the <label for="html-import">textarea below</label>:</li>
                </ol>
            </div>
            <div class="entry-meta advanced">
                <ul id="html-import-figures">
                    <li id="html-import-figure-1"><img src="%s" alt="Fig. 1: Import Step 3, Part 1"><span class="caption"><strong>Fig 1:</strong> In the margin, <span class="right-click">right click</span>.</span></li>
                    <li id="html-import-figure-2"><img src="%s" alt="Fig. 2: Import Step 3, Part 2"><span class="caption"><strong>Fig 2:</strong> Select <em>Inspect</em>.</span></li>
                    <li id="html-import-figure-3"><img src="%s" alt="Fig. 3: Import Step 4"><span class="caption"><strong>Fig 3:</strong> <span class="right-click">Right click</span> on the highlighted &lt;div&gt; tag and click <em>Copy | Outer HTML</em>.</span></li>
                </ul>
            </div>'),
			esc_attr('https://search.google.com/local/reviews?placeid=' . $this->place_id),
			esc_attr(plugin_dir_url(__FILE__) . 'images/advanced-html-import-step-3a.jpg'),
			esc_attr(plugin_dir_url(__FILE__) . 'images/advanced-html-import-step-3b.jpg'),
			esc_attr(plugin_dir_url(__FILE__) . 'images/advanced-html-import-step-4.jpg')); ?>
        </div>
        <p class="html-import">
            <textarea id="html-import" name="html-import" data-relative-times="<?php echo esc_attr(json_encode($this->relative_times)); ?>" placeholder="<?php echo '&lt;div class=&quot;lcorif fp-w&quot;&gt;&lt;div&gt;' . esc_attr(__('HTML from your Reviews on Google')) . '&lt;/div&gt;&lt;/div&gt;'; ?>"></textarea>
            <select id="html-import-review-text" name="html-import-review-text">
            	<option value="original" selected><?php echo esc_html(__('Only import original')); ?></option>
            	<option value="translation"><?php echo esc_html(__('Only import translation')); ?></option>
            	<option value=""><?php echo esc_html(__('Import full review text')); ?></option>
            </select>
            <label id="html-import-existing-label" for="html-import-existing"><input type="checkbox" id="html-import-existing" name="html-import-existing" value="1"> <?php echo __('Show existing review entries') ?></label>
        </p>
        <p class="submit">
        	<button type="button" name="import-process" id="import-process-button" class="button button-primary"><?php echo esc_html(__('Process')); ?></button>
            <button type="button" name="import" id="import-button" class="button button-primary"><?php echo esc_html(__('Import')); ?></button>
        	<button type="button" name="import-clear" id="import-clear-button" class="button button-secondary"><?php echo esc_html(__('Clear')); ?></button>
		</p>
<?php else: ?>
        <p><?php echo __('This section is only available when the following criteria are met:'); ?></p>
        <ul class="check-list">
        	<li><span class="dashicons dashicons-yes"></span> <?php echo __('Place ID is set;'); ?></li>
        	<li><?php echo (!$this->demo) ? '<span class="dashicons dashicons-yes"></span>' : '<span class="dashicons dashicons-no"></span>'; ?> <?php echo __('Demo mode is inactive;'); ?></li>
        	<li><?php echo ($this->demo) ? '<span class="dashicons dashicons-minus"></span>' : (($this->count_reviews_all >= 1) ? '<span class="dashicons dashicons-yes"></span>' : '<span class="dashicons dashicons-no"></span>'); ?> <?php echo __('One or more reviews retrieved from Google.'); ?></li>
        </ul>
<?php endif; ?>
        <form method="post" action="options.php" id="google-business-reviews-rating-settings-custom-styles">
            <h3><?php echo __('Custom Styles'); ?></h3>
            <p><?php echo __('If you prefer to manage your style sheet outside of your theme, you may add your own customized styles.'); ?></p>
            <p>
                <textarea id="custom-styles" name="google_business_reviews_rating_custom_styles" placeholder="&#x2F;&#x2A;&#x20;CSS&#x20;Document&#x20;&#x2A;&#x2F;&#13;&#10;&#13;&#10;.google-business-reviews-rating.badge&#x20;{&#13;&#10;&#x9;box-shadow:&#x20;0&#x20;14px&#x20;3px&#x20;-8px&#x20;rgba(0,&#x20;0,&#x20;0,&#x20;0.25),&#x20;0&#x20;0&#x20;0&#x20;3px&#x20;#F00&#x20;inset;&#13;&#10;}"><?php echo esc_html(get_option(__CLASS__ . '_custom_styles')); ?></textarea>
			</p>
            <p class="submit">
                <button type="button" name="reset" id="custom-styles-button" class="button button-primary"><?php echo esc_html(__('Save')); ?></button>
            </p>
        </form>
<?php if (!$this->demo): ?>
        <form method="post" action="options.php" id="google-business-reviews-rating-settings-cache">
            <h3><?php echo __('Cache'); ?></h3>
            <p><?php echo __('You may wish to clear the cache and retrieve fresh data from Google.'); ?></p>
            <p class="submit">
                <button type="button" name="clear-cache" id="clear-cache-button" class="button button-primary"><?php echo esc_html(__('Clear Cache')); ?></button>
            </p>
        </form>
<?php endif; ?>
        <form method="post" action="options.php" id="google-business-reviews-rating-settings-reset">
            <h3><?php echo __('Reset'); ?></h3>
            <p><?php echo __('At times you may wish to start over, so you can clear all the plugin&rsquo;s settings here.'); ?></p>
            <p id="reset-confirm-text">
                <label for="reset-all"><input type="checkbox" id="reset-all" name="google_business_reviews_rating_reset_all" value="1"> <?php echo __('Yes, I am sure.'); ?></label>
<?php if ($this->count_reviews_all > 5): ?>
                <label for="reset-reviews"><input type="checkbox" id="reset-reviews" name="google_business_reviews_rating_reset_reviews" value="1"> <?php echo __('Clear the review archive only.'); ?></label>
<?php endif; ?>
			</p>
            <p class="submit">
                <button type="button" name="reset" id="reset-button" class="button button-primary"><?php echo esc_html(__('Reset')); ?></button>
            </p>
        </form>
	</div>

<?php endif; ?>
	<div id="about" class="section<?php echo ($this->section != 'about') ? ' hide' : ''; ?>">
    	<div class="entry-content">
		<h2><?php echo __('About'); ?></h2>
<?php echo sprintf(__('		<p>This little plugin came about as a side-effect to collecting a business&rsquo;s opening times using data from a client&rsquo;s Google Business listing. The recent review data is available and, with some tweaks, it could be displayed anywhere in a similar style to the actual Google review popup.</p>
		<p>The data is updated every hour and cached to reduce external requests and improve load times. The shortcodes can be used in any post, page or within a widget&rsquo;s HTML. Shortcode arguments will overwrite the default settings. I have kept the style sheet minimal to allow for your own customisations &mdash; as a developer/designer this is what I&rsquo;d like for all plugins.</p>
		<p>This is my first published plugin for WordPress so I&rsquo;d appreciate any feedback. So if you have any comments, feature requests or wish to show me your own designs, please feel free to <a href="%s">get in touch</a> with me.</p>
		<p><span class="signature" title="%s"></span><br>
			Developer, <a href="%s">%s</a></p>
'), 'https://designextreme.com/wordpress/', 'Noah H', 'https://designextreme.com', 'Design Extreme'); ?>
		</div>
    	<div class="entry-meta">
            <div class="widget plugin-ratings">
                <h3 class="widget-title"><?php echo esc_html(__('Ratings')); ?></h3>
                <p class="aside"><?php echo esc_html(__('Love this plugin? Why not offer your freeback?')); ?></p>
                <p><a class="button" href="https://wordpress.org/support/plugin/g-business-reviews-rating/reviews/#new-post"><?php echo esc_html(__('Add my review')); ?></a></p>			
            </div>
            <div class="widget plugin-support">
                <h3 class="widget-title"><?php echo esc_html(__('Support')); ?></h3>
                <p class="aside"><?php echo esc_html(__('Got something to say? Need help?')); ?></p>
                <p><a class="button" href="https://wordpress.org/support/plugin/g-business-reviews-rating/"><?php echo esc_html(__('View support forum')); ?></a></p>			
            </div>
            <div class="widget plugin-donate">
                <h3 class="widget-title"><?php echo esc_html(__('Donate')); ?></h3>
                <p class="aside"><?php echo esc_html(__('Would you like to support the advancement of this plugin?')); ?></p>
                <p><a class="button button-secondary" href="https://paypal.me/designextreme"><?php echo esc_html(__('Donate to this plugin')); ?></a></p>
            </div>
		</div>
	</div>
</div>
