<?php
// Create id attribute allowing for custom "anchor" value.
		$id = 'custom-heading-' . $block['id'];
		if( !empty($block['anchor']) ) {
		    $id = $block['anchor'];
		}

		// Create class attribute allowing for custom "className" and "align" values.
		$className = 'vc-custom-heading';
		if( !empty($block['className']) ) {
		    $className .= ' ' . $block['className'];
		}
		if( !empty($block['align']) ) {
		    $className .= ' align' . $block['align'];
		}
		if( $is_preview ) {
		    $className .= ' is-admin';
		}

		$heading = get_field('heading');
		$description = get_field('description');
		$font_size_heading = get_field('font_size_heading');
		$heading_color = get_field('heading_color') ? get_field('heading_color') : '#008ad1';
		$font_size_desc = get_field('font_size_desc');
		$icon_size = get_field('icon_size');
		$icon_color = get_field('icon_color') ? get_field('icon_color') : '#008ad1';;
		$text_align = get_field('text_align');
		$justify_content = get_field('justify_content');
		$padding_top = get_field('padding_top');
		$padding_bottom = get_field('padding_bottom');
		$font_weight_bold_description = (get_field('font_weight_bold_description') == 'yes') ? 't-bold' : '';
		$container = (get_field('add_container') == 'yes') ? 'container' : '';
		$custom_icon = (get_field('custom_icon') == 'yes') ? 'custom-icon' : '';
		$icon_left = get_field('icon_left') ? get_field('icon_left') : '';
		$icon_right = get_field('icon_right') ? get_field('icon_right') : '';
		$color_icon = str_replace( '#', '', $icon_color );
		?>
		<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="text-align: {{ $text_align }}; padding-top: {{ $padding_top }}; padding-bottom: {{ $padding_bottom }};">
			<div class="heading-container {{ $container }}">
				@if (!empty($heading))
					<h3 class="heading-title {{ $custom_icon }}" style="text-align:{{ $text_align }}; justify-content: {{ $justify_content }}; font-size: {{ $font_size_heading }}; color: {{ $heading_color }};">
						@if (get_field('custom_icon') == 'yes')
							@if (!empty($icon_left))
								<span class="heading-icon icon-left">
									<img src="{{ $icon_left }}" alt="">
								</span>
							@endif
							<span>{{ $heading }}</span>
							@if (!empty($icon_right))
								<span class="heading-icon icon-right">
									<img src="{{ $icon_right }}" alt="">
								</span>
							@endif	
						@else
							<span class="icon-heading">
								<img src="data:image/svg+xml,%3C%3Fxml version='1.0' encoding='utf-8'%3F%3E%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 341.5 352.2' style='enable-background:new 0 0 341.5 352.2;' xml:space='preserve'%3E%3Cstyle type='text/css'%3E .st0%7Bfill:%23{{ $color_icon }};%7D%0A%3C/style%3E%3Cg%3E%3Cg%3E%3Cg%3E%3Cpath class='st0' d='M304.1,297.5c-28,23.9-64.3,38.4-104,38.4c-46.1,0-87.7-19.5-116.9-50.7c-12.4,3.7-24.2,7.4-35.2,11.3 c32.1,34.3,77.8,55.7,128.5,55.7C226.8,352.2,272.1,331.2,304.1,297.5z'/%3E%3Cpath class='st0' d='M123.5,285c-2.8-2.7-5.5-5.6-8.1-8.6c-0.4,0.1-0.7,0.2-1.1,0.3C117.3,279.4,120.4,282.3,123.5,285z'/%3E%3Cpath class='st0' d='M322.8,246c-2.5,0-5,0.1-7.5,0.2c-6.3,14.7-15.5,27.9-26.9,38.8C302.2,274.4,313.9,261.1,322.8,246z'/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3Cg%3E%3Cpath class='st0' d='M71.7,220.8c5.9,13.2,13.7,25.4,23.1,36.2c1.7,1.9,3.5,3.8,5.3,5.6c3.2,3.2,8.3,8.5,14.3,14.1 c0.4-0.1,0.7-0.2,1.1-0.3c-14.7-17.3-24.6-38.8-27.5-62.5C82.3,216.2,76.9,218.5,71.7,220.8z'/%3E%3Cpath class='st0' d='M341.4,175.4c-0.2-10.3-1.5-20.4-3.9-30.1c-7.7,1.1-15.5,2.3-23.6,3.7c7.1,15.2,11.1,32.2,11.1,50.2 c0,16.7-3.4,32.5-9.6,46.9c2.5-0.1,5.1-0.1,7.5-0.2C335,225.4,341.8,201.2,341.4,175.4z'/%3E%3Cpath class='st0' d='M48.1,296.5c11-3.9,22.7-7.6,35.2-11.3c-14.6-15.6-26.1-34-33.5-54.4c-12.5,6-23.8,12-33.7,17.8 C24.1,266.3,35,282.5,48.1,296.5z'/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3Cg%3E%3Cg%3E%3Cpath class='st0' d='M87.2,192.6c1.3-24.5,10.2-47,24.2-65.3c-17.9,4.8-35.1,9.8-51.3,15c-0.7,5.4-1.1,10.9-1.2,16.4 c-0.3,22.1,4.3,43.1,12.8,62c5.2-2.3,10.6-4.6,16.2-6.8C87,207,86.8,199.8,87.2,192.6z'/%3E%3C/g%3E%3Cg%3E%3Cpath class='st0' d='M40.1,175.9c0-9.5,0.8-18.8,2.4-27.8c-14.8,5-28.7,10.2-41.5,15.3c-0.3,4.2-0.5,8.4-0.5,12.7 c0,25.9,5.6,50.4,15.6,72.5c9.9-5.8,21.2-11.8,33.7-17.8C43.5,213.7,40.1,195.2,40.1,175.9z'/%3E%3C/g%3E%3Cg%3E%3Cpath class='st0' d='M264.2,95.5c21.7,12.2,39.1,31,49.7,53.6c8.1-1.4,16-2.7,23.6-3.8c-5.1-20.8-15.1-39.8-28.7-55.7 C294.4,91.3,279.5,93.2,264.2,95.5z'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3Cg%3E%3Cpath class='st0' d='M7.9,125.5c-3.6,12.1-6,24.8-6.9,37.9c12.8-5.2,26.7-10.3,41.5-15.3c3.1-17.7,9.1-34.5,17.6-49.7 C41.1,107.5,23.6,116.6,7.9,125.5z'/%3E%3Cpath class='st0' d='M302,52.4c-0.2-0.2-0.5-0.4-0.7-0.6c0.1,0.1,0.2,0.2,0.3,0.3c-11.3-11.4-24.2-21.3-38.2-29.2 c-9.4,2.6-19.1,5.4-28.9,8.3C259.8,32.3,281.1,40,302,52.4z'/%3E%3Cpath class='st0' d='M209.7,42.2c-3.4-0.1-6.7-0.1-10.1,0.1c-11.1,3.7-22.4,7.7-33.7,11.8c-31.7,11.6-61.7,23.9-89,36.4 c-8.6,15.8-14.5,33.3-16.8,51.8c16.2-5.2,33.4-10.2,51.3-15c21.3-27.8,54.5-46.1,91.7-47c22.2-0.5,43.1,5.1,61.1,15.2 c15.3-2.3,30.2-4.2,44.6-5.8C284.7,61.5,249.2,43.2,209.7,42.2z'/%3E%3C/g%3E%3Cpath class='st0' d='M7.9,125.5c15.7-8.9,33.2-18.1,52.2-27.2C81.4,59.9,118,31.2,161.6,20.4c-36.3,11.6-66.7,37-84.7,70 c27.3-12.5,57.3-24.8,89-36.4c11.4-4.2,22.6-8.1,33.8-11.8c-22.2,1-43,7.4-61.1,17.9C163.7,41.8,194.5,31,227.9,31 c2.3,0,4.5,0.1,6.7,0.2c9.8-3,19.5-5.7,28.9-8.3C237.9,8.3,208.3,0,176.7,0C96.9,0,29.6,52.9,7.9,125.5z'/%3E%3C/g%3E%3C/svg%3E%0A" alt="icon" style="width: {{ $icon_size }}">
							</span>
							<span>{{ $heading }}</span>
						@endif
						
					</h3>
				@endif
				@if (!empty($description))
					<div class="description {{ $font_weight_bold_description }}" style="font-size: {{ $font_size_desc }};">
						{{ $description }}
					</div>
				@endif
			</div>
			
		</div>
<?php     