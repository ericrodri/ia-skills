<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\Skill;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class OgImageController extends Controller
{
    private const W = 1200;
    private const H = 630;
    private const FONT_BOLD   = '/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf';
    private const FONT_NORMAL = '/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf';

    public function skill(Skill $skill): Response
    {
        abort_unless($skill->status === 'published', 404);

        $png = Cache::remember("og.skill.{$skill->slug}", now()->addDay(), function () use ($skill) {
            return $this->generate(
                label:    $skill->profession?->name ?? 'Skill',
                title:    $skill->title,
                subtitle: $skill->description,
                meta:     ($skill->tool_name ? "🛠 {$skill->tool_name}" : '') .
                          ($skill->estimated_minutes ? "  ⏱ {$skill->estimated_minutes} min" : ''),
            );
        });

        return response($png, 200, [
            'Content-Type'  => 'image/png',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }

    public function profession(Profession $profession): Response
    {
        $png = Cache::remember("og.profession.{$profession->slug}", now()->addDay(), function () use ($profession) {
            return $this->generate(
                label:    'Profesión',
                title:    "Skills de IA para {$profession->name}",
                subtitle: $profession->description ?? "Workflows y prompts de IA para {$profession->name}",
                meta:     $profession->skills_count ? "⚡ {$profession->skills_count} skills" : '⚡ ia-skills',
            );
        });

        return response($png, 200, [
            'Content-Type'  => 'image/png',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }

    private function generate(string $label, string $title, string $subtitle, string $meta): string
    {
        $img = imagecreatetruecolor(self::W, self::H);

        // Colors
        $bg       = imagecolorallocate($img, 15,  23,  42);   // #0f172a
        $brand    = imagecolorallocate($img, 99,  102, 241);  // #6366f1
        $brandDim = imagecolorallocate($img, 55,  48,  163);  // #3730a3
        $white    = imagecolorallocate($img, 255, 255, 255);
        $gray400  = imagecolorallocate($img, 148, 163, 184);  // #94a3b8
        $gray700  = imagecolorallocate($img, 51,  65,  85);   // #334155

        // Background
        imagefilledrectangle($img, 0, 0, self::W, self::H, $bg);

        // Left accent bar
        imagefilledrectangle($img, 0, 0, 8, self::H, $brand);

        // Top decorative strip
        imagefilledrectangle($img, 0, 0, self::W, 4, $brand);

        // Subtle grid pattern (horizontal lines)
        for ($y = 60; $y < self::H; $y += 60) {
            imageline($img, 0, $y, self::W, $y, $gray700);
        }

        // Label badge
        $labelText = mb_strtoupper($label);
        $labelBox  = imagettfbbox(14, 0, self::FONT_BOLD, $labelText);
        $labelW    = abs($labelBox[4] - $labelBox[0]) + 24;
        imagefilledroundedrectangle($img, 60, 80, 60 + $labelW, 116, 8, $brandDim);
        imagettftext($img, 14, 0, 72, 106, $brand, self::FONT_BOLD, $labelText);

        // Title (wrap at ~36 chars per line, max 3 lines)
        $titleLines = $this->wrapText($title, 36);
        $titleY = 160;
        foreach (array_slice($titleLines, 0, 3) as $line) {
            imagettftext($img, 42, 0, 60, $titleY, $white, self::FONT_BOLD, $line);
            $titleY += 58;
        }

        // Subtitle (wrap at ~72 chars per line, max 2 lines)
        $subtitleLines = $this->wrapText($subtitle, 72);
        $subtitleY = $titleY + 20;
        foreach (array_slice($subtitleLines, 0, 2) as $line) {
            imagettftext($img, 22, 0, 60, $subtitleY, $gray400, self::FONT_NORMAL, $line);
            $subtitleY += 34;
        }

        // Bottom bar
        imagefilledrectangle($img, 0, self::H - 80, self::W, self::H, $gray700);

        // Branding left
        imagettftext($img, 26, 0, 60, self::H - 26, $white, self::FONT_BOLD, '⚡ ia-skills');

        // Meta right
        if ($meta) {
            $metaBox = imagettfbbox(18, 0, self::FONT_NORMAL, $meta);
            $metaW   = abs($metaBox[4] - $metaBox[0]);
            imagettftext($img, 18, 0, self::W - $metaW - 60, self::H - 28, $gray400, self::FONT_NORMAL, $meta);
        }

        // Capture PNG
        ob_start();
        imagepng($img);
        $png = ob_get_clean();
        imagedestroy($img);

        return $png;
    }

    private function wrapText(string $text, int $maxChars): array
    {
        $words = explode(' ', $text);
        $lines = [];
        $line  = '';

        foreach ($words as $word) {
            if (mb_strlen($line . ' ' . $word) > $maxChars && $line !== '') {
                $lines[] = trim($line);
                $line    = $word;
            } else {
                $line = $line === '' ? $word : $line . ' ' . $word;
            }
        }

        if ($line !== '') {
            $lines[] = trim($line);
        }

        return $lines;
    }
}

// GD doesn't have imagefilledroundedrectangle — polyfill
if (! function_exists('imagefilledroundedrectangle')) {
    function imagefilledroundedrectangle($img, $x1, $y1, $x2, $y2, $r, $color): void
    {
        imagefilledrectangle($img, $x1 + $r, $y1, $x2 - $r, $y2, $color);
        imagefilledrectangle($img, $x1, $y1 + $r, $x2, $y2 - $r, $color);
        imagefilledellipse($img, $x1 + $r, $y1 + $r, $r * 2, $r * 2, $color);
        imagefilledellipse($img, $x2 - $r, $y1 + $r, $r * 2, $r * 2, $color);
        imagefilledellipse($img, $x1 + $r, $y2 - $r, $r * 2, $r * 2, $color);
        imagefilledellipse($img, $x2 - $r, $y2 - $r, $r * 2, $r * 2, $color);
    }
}
