<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ModerationUser;

class UserController extends Controller
{
    public function showUsers()
    {

        $allUser = User::with('role')->paginate(50);

        return view('blocks._user_show', ['data' => $allUser]);
    }

    public function moderationUser(int $userId)
    {
        $user = User::findOrFail($userId);

        return view('blocks._user_update', ['data' => $user]);
    }

    public function moderationUserSubmit(int $userId, ModerationUser $dataUser)
    {
        $user = User::with('role')->findOrFail($userId);
        if ($dataUser->input('role') === 1) {
            $user->name = $dataUser->input('name');
            $user->role->role = $dataUser->input('role');
            $user->role->name = 'Администратор';
            $user->save();
            $user->role->save();
            return redirect()->route('showUsers')->with('success', 'Запись была обнавлена');
        }
        $user->name = $dataUser->input('name');
        $user->role->role = $dataUser->input('role');
        $user->role->name = 'Пользователь';
        $user->save();
        $user->role->save();
        return redirect()->route('showUsers')->with('success', 'Запись была обнавлена');
    }

    public function deleteUser(int $userId)
    {
        $user = User::with('role')->findOrFail($userId);
        $user->role->delete();
        $user->delete();
        return redirect()->route('showUsers')->with('success', 'Запись была удалена');
    }
}
