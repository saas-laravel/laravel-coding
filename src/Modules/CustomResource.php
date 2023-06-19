<?php

namespace Modules;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

abstract class CustomResource extends JsonResource
{
    public function toResponse($request): JsonResponse
    {
        return (new CustomResourceResponse($this))->toResponse($request);
    }

    public function toArray(Request $request): array
    {
        if (is_null($this->resource)) {
            return [];
        }

        return $this->data($request);
    }

    abstract public function data(Request $request): array;
}
