<?php

if (!function_exists('getWorkImage')) {

    /** Get Blog Post Image
     * @return void 
     */
    function getWorkImage($image) {
        return asset('storage/uploads/images/works/' . $image);
    }
}