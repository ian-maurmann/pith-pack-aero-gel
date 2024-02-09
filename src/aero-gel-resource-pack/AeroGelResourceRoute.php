<?php

/**
 * Aero-gel Resource Route
 * -----------------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 */


declare(strict_types=1);

namespace PithFront\PithPackAeroGel;

use Pith\Workflow\PithRoute;

/**
 * Class AeroGelResourceRoute
 */
class AeroGelResourceRoute extends PithRoute
{
    public string $pack            = 'PithFront\\PithPackAeroGel\\AeroGelResourcePack';
    public string $route_type      = 'resource-folder';
    public string $access_level    = 'world';
    public string $resource_folder = '[^route_folder]/resource/';
    public string $cache_level     = 'Cache-Control: public, max-age=31536000, immutable, stale-while-revalidate=604800, stale-if-error=1209600';
}
