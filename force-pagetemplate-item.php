<?php
namespace Grav\Plugin;

use Composer\Autoload\ClassLoader;
use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;
/**
 * Class ForcePagetemplateItemPlugin
 * @package Grav\Plugin
 */
class ForcePagetemplateItemPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'onPluginsInitialized' => [
                // Uncomment following line when plugin requires Grav < 1.7
                // ['autoload', 100000],
                ['onPluginsInitialized', 0]
            ]
        ];
    }

    /**
     * Composer autoload
     *
     * @return ClassLoader
     */
    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized(): void
    {
        // Proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            $this->enable([
                'onAdminPageTypes' => ['onAdminPageTypes', 0],
            ]);
        }
    }
    /**
    * Force "Item" as first page type
    *
    * See: user/plugins/admin/admin.php
    * public static function pagesTypes(bool $keysOnly = false)
        [...]
        // Allow manipulating of the data by event
        $e = new Event(['types' => &$types]);
        Grav::instance()->fireEvent('onAdminPageTypes', $e);
    * 
    */
    public function onAdminPageTypes(Event $event)
    {
        // Step 1: copy
        $types = $event['types'];
        // Step 2 modify
        if (isset($types['item']))
        {
            $types = ['item' => $types['item']] + $types;
        }
        // Step 3: assign back
        $event['types'] = $types;
    }
}
