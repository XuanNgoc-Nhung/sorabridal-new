<?php

if (! function_exists('aos_effects')) {
    /**
     * @return list<string>
     */
    function aos_effects(): array
    {
        return [
            'fade-up',
            'fade-down',
            'fade-left',
            'fade-right',
            'fade-up-right',
            'fade-up-left',
            'fade-down-right',
            'fade-down-left',
            'zoom-in',
            'zoom-in-up',
            'zoom-in-down',
            'flip-up',
            'flip-left',
            'flip-right',
        ];
    }
}

if (! function_exists('aos_random')) {
    function aos_random(): string
    {
        $effects = aos_effects();

        return $effects[array_rand($effects)];
    }
}

if (! function_exists('aos_for_section')) {
    /**
     * Một hiệu ứng ngẫu nhiên cho mỗi section, ổn định trong cùng một lần tải trang.
     * Cố gắng không lặp hiệu ứng giữa các section trên cùng trang.
     */
    function aos_for_section(string $section): string
    {
        static $cache = [];
        static $used = [];

        if (isset($cache[$section])) {
            return $cache[$section];
        }

        $available = array_values(array_diff(aos_effects(), $used));

        if ($available === []) {
            $available = aos_effects();
        }

        $effect = $available[array_rand($available)];
        $cache[$section] = $effect;
        $used[] = $effect;

        return $effect;
    }
}
