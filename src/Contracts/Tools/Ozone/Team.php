<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\KnownValues;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Team
{
    public const addMember = 'tools.ozone.team.addMember';
    public const deleteMember = 'tools.ozone.team.deleteMember';
    public const listMembers = 'tools.ozone.team.listMembers';
    public const updateMember = 'tools.ozone.team.updateMember';

    public const addMemberResponse = ['did' => 'string', 'disabled' => 'bool', 'profile' => ['did' => 'string', 'handle' => 'string', 'displayName' => 'string', 'description' => 'string', 'avatar' => 'string', 'banner' => 'string', 'followersCount' => 'int', 'followsCount' => 'int', 'postsCount' => 'int', 'associated' => 'array', 'joinedViaStarterPack' => 'array', 'indexedAt' => 'string', 'createdAt' => 'string', 'viewer' => 'array', 'labels' => 'array', 'pinnedPost' => 'array'], 'createdAt' => 'string', 'updatedAt' => 'string', 'lastUpdatedBy' => 'string', 'role' => 'string'];
    public const listMembersResponse = ['cursor' => 'string', 'members' => [['did' => 'string', 'disabled' => 'bool', 'profile' => 'array', 'createdAt' => 'string', 'updatedAt' => 'string', 'lastUpdatedBy' => 'string', 'role' => 'string']]];
    public const updateMemberResponse = ['did' => 'string', 'disabled' => 'bool', 'profile' => ['did' => 'string', 'handle' => 'string', 'displayName' => 'string', 'description' => 'string', 'avatar' => 'string', 'banner' => 'string', 'followersCount' => 'int', 'followsCount' => 'int', 'postsCount' => 'int', 'associated' => 'array', 'joinedViaStarterPack' => 'array', 'indexedAt' => 'string', 'createdAt' => 'string', 'viewer' => 'array', 'labels' => 'array', 'pinnedPost' => 'array'], 'createdAt' => 'string', 'updatedAt' => 'string', 'lastUpdatedBy' => 'string', 'role' => 'string'];

    /**
     * Add a member to the ozone team. Requires admin role.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-team-add-member
     */
    #[Post, NSID(self::addMember)]
    #[Output(self::addMemberResponse)]
    public function addMember(#[Format('did')] string $did, #[KnownValues(['tools.ozone.team.defs#roleAdmin', 'tools.ozone.team.defs#roleModerator', 'tools.ozone.team.defs#roleTriage'])] string $role);

    /**
     * Delete a member from ozone team. Requires admin role.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-team-delete-member
     */
    #[Post, NSID(self::deleteMember)]
    public function deleteMember(#[Format('did')] string $did);

    /**
     * List all members with access to the ozone service.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-team-list-members
     */
    #[Get, NSID(self::listMembers)]
    #[Output(self::listMembersResponse)]
    public function listMembers(?string $q = null, ?bool $disabled = null, ?array $roles = null, ?int $limit = 50, ?string $cursor = null);

    /**
     * Update a member in the ozone service. Requires admin role.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-team-update-member
     */
    #[Post, NSID(self::updateMember)]
    #[Output(self::updateMemberResponse)]
    public function updateMember(#[Format('did')] string $did, ?bool $disabled = null, #[KnownValues(['tools.ozone.team.defs#roleAdmin', 'tools.ozone.team.defs#roleModerator', 'tools.ozone.team.defs#roleTriage'])] ?string $role = null);
}
