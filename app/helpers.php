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
