<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Poli', \App\Models\Poli::count()),
            Stat::make('Terpanggil', \App\Models\Ticket::where('status', true)->count()),
            Stat::make('Menunggu', \App\Models\Ticket::where('status', false)->count()),
        ];
    }
}
