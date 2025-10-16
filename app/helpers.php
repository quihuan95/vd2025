<?php

if (!function_exists('locale_route')) {
  /**
   * Generate a route URL with the current locale
   *
   * @param string $name
   * @param array $parameters
   * @param bool $absolute
   * @return string
   */
  function locale_route($name, $parameters = [], $absolute = true)
  {
    $locale = app()->getLocale();
    if (!isset($parameters['locale'])) {
      $parameters['locale'] = $locale;
    }
    return route($name, $parameters, $absolute);
  }
}

if (!function_exists('asset_with_cache_bust')) {
  /**
   * Generate asset URL with cache busting timestamp
   *
   * @param string $path
   * @param int|null $timestamp
   * @return string
   */
  function asset_with_cache_bust($path, $timestamp = null)
  {
    $timestamp = $timestamp ?? time();
    return asset($path) . '?v=' . $timestamp;
  }
}

if (!function_exists('get_social_image_url')) {
  /**
   * Get social media image URL with cache busting
   *
   * @param string $imagePath
   * @return string
   */
  function get_social_image_url($imagePath = 'storage/images/BVVD-KV.jpg')
  {
    // Use a daily cache bust to balance between freshness and caching
    $cacheBust = date('Y-m-d');
    return asset($imagePath) . '?v=' . $cacheBust;
  }
}