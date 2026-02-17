<?php

namespace App\DTO;

use App\Http\Requests\CategoryRequest;

class CategoryDTO{
    public  function __construct(

        public readonly string $name,

    ){}
    public static function fromRequest ( CategoryRequest $request): self{

        return new self(
            name: $request->validated('name')
        );

    }
    

    public function toArray(): array
    {
        return [
            'name' => $this->name,  ];
    }

};

