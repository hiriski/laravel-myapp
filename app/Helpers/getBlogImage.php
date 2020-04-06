<?php

if (!function_exists('getBlogImage')) {
    function getBlogImage($image) {
        return asset('storage/uploads/images/blog/' . $image);
    }
}