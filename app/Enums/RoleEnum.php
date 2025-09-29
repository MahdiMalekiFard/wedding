<?php

namespace App\Enums;

enum RoleEnum: string
{
    use EnumToArray;

    case ADMIN       = 'admin';

    public function title(): string
    {
        return match ($this) {
            self::ADMIN     => 'Admin',
        };
    }

    public function toArray(): array
    {
        return [
            'name'  => $this->name,
            'value' => $this->value,
            'title' => $this->title(),
        ];
    }
}
