<?php namespace Anomaly\FilesModule\File\Command;

use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class GetSystemMaxUploadSize
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\FilesModule\File\Command
 */
class GetSystemMaxUploadSize implements SelfHandling
{

    /**
     * Handle the command.
     *
     * @return int
     */
    public function handle()
    {
        $post = str_replace('M', '', ini_get('post_max_size'));
        $file = str_replace('M', '', ini_get('upload_max_filesize'));

        return $file > $post ? $post : $file;
    }
}
