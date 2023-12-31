<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\OfficialAccount\User;

use EasyWeChat\Kernel\BaseClient;

/**
 * Class TagClient.
 *
 * @author overtrue <i@overtrue.me>
 */
class TagClient extends BaseClient
{
    /**
     * Create tag.
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(string $name)
    {
        $params = [
            'tag' => ['name' => $name],
        ];

        return $this->httpPostJson('cgi-bin/tags/create', $params);
    }

    /**
     * List all tags.
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function list()
    {
        return $this->httpGet('cgi-bin/tags/get');
    }

    /**
     * Update a tag name.
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(int $tagId, string $name)
    {
        $params = [
            'tag' => [
                'id' => $tagId,
                'name' => $name,
            ],
        ];

        return $this->httpPostJson('cgi-bin/tags/update', $params);
    }

    /**
     * Delete tag.
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete(int $tagId)
    {
        $params = [
            'tag' => ['id' => $tagId],
        ];

        return $this->httpPostJson('cgi-bin/tags/delete', $params);
    }

    /**
     * Get user tags.
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function userTags(string $openid)
    {
        $params = ['openid' => $openid];

        return $this->httpPostJson('cgi-bin/tags/getidlist', $params);
    }

    /**
     * Get users from a tag.
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function usersOfTag(int $tagId, string $nextOpenId = '')
    {
        $params = [
            'tagid' => $tagId,
            'next_openid' => $nextOpenId,
        ];

        return $this->httpPostJson('cgi-bin/user/tag/get', $params);
    }

    /**
     * Batch tag users.
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function tagUsers(array $openids, int $tagId)
    {
        $params = [
            'openid_list' => $openids,
            'tagid' => $tagId,
        ];

        return $this->httpPostJson('cgi-bin/tags/members/batchtagging', $params);
    }

    /**
     * Untag users from a tag.
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function untagUsers(array $openids, int $tagId)
    {
        $params = [
            'openid_list' => $openids,
            'tagid' => $tagId,
        ];

        return $this->httpPostJson('cgi-bin/tags/members/batchuntagging', $params);
    }
}
