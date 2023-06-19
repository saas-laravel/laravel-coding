<?php

namespace Modules\Settings\Resources;

use Modules\CustomResource;
use Illuminate\Http\Request;
use Modules\Settings\Models\Setting;

/**
 * @property Setting $resource
 */
class SettingResource extends CustomResource
{
    public function data(Request $request): array
    {
        return [
            'type' => $this->resource->type,
        ];
    }
}
