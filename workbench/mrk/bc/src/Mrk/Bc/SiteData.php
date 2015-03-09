<?php namespace Mrk\Bc;

use Cache;
class SiteData
{
    public static function get()
    {
        $bc = Cache::get('bc');
        foreach ($bc as $key => $value) {
            $bc[$key] = trim($value);
        }

        return $bc;
    }
}
