<?php

namespace App\Services\Friend;


use App\Models\FriendLink;
use App\Models\PartnerList;
use App\Repositories\Common\SanmuRepository;

class FriendLinkService
{
    protected $sanmuRepository;

    public function __construct(
        SanmuRepository $sanmuRepository
    )
    {
        $this->sanmuRepository = $sanmuRepository;
    }

    /**
     * 获得所有的友情链接
     *
     * @access  private
     * @return  array
     */
    public function getIndexGetLinks($table = 'friend_link')
    {

            $res = FriendLink::orderBy('show_order')->get();
        

        $res = $res ? $res->toArray() : [];

        $links['img'] = $links['txt'] = [];

        if ($res) {
            foreach ($res as $row) {
                if ($row['link_logo']) {
                    $row['link_logo'] = $this->sanmuRepository->getImagePath($row['link_logo']);
                } else {
                    $row['link_logo'] = '';
                }

                if (!empty($row['link_logo'])) {
                    $links['img'][] = ['name' => $row['link_name'],
                        'url' => $row['link_url'],
                        'logo' => $row['link_logo']];
                } else {
                    $links['txt'][] = ['name' => $row['link_name'],
                        'url' => $row['link_url']];
                }
            }
        }

        return $links;
    }
}