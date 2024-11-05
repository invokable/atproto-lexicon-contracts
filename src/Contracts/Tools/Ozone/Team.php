<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

interface Team
{
    public const addMember = 'tools.ozone.team.addMember';
    public const deleteMember = 'tools.ozone.team.deleteMember';
    public const listMembers = 'tools.ozone.team.listMembers';
    public const updateMember = 'tools.ozone.team.updateMember';

    /**
     * Add a member to the ozone team. Requires admin role.
     *
     * ```
     * POST tools.ozone.team.addMember
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-team-add-member
     */
    public function addMember(string $did, string $role);

    /**
     * Delete a member from ozone team. Requires admin role.
     *
     * ```
     * POST tools.ozone.team.deleteMember
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-team-delete-member
     */
    public function deleteMember(string $did);

    /**
     * List all members with access to the ozone service.
     *
     * ```
     * GET tools.ozone.team.listMembers
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-team-list-members
     */
    public function listMembers(?int $limit = 50, ?string $cursor = null);

    /**
     * Update a member in the ozone service. Requires admin role.
     *
     * ```
     * POST tools.ozone.team.updateMember
     * ```
     *
     * @see https://docs.bsky.app/docs/api/tools-ozone-team-update-member
     */
    public function updateMember(string $did, ?bool $disabled = null, ?string $role = null);
}
