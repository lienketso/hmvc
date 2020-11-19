<?php

if (!function_exists('is_in_dashboard')) {
    /**
     * @return bool
     */
    function is_in_dashboard()
    {
        $segment = request()->segment(1);
        if ($segment === config('SOURCE_ADMIN_ROUTE', 'adminlks')) {
            return true;
        }

        return false;
    }
}

if (!function_exists('convert_flash_message')) {
    function convert_flash_message($mess = 'create')
    {
        switch ($mess) {
            case 'create':
                $m = config('messages.success_create');
                break;
            case 'edit':
                $m = config('messages.success_edit');
                break;
            case 'delete':
                $m = config('messages.success_delete');
                break;
            default:
                $m = config('messages.success_create');
        }

        return $m;
    }
}

if (! function_exists('str_slug')) {
    /**
     * Generate a URL friendly "slug" from a given string.
     *
     * @param  string  $title
     * @param  string  $separator
     * @param  string  $language
     * @return string
     */
    function str_slug($title, $separator = '-', $language = 'en')
    {
        return Str::slug($title, $separator, $language);
    }
}

