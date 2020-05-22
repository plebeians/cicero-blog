<?php


namespace App\Contracts;


class UserRole
{
    const USER_ROLE_DEFAULT = 0;
    const USER_ROLE_MANAGER = 1;
    const USER_ROLE_ADMIN = 2;

    public static function hasAccessToDashboard()
    {
        return [static::USER_ROLE_MANAGER, static::USER_ROLE_ADMIN];
    }
}
