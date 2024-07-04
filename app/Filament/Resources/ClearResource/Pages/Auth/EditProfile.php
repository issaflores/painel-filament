<?php

namespace App\Filament\Resources\ClearResource\Pages\Auth;

use App\Filament\Resources\ClearResource;
use Filament\Resources\Pages\Page;

class EditProfile extends Page
{
    protected static string $resource = ClearResource::class;

    protected static string $view = 'filament.resources.clear-resource.pages.auth.edit-profile';
}
