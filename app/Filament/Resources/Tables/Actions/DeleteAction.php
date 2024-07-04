<?php

namespace App\Filament\Resources\Tables\Actions;

use Filament\Actions\StaticAction;
use App\Models\User;
use Illuminate\Support\Facades\Route;

class DeleteAction extends StaticAction
{
    public static function make(?string $name = null): static
    {
        return new static($name);
    }

    public function handle($record)
    {
        $user = User::find($record->getKey());

        if ($user) {
            $user->delete();
        }
    }

    public function getRoute($record)
    {
        return Route::get('/delete/{record}', function () use ($record) {
            $this->handle($record);
            return redirect()->route('users.index'); // Redireciona para a página de usuários após a exclusão
        })->name('your.users.delete');
    }
}
