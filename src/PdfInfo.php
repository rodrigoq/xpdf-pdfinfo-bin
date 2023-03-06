<?php

namespace Mehrkanal\PdfInfo;

class PdfInfo
{
    const BIN = 'pdfinfo';

    public static function getBin(): string
    {
        self::changePermissions();
        return self::BIN;
    }

    public static function getBinFullPath(): string
    {
        self::changePermissions();
        return realpath(self::GetPath() . '/' . self::BIN);
    }

    public static function getPath(): string
    {
        return dirname(__DIR__) . '/bin';
    }

    public static function changePermissions(): void
    {
        $file = realpath(self::getPath() . '/' . self::BIN);
        if (fileperms($file) & 0777 !== 0755) {
            chmod($file, 0755);
        }
    }
}

