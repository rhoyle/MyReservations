<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\ViewRecord;
use Filament\Actions;

class ViewCustomer extends ViewRecord
{
    protected static string $resource = CustomerResource::class;
}
