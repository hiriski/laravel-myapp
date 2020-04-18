<?php

if (!function_exists('getBlogImage')) {

    /** Get Blog Post Image
     * @return void 
     */
    function getBlogImage($image) {
        return asset('storage/uploads/images/blog/' . $image);
    }
}