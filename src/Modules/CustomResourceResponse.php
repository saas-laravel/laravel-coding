<?php

namespace Modules;

use Illuminate\Support\Collection;
use Illuminate\Http\Resources\Json\ResourceResponse;

class CustomResourceResponse extends ResourceResponse
{

    /**
     * @param array|Collection|\Illuminate\Database\Eloquent\Collection $data
     * @param $with
     * @param $additionalData
     * @return array
     */
    protected function wrap($data, $with = [], $additionalData = [])
    {
        $isEmpty = is_null($this->resource->resource);

        if ($data instanceof Collection) {
            $data = $data->all();
        }

        if ($isEmpty || $this->haveDefaultWrapperAndDataIsUnwrapped($data)) {
            $data = [$this->wrapper() => $isEmpty ? null : $data];
        } elseif ($this->haveAdditionalInformationAndDataIsUnwrapped($data, $with, $additionalData)) {
            $data = [($this->wrapper() ?: 'data') => $data];
        }

        foreach ($additionalData as &$additional) {
            if ($additional instanceof CustomResource && is_null($additional->resource)) {
                $additional = null;
            }
        }

        return array_merge_recursive($data, $with, $additionalData);
    }
}
