<?php
namespace App\Enums;

class Menu
{
    public const HOME = 'Home';
    public const ABOUT = 'About';
    public const SERVICES = 'Services';
    public const CONTACT = 'Contact';

    public static function getMenu() {
        return
        [
            self::HOME => '/home',
            self::ABOUT => '/about',
            self::SERVICES => '/services',
            self::CONTACT => '/contact',
        ];
    }
}
