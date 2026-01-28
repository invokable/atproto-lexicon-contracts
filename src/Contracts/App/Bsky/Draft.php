<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Ref;

interface Draft
{
    public const createDraft = 'app.bsky.draft.createDraft';
    public const deleteDraft = 'app.bsky.draft.deleteDraft';
    public const getDrafts = 'app.bsky.draft.getDrafts';
    public const updateDraft = 'app.bsky.draft.updateDraft';

    /**
     * Inserts a draft using private storage (stash). An upper limit of drafts might be enforced. Requires authentication.
     *
     * @return array{id: string}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-draft-create-draft
     */
    #[Post, NSID(self::createDraft)]
    public function createDraft(#[Ref('app.bsky.draft.defs#draft')] array $draft);

    /**
     * Deletes a draft by ID. Requires authentication.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-draft-delete-draft
     */
    #[Post, NSID(self::deleteDraft)]
    public function deleteDraft(#[Format('tid')] string $id);

    /**
     * Gets views of user drafts. Requires authentication.
     *
     * @return array{cursor: string, drafts: array{id: string, draft: array, createdAt: string, updatedAt: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-draft-get-drafts
     */
    #[Get, NSID(self::getDrafts)]
    public function getDrafts(?int $limit = 50, ?string $cursor = null);

    /**
     * Updates a draft using private storage (stash). If the draft ID points to a non-existing ID, the update will be silently ignored. This is done because updates don't enforce draft limit, so it accepts all writes, but will ignore invalid ones. Requires authentication.
     *
     * @link https://docs.bsky.app/docs/api/app-bsky-draft-update-draft
     */
    #[Post, NSID(self::updateDraft)]
    public function updateDraft(#[Ref('app.bsky.draft.defs#draftWithId')] array $draft);
}
