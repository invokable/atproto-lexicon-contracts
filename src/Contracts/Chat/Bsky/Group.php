<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Chat\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Group
{
    public const addMembers = 'chat.bsky.group.addMembers';
    public const approveJoinRequest = 'chat.bsky.group.approveJoinRequest';
    public const createGroup = 'chat.bsky.group.createGroup';
    public const createJoinLink = 'chat.bsky.group.createJoinLink';
    public const disableJoinLink = 'chat.bsky.group.disableJoinLink';
    public const editGroup = 'chat.bsky.group.editGroup';
    public const editJoinLink = 'chat.bsky.group.editJoinLink';
    public const enableJoinLink = 'chat.bsky.group.enableJoinLink';
    public const getGroupPublicInfo = 'chat.bsky.group.getGroupPublicInfo';
    public const listJoinRequests = 'chat.bsky.group.listJoinRequests';
    public const rejectJoinRequest = 'chat.bsky.group.rejectJoinRequest';
    public const removeMembers = 'chat.bsky.group.removeMembers';
    public const requestJoin = 'chat.bsky.group.requestJoin';

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Adds members to a group. The members are added in 'request' status, so they have to accept it. This creates convo memberships.
     *
     * @return array{convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: array, unreadCount: int, kind: array}, addedMembers: array{did: string, handle: string, displayName: string, avatar: string, associated: array, viewer: array, labels: array, createdAt: string, chatDisabled: bool, verification: array, kind: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-add-members
     */
    #[Post, NSID(self::addMembers)]
    public function addMembers(string $convoId, #[Format('did')] array $members);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Approves a request to join a group (via join link) the user owns. Action taken by the group owner.
     *
     * @return array{convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: array, unreadCount: int, kind: array}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-approve-join-request
     */
    #[Post, NSID(self::approveJoinRequest)]
    public function approveJoinRequest(string $convoId, #[Format('did')] string $member);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Creates a group convo, specifying the members to be added to it. Unlike getConvoForMembers, this isn't idempotent. It will create new groups even if the membership is identical to pre-existing groups. Will create 'pending' membership for all members, except the owner who is 'accepted'.
     *
     * @return array{convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: array, unreadCount: int, kind: array}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-create-group
     */
    #[Post, NSID(self::createGroup)]
    public function createGroup(#[Format('did')] array $members, string $name);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Creates a join link for the group convo.
     *
     * @return array{joinLink: array{code: string, enabledStatus: array, requireApproval: bool, joinRule: array, createdAt: string}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-create-join-link
     */
    #[Post, NSID(self::createJoinLink)]
    public function createJoinLink(string $convoId, #[Ref('chat.bsky.group.defs#joinRule')] string $joinRule, ?bool $requireApproval = null);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Disables the active join link for the group convo.
     *
     * @return array{joinLink: array{code: string, enabledStatus: array, requireApproval: bool, joinRule: array, createdAt: string}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-disable-join-link
     */
    #[Post, NSID(self::disableJoinLink)]
    public function disableJoinLink(string $convoId);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Edits group settings.
     *
     * @return array{convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: array, unreadCount: int, kind: array}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-edit-group
     */
    #[Post, NSID(self::editGroup)]
    public function editGroup(string $convoId, string $name);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Edits the existing join link settings for the group convo.
     *
     * @return array{joinLink: array{code: string, enabledStatus: array, requireApproval: bool, joinRule: array, createdAt: string}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-edit-join-link
     */
    #[Post, NSID(self::editJoinLink)]
    public function editJoinLink(string $convoId, ?bool $requireApproval = null, #[Ref('chat.bsky.group.defs#joinRule')] ?string $joinRule = null);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Re-enables a previously disabled join link for the group convo.
     *
     * @return array{joinLink: array{code: string, enabledStatus: array, requireApproval: bool, joinRule: array, createdAt: string}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-enable-join-link
     */
    #[Post, NSID(self::enableJoinLink)]
    public function enableJoinLink(string $convoId);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Get public information about a group from an join link.
     *
     * @return array{group: array{name: string, owner: array, memberCount: int, requireApproval: bool}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-get-group-public-info
     */
    #[Get, NSID(self::getGroupPublicInfo)]
    public function getGroupPublicInfo(string $code);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Lists a page of request to join a group (via join link) the user owns. Shows the data from the owner's point of view.
     *
     * @return array{cursor: string, requests: array{convoId: string, requestedBy: array, requestedAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-list-join-requests
     */
    #[Get, NSID(self::listJoinRequests)]
    public function listJoinRequests(string $convoId, ?int $limit = 50, ?string $cursor = null);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Rejects a request to join a group (via join link) the user owns. Action taken by the group owner.
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-reject-join-request
     */
    #[Post, NSID(self::rejectJoinRequest)]
    public function rejectJoinRequest(string $convoId, #[Format('did')] string $member);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Removes members from a group. This deletes convo memberships, doesn't just set a status.
     *
     * @return array{convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: array, unreadCount: int, kind: array}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-remove-members
     */
    #[Post, NSID(self::removeMembers)]
    public function removeMembers(string $convoId, #[Format('did')] array $members);

    /**
     * [NOTE: This is under active development and should be considered unstable while this note is here]. Sends a request to join a group (via join link) to the group owner. Action taken by the prospective group member.
     *
     * @return array{status: string, convo: array{id: string, rev: string, members: array, lastMessage: array, lastReaction: array, muted: bool, status: array, unreadCount: int, kind: array}}
     *
     * @link https://docs.bsky.app/docs/api/chat-bsky-group-request-join
     */
    #[Post, NSID(self::requestJoin)]
    public function requestJoin(string $code);
}
