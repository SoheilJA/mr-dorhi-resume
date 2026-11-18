<?php

namespace App\Filament\Pages;

use App\Filament\Content\HeroTab;
use App\Filament\Content\AboutTab;
use App\Models\SiteSetting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

/**
 * @property-read Schema $form
 */
class ManageContent extends Page
{
    protected string $view = 'filament.pages.manage-content';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPencilSquare;

    protected static ?string $navigationLabel = 'محتوای سایت';

    protected static ?string $title = 'محتوای سایت';

    protected static ?int $navigationSort = 1;

    /** بخش‌هایی که در این صفحه ذخیره می‌شوند */
    private const GROUPS = ['hero' , 'about'];

    public ?array $data = [];

    public function mount(): void
    {
        $state = [];

        foreach (self::GROUPS as $group) {
            $state[$group] = SiteSetting::where('group', $group)->first()?->data ?? [];
        }

        $this->form->fill($state);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    Tabs::make('content')
                        ->tabs([
                            HeroTab::make(),
                            AboutTab::make(),
                        ])
                        ->persistTabInQueryString(),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('save')
                                ->label('ذخیره تغییرات')
                                ->submit('save')
                                ->keyBindings(['mod+s']),
                        ]),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $state = $this->form->getState();

        foreach (self::GROUPS as $group) {
            $existing = SiteSetting::where('group', $group)->first()?->data ?? [];

            SiteSetting::updateOrCreate(
                ['group' => $group],
                ['data' => array_replace_recursive($existing, $state[$group] ?? [])],
            );
        }

        Notification::make()
            ->success()
            ->title('ذخیره شد')
            ->send();
    }
}
