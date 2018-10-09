<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cdfa0bdf8721b453e8cdd6b0dfc96a1
{
    public static $classMap = array (
        'Src\\Repository\\UserVacationInterface' => __DIR__ . '/../..' . '/src/repository/UserVacationInterface.php',
        'Src\\Repository\\UserVacationRepository' => __DIR__ . '/../..' . '/src/repository/UserVacationRepository.php',
        'Src\\Traits\\OperationTrait' => __DIR__ . '/../..' . '/src/Traits/OperationTrait.php',
        'Src\\User\\User' => __DIR__ . '/../..' . '/src/User/User.php',
        'Src\\User\\UserVacation' => __DIR__ . '/../..' . '/src/Vacation/UserVacation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0cdfa0bdf8721b453e8cdd6b0dfc96a1::$classMap;

        }, null, ClassLoader::class);
    }
}
