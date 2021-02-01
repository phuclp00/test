<?php

use App\Http\Resources\User;
use Illuminate\Support\Facades\Broadcast;
use App\Models\UserModel;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Broadcast::channel('user-registed', function ($user, $userID) { 
//     return $user->user_id ===UserModel::findOrFail($userID)->user_id;
// });
