@extends('layouts.mobile')
@section('content')

	<link href="{{ URL::asset('/assets/css/home_mobile.css') }}" rel="stylesheet" >

	<script src="{{ URL::asset('/assets/plugin/jQuery.dotdotdot/jquery.dotdotdot.min.js') }}"></script>
	<script src="{{ URL::asset('/assets/plugin/slider/jssor.slider-21.1.6.js') }}"></script>
	<script src="{{ URL::asset('/assets/js/home.js?v=1') }}"></script>

	@for ($i = 1; $i <= 4; $i++)
	<?php 
		$arr_cnt = [32, 23, 30, 30];
		$img_cnt = $arr_cnt[$i - 1];
	?>
		<div id="house_{{ $i }}" class="one-content">
			<?php
				if ($i < 4) {
					?>
			<div class="title">
				<div class="center-pos back-color-title box-shadow-bottom">
					<div class="title-{{ $i }}"></div>
				</div>
			</div>
					<?php
				}
			?>
			<div class="data" data-id="{{ $i }}">
				<div class="slider float-left margin-l-5p back-color-white margin-t-1em box-shadow-bottom">
					<div id="jssor_gallery{{ $i }}" class="gallery">
						<!-- Loading Screen -->
				        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
				            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				            <div class='loading'></div>
				        </div>
				        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 400px; height: 156px; overflow: hidden;">
				    		@for ($j = 1; $j <= $img_cnt; $j++)
					            <div data-p="144.50">
					                <img data-u="image" src="{{ URL::asset("/assets/images/$i/main/$j.png") }}" data-i="{{ $i }}" data-j="{{ $j }}" />
					                <img data-u="thumb" src="{{ URL::asset("/assets/images/$i/thumb/$j.png") }}" />
					            </div>
				    		@endfor
				            <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
				        </div>
				        <!-- Thumbnail Navigator -->
				        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:400px;height:50px;" data-autocenter="1">
				            <!-- Thumbnail Item Skin Begin -->
				            <div data-u="slides" style="cursor: default;">
				                <div data-u="prototype" class="p">
				                    <div class="w">
				                        <div data-u="thumbnailtemplate" class="t"></div>
				                    </div>
				                    <div class="c"></div>
				                </div>
				            </div>
				            <!-- Thumbnail Item Skin End -->
				        </div>
				        <!-- Arrow Navigator -->
				        <span data-u="arrowleft" class="jssora05l"></span>
				        <span data-u="arrowright" class="jssora05r"></span>
					</div>
				</div>
				<div class="info float-left margin-l-5p back-color-white margin-t-2em box-shadow-bottom">
					<div class="info-title">
						<div class="info-div center-pos">
							<div>
								@if ($i == 1)
									@lang('messages.info_title_1')
								@elseif ($i == 2)
									@lang('messages.info_title_2')
								@elseif ($i == 3)
									@lang('messages.info_title_3')
								@else
									@lang('messages.info_title_4')
								@endif
							</div>
						</div>
					</div>
					<div class="info-text color-info" dir="rtl" lang="ar">
						@if ($i == 1)
							@lang('messages.info_1')
						@elseif ($i == 2)
							@lang('messages.info_2')
						@elseif ($i == 3)
							@lang('messages.info_3')
						@else
							@lang('messages.info_4')
						@endif
						<a href="#" class="readmore">&raquo;</a>
					</div>
					<div class="original-text display-none">
						@if ($i == 1)
							@lang('messages.info_1')
						@elseif ($i == 2)
							@lang('messages.info_2')
						@elseif ($i == 3)
							@lang('messages.info_3')
						@else
							@lang('messages.info_4')
						@endif
					</div>
				</div>
			</div>
		</div>
	@endfor

	<div class="big-img modal fade" role="dialog">
		<div class="modal-dialog" style="width: 100%;margin:0px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Info</h4>
				</div>
				<div class="modal-body">
					<div class="big-prev">
						<img class="center-pos" src="{{ URL::asset("/assets/images/left.png") }}" />
					</div>
					<img id="big-image" src="" />
					<div class="big-next">
						<img class="center-pos" src="{{ URL::asset("/assets/images/right.png") }}" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="big-txt modal fade" role="dialog">
		<div class="modal-dialog" style="margin:0px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Info</h4>
				</div>
				<div class="modal-body" dir="rtl" lang="ar">
				</div>
			</div>
		</div>
	</div>

	<a href="tel:00962788880904" class="contact log phone"></a>
@endsection