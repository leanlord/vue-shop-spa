<?php

    namespace App\Http\Resources;

    use Illuminate\Http\Resources\Json\JsonResource;

    class ClotheResource extends JsonResource
    {
        /**
         * Transform the resource into an array.
         *
         * @param \Illuminate\Http\Request $request
         * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
         */
        public function toArray($request) {
            return [
                'color' => $this->color,
                'size' => $this->size,
                'img' => $this->img,
                'price' => number_format($this->price, 0, ',', ' '),
            ];
        }
    }
