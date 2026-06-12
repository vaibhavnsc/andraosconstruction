<?php

if (!function_exists('getPageSeoByKey')) {
    function getPageSeoByKey(string $key)
    {
        $seoData = config('seo.pages', []);
        
        return (object) ($seoData[$key] ?? []);
    }
}