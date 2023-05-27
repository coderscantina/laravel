<?php

namespace App\Actions\User;

use App\Events\User\PasswordChanged;
use App\Models\User;

class ChangePassword
{
    public function execute(User $user, $password): bool
    {
        $user->password = $password;
        $user->save();

        event(new PasswordChanged($user));

        return true;
    }
}
