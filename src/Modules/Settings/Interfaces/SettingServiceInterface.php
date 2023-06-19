<?php

namespace Modules\Settings\Interfaces;

use App\Models\User;
use Modules\Settings\Models\Setting;
use Modules\Settings\DataTransferObjects\SettingDto;

interface SettingServiceInterface
{
    public function store(User $user, SettingDto $dto): Setting;

    /**
     * @param User $user
     * @param SettingDto[] $settings
     *
     * @return Setting[]
     */
    public function storeMany(User $user, array $settings): array;
}
