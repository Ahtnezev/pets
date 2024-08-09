<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Pets;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class MascotasTable extends DataTableComponent
{
    protected $model = Pets::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setColumnSelectDisabled();
    }

    /*
     * Filters
    */
    public function filters() : array
    {
        return [
            SelectFilter::make('Type')
                ->options([
                    '' => 'Todas',
                    'Car' => 'Car',
                    'Dog' => 'Dog',
                    'Turtle' => 'Turtle',
                ])->filter(function(Builder $builder, string $value) {
                    $builder->where('type', $value);
                })
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Description", "description")
                ->sortable()
                ->searchable(),
            Column::make("Type", "type")
                ->sortable(),
            Column::make('Number of Days Old', 'birthday')
                ->format(function($value, $model) {
                    $date1 = now();
                    $date2 = Carbon::parse($value);
                    // calcular diferencia en dias
                    $diferencia = $date1->diffInDays($date2);
                    return "$diferencia Día(s)";
                })
                ->sortable()
        ];
    }
}
