<?php
$icon = collect([
])->random();
$size ??= 'md';
$imageRendering = config("media.icon.$size.height") >= 32 ? 'image-rendering: pixelated' : '';
?>
<img class="{{ $class ?? null }}" src="{{ asset("assets/images/status/{$icon}") }}" style="height:{{config("media.icon.$size.height")}}px;max-width:{{config("media.icon.$size.width")}}px;{{ $imageRendering }}" alt="{{ __('resource.empty', ['resource' => __res('resource', 0)]) }}">
