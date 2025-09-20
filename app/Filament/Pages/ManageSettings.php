<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Schema;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    private const SETTING_TYPE = 'pinterest';

    private const SETTING_KEYS = [
        'app_id',
        'app_secret',
        'ad_account_id',
        'access_token',
        'refresh_token',
    ];

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Settings';

    protected static \UnitEnum|string|null $navigationGroup = 'Configuration';

    protected static ?string $title = 'Pinterest Ads Settings';

    protected string $view = 'filament.pages.manage-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $values = Setting::query()
            ->where('type', self::SETTING_TYPE)
            ->pluck('value', 'key')
            ->toArray();

        $this->form->fill(array_replace(
            array_fill_keys(self::SETTING_KEYS, null),
            $values,
        ));
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('app_id')
                    ->label('App ID')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('app_secret')
                    ->label('App Secret')
                    ->password()
                    ->revealable()
                    ->maxLength(255)
                    ->required(),
                TextInput::make('ad_account_id')
                    ->label('Ad Account ID')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('access_token')
                    ->label('Access Token')
                    ->password()
                    ->revealable()
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('refresh_token')
                    ->label('Refresh Token')
                    ->password()
                    ->revealable()
                    ->columnSpanFull(),
            ])
            ->columns(2)
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save settings')
                ->submit('submit'),
        ];
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        foreach (self::SETTING_KEYS as $key) {
            Setting::query()->updateOrCreate(
                [
                    'type' => self::SETTING_TYPE,
                    'key' => $key,
                ],
                [
                    'value' => $data[$key] ?? null,
                ],
            );
        }

        Notification::make()
            ->success()
            ->title('Settings saved')
            ->send();
    }
}