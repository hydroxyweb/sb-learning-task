<?php
namespace App\Enums;

class Menu
{
    public const HOME = 'Home';
    public const DESTINATIONS = 'Destinations';
    public const BLOG = 'Blog';
    public const NEWS = 'News';
    public const CONTACT = 'Contact';

    public static function getMenu() {
        return
            [
                self::HOME => '/home',
                self::DESTINATIONS => '/destinations',
                self::BLOG => '/blog',
                self::NEWS => '/news',
                self::CONTACT => '/contact',
            ];
    }
}
