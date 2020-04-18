<?php

if (!function_exists('getThemeImage')) {

    /** Get Theme Post Image
     * @return void
     */
    function getThemeImage($image) {
        return asset('storage/uploads/images/themes/' . $image);
    }
}