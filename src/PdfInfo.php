<?php

namespace Mehrkanal\PdfInfo;

use RuntimeException;

class PdfInfo
{
    private const BIN = 'pdfinfo';

    public static function getBinFullPath(): string
    {
        $file = realpath(self::getBinaryPath() . '/' . self::BIN);
        if ($file === false) {
            throw new RuntimeException('Binary not found.');
        }
        return $file;
    }

    public static function getBinaryPath(): string
    {
        return dirname(__DIR__) . '/bin';
    }
}

