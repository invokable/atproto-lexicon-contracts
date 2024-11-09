<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Team
{
    public const addMember = 'tools.ozone.team.addMember';
    public const deleteMember = 'tools.ozone.team.deleteMember';
    public const listMembers = 'tools.ozone.team.listMembers';
    public const updateMember = 'tools.ozone.team.updateMember';

    /**
     * Add a member to the ozone team. Requires admin role.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-team-add-member
     */
    #[Post, NSID(self::addMember)]
    public function addMember(string $did, string $role);

    /**
     * Delete a member from ozone team. Requires admin role.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-team-delete-member
     */
    #[Post, NSID(self::deleteMember)]
    public function deleteMember(string $did);

    /**
     * List all members with access to the ozone service.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-team-list-members
     */
    #[Get, NSID(self::listMembers)]
    public function listMembers(?int $limit = 50, ?string $cursor = null);

    /**
     * Update a member in the ozone service. Requires admin role.
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-team-update-member
     */
    #[Post, NSID(self::updateMember)]
    public function updateMember(string $did, ?bool $disabled = null, ?string $role = null);
}
