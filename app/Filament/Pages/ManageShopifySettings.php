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

class ManageShopifySettings extends Page implements HasForms
{
    use InteractsWithForms;

    private const SETTING_TYPE = SettingType::SHOPIFY;

    private const SETTING_KEYS = SettingKeys::SHOPIFY;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Shopify Settings';

    protected static \UnitEnum|string|null $navigationGroup = 'Configuration';

    protected static ?string $title = 'Shopify Settings';

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
                Section::make('Shopify Credentials')
                    ->columns(2)
                    ->schema([
                        TextInput::make('store_domain')
                            ->label('Store Domain')
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('api_key')
                            ->label('API Key')
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('api_secret')
                            ->label('API Secret')
                            ->password()
                            ->revealable()
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('access_token')
                            ->label('Access Token')
                            ->password()
                            ->revealable()
                            ->columnSpanFull()
                            ->required(),
                        TextInput::make('api_version')
                            ->label('API Version')
                            ->maxLength(32)
                            ->required(),
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
