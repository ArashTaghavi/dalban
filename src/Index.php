<?php

namespace ATaghavi\PackagePhp;

class Index
{
    public function message(string $type): string
    {
        return match ($type) {
            "dalban" => "دالبانو تا لوووول بزار",
            "tasvir" => "کسمزار جیجینگگگگگ",
            default => "دییییییییییز د لولو",
        };
    }
}