<?php

namespace Drupal\themechange\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Symfony\Component\Routing\Route;
use Drupal\Core\Theme\ThemeNegotiatorInterface;

/**
 * Class ThemeNegotiator.
 *
 * @package Drupal\themechange
 */

class ThemeNegotiator implements ThemeNegotiatorInterface {
  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $route_match) {
    $route = $route_match->getRouteObject();
    if (!$route instanceof Route) {
      return FALSE;
    }
    $option = $route->getOption('_custom_theme');
    if (!$option) {
      return FALSE;
    }
 
    return $option == 'bartik';
  }

  /**
   * {@inheritdoc}
   */
  public function determineActiveTheme(RouteMatchInterface $route_match) {
    return 'bartik';
  }

}
