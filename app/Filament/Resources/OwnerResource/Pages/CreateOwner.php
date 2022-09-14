<?php

namespace App\Filament\Resources\OwnerResource\Pages;

use App\Filament\Resources\OwnerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOwner extends CreateRecord
{
    protected static string $resource = OwnerResource::class;
}
