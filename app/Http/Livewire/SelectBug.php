<?php

namespace App\Http\Livewire;

use App\Enums\Scenes\LightingCondition;
use App\Models\Role;
use App\Models\Script;
use App\Models\ScriptScene;
use App\Models\ScriptSet;
use App\Services\Models\ScriptSceneService;
use App\Services\Models\ScriptSetService;
use App\Traits\Filament\HasDataState;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SelectBug extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;

    public ?array $data = [];

    protected function getFormStatePath(): ?string
    {
        return 'data';
    }

    public function mount()
    {
        $this->form->fill([
            'multiple_select' => []
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Select::make('multiple_select')
                ->required()
                ->multiple()
                ->relationship('users', 'name')
                ->columnSpanFull()
                ->createOptionModalHeading('Add a new user')
                ->createOptionForm([
                    TextInput::make('name')
                        ->columnSpanFull()
                        ->required(),
                ])
                ->live()
                ->preload()
                ->createOptionAction(fn ($action) => $action->slideOver()),
        ];
    }

    public function submit()
    {
        $state = $this->form->getState();

        dd($state);
    }

    protected function getFormModel(): string
    {
        return Role::class;
    }

    public function render()
    {
        return view('livewire.select-bug');
    }
}
