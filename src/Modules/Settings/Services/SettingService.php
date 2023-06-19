<?php

namespace Modules\Settings\Services;

use App\Models\User;
use Modules\Settings\Models\Setting;
use Modules\Settings\Enums\SettingType;
use Modules\Settings\Exceptions\SettingException;
use Modules\Settings\DataTransferObjects\SettingDto;
use Modules\Settings\Interfaces\SettingServiceInterface;

class SettingService implements SettingServiceInterface
{

    public function store(User $user, SettingDto $dto): Setting
    {
        if (! $dto->value) {
            throw SettingException::noValueProvided();
        }

        /** @var Setting */
        return Setting::updateOrCreate([
            'user_id' => $user->id,
            'type' => $dto->type,
        ], [
            'value' => $dto->value,
        ]);
    }

    /**
     * @param User $user
     * @param SettingDto[] $settings
     *
     * @return Setting[]
     * @throws SettingException
     */
    public function storeMany(User $user, array $settings): array
    {
        $output = [];

        foreach ($settings as $setting) {
            $output[] = $this->store($user, $setting);
        }

        return $output;
    }
}
