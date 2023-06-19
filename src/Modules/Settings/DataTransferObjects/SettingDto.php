<?php

namespace Modules\Settings\DataTransferObjects;

use Modules\Settings\Enums\SettingType;
use App\Http\Requests\SettingStoreRequest;

readonly class SettingDto
{

    public function __construct(
        public SettingType $type,
        public string $value,
    ) {}

    public static function fromRequest(SettingStoreRequest $request): self
    {
        return new self(
            type: SettingType::from($request->validated('type')),
            value: $request->validated('value'),
        );
    }

}
