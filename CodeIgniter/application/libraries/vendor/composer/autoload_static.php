<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f109b6e87e105266b74e0d8cf346c4c
{
    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Everyman\\Neo4j' => 
            array (
                0 => __DIR__ . '/..' . '/everyman/neo4jphp/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1f109b6e87e105266b74e0d8cf346c4c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
