<?php

namespace App\Filament\Pages;

use App\Constants\SettingKeys;
use App\Enums\SettingType;
use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ManagePinterestSettings extends Page implements HasForms
{
    use InteractsWithForms;

    private const SETTING_TYPE = SettingType::PINTEREST;

    private const SETTING_KEYS = SettingKeys::PINTEREST;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Pinterest Settings';

    protected static \UnitEnum|string|null $navigationGroup = 'Configuration';

    protected static ?string $title = 'Pinterest Ads Settings';

    protected string $view = 'filament.pages.manage-settings';

    public ?array $settingsData = [];

    public function mount(): void
    {
        $this->fillSettingsForm();
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Pinterest Credentials')
                    ->columns(2)
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
                    ]),
            ])
            ->statePath('settingsData');
    }

    protected function getUpdateFormActions(): array
    {
        return [
            Action::make('updateSettings')
                ->label('Save settings')
                ->submit('updateSettings'),
        ];
    }

    public function updateSettings(): void
    {
        $data = $this->form->getState();

        foreach (self::SETTING_KEYS as $key) {
            Setting::query()->updateOrCreate(
                [
                    'type' => self::SETTING_TYPE->value,
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

    private function fillSettingsForm(): void
    {
        $values = Setting::query()
            ->where('type', self::SETTING_TYPE->value)
            ->pluck('value', 'key')
            ->toArray();

        $this->form->fill(array_replace(
            array_fill_keys(self::SETTING_KEYS, null),
            $values,
        ));
    }
}
