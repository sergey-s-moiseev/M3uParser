<?php
/**
 * Created by IntelliJ IDEA.
 * User: s
 * Date: 09.12.16
 * Time: 13:31
 */

namespace M3uCreator;


class M3uCreator
{
    /**
     * Create m3u file content from array
     * @param array $channels [
     *      ['name'=> 'NAME_CHANNEL1', 'url'=> 'WWW.URL.URL1', 'group-title' =>'GROUP1', 'tvg-logo' =>  'LOGOTYPE1', 'audio-track' => 'AUDIOTRACK', 'tvg-shift' => '3'],
     *      ['name'=> 'NAME_CHANNEL4', 'url'=> 'WWW.URL.URL4', 'group-title' =>'GROUP2', 'tvg-logo' =>  'LOGOTYPE4', 'audio-track' => 'AUDIOTRACK', 'tvg-shift' => '3'],
     *  ];
     * @return string
     */

    public function createFile($channels=[])
    {
        $content ="#EXTM3U \n";
        foreach ($channels as $_channel) {
            $content = $content."#EXTINF:-1, tvg-name=\"". $_channel['name']."\""." tvg-logo=\"". $_channel['tvg-logo']."\""." group-title=\"". $_channel['group-title']."\""." tvg-shift=\"". $_channel['tvg-shift']."\", ".$_channel['name']."\n".$_channel['url']."\n";
        }
        return [$content];
    }
}