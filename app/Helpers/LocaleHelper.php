<?php

namespace App\Helpers;

class LocaleHelper
{
  /**
   * Get the current locale
   */
  public static function getCurrentLocale()
  {
    return app()->getLocale();
  }

  /**
   * Get the opposite locale (for language switcher)
   */
  public static function getOppositeLocale()
  {
    $current = self::getCurrentLocale();
    return $current === 'en' ? 'vi' : 'en';
  }

  /**
   * Generate URL with locale
   */
  public static function getLocalizedUrl($route, $parameters = [], $locale = null)
  {
    $locale = $locale ?: self::getCurrentLocale();
    $routeName = $route;

    // Remove locale prefix from route name if it exists
    if (strpos($routeName, '.') !== false) {
      $routeName = $route;
    }

    return route($routeName, array_merge(['locale' => $locale], $parameters));
  }

  /**
   * Get language name
   */
  public static function getLanguageName($locale = null)
  {
    $locale = $locale ?: self::getCurrentLocale();

    $languages = [
      'en' => 'English',
      'vi' => 'Tiếng Việt'
    ];

    return $languages[$locale] ?? 'English';
  }

  /**
   * Get language flag
   */
  public static function getLanguageFlag($locale = null)
  {
    $locale = $locale ?: self::getCurrentLocale();

    $flags = [
      'en' => '🇺🇸',
      'vi' => '🇻🇳'
    ];

    return $flags[$locale] ?? '🇺🇸';
  }
}
