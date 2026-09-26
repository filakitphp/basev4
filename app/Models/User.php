<?php

namespace App\Models;

use Filament\Panel;
use JeffersonGoncalves\Filament\User\Models\User as BaseUser;

/**
 * Columns, casts, factory, observer and avatar come from
 * jeffersongoncalves/laravel-user + jeffersongoncalves/filament-user.
 */
class User extends BaseUser
{
    /**
     * Base kit: users sign in to the single (admin) panel.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
}
