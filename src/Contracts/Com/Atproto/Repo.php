<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Post;
use Revolution\AtProto\Lexicon\Attributes\Union;

interface Repo
{
    public const applyWrites = 'com.atproto.repo.applyWrites';
    public const createRecord = 'com.atproto.repo.createRecord';
    public const deleteRecord = 'com.atproto.repo.deleteRecord';
    public const describeRepo = 'com.atproto.repo.describeRepo';
    public const getRecord = 'com.atproto.repo.getRecord';
    public const importRepo = 'com.atproto.repo.importRepo';
    public const listMissingBlobs = 'com.atproto.repo.listMissingBlobs';
    public const listRecords = 'com.atproto.repo.listRecords';
    public const putRecord = 'com.atproto.repo.putRecord';
    public const uploadBlob = 'com.atproto.repo.uploadBlob';

    /**
     * Apply a batch transaction of repository creates, updates, and deletes. Requires auth, implemented by PDS.
     *
     * @return array{commit: array{cid: string, rev: string}, results: array}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-apply-writes
     */
    #[Post, NSID(self::applyWrites)]
    public function applyWrites(#[Format('at-identifier')] string $repo, #[Union(['com.atproto.repo.applyWrites#create', 'com.atproto.repo.applyWrites#update', 'com.atproto.repo.applyWrites#delete'])] array $writes, ?bool $validate = null, #[Format('cid')] ?string $swapCommit = null);

    /**
     * Create a single new repository record. Requires auth, implemented by PDS.
     *
     * @return array{uri: string, cid: string, commit: array{cid: string, rev: string}, validationStatus: string}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-create-record
     */
    #[Post, NSID(self::createRecord)]
    public function createRecord(#[Format('at-identifier')] string $repo, #[Format('nsid')] string $collection, mixed $record, #[Format('record-key')] ?string $rkey = null, ?bool $validate = null, #[Format('cid')] ?string $swapCommit = null);

    /**
     * Delete a repository record, or ensure it doesn't exist. Requires auth, implemented by PDS.
     *
     * @return array{commit: array{cid: string, rev: string}}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-delete-record
     */
    #[Post, NSID(self::deleteRecord)]
    public function deleteRecord(#[Format('at-identifier')] string $repo, #[Format('nsid')] string $collection, #[Format('record-key')] string $rkey, #[Format('cid')] ?string $swapRecord = null, #[Format('cid')] ?string $swapCommit = null);

    /**
     * Get information about an account and repository, including the list of collections. Does not require auth.
     *
     * @return array{handle: string, did: string, didDoc: mixed, collections: array, handleIsCorrect: bool}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-describe-repo
     */
    #[Get, NSID(self::describeRepo)]
    public function describeRepo(#[Format('at-identifier')] string $repo);

    /**
     * Get a single record from a repository. Does not require auth.
     *
     * @return array{uri: string, cid: string, value: mixed}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-get-record
     */
    #[Get, NSID(self::getRecord)]
    public function getRecord(#[Format('at-identifier')] string $repo, #[Format('nsid')] string $collection, #[Format('record-key')] string $rkey, #[Format('cid')] ?string $cid = null);

    /**
     * Import a repo in the form of a CAR file. Requires Content-Length HTTP header to be set.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-import-repo
     */
    #[Post, NSID(self::importRepo)]
    public function importRepo();

    /**
     * Returns a list of missing blobs for the requesting account. Intended to be used in the account migration flow.
     *
     * @return array{cursor: string, blobs: array{cid: string, recordUri: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-list-missing-blobs
     */
    #[Get, NSID(self::listMissingBlobs)]
    public function listMissingBlobs(?int $limit = 500, ?string $cursor = null);

    /**
     * List a range of records in a repository, matching a specific collection. Does not require auth.
     *
     * @return array{cursor: string, records: array{uri: string, cid: string, value: mixed}[]}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-list-records
     */
    #[Get, NSID(self::listRecords)]
    public function listRecords(#[Format('at-identifier')] string $repo, #[Format('nsid')] string $collection, ?int $limit = 50, ?string $cursor = null, ?bool $reverse = null);

    /**
     * Write a repository record, creating or updating it as needed. Requires auth, implemented by PDS.
     *
     * @return array{uri: string, cid: string, commit: array{cid: string, rev: string}, validationStatus: string}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-put-record
     */
    #[Post, NSID(self::putRecord)]
    public function putRecord(#[Format('at-identifier')] string $repo, #[Format('nsid')] string $collection, #[Format('record-key')] string $rkey, mixed $record, ?bool $validate = null, #[Format('cid')] ?string $swapRecord = null, #[Format('cid')] ?string $swapCommit = null);

    /**
     * Upload a new blob, to be referenced from a repository record. The blob will be deleted if it is not referenced within a time window (eg, minutes). Blob restrictions (mimetype, size, etc) are enforced when the reference is created. Requires auth, implemented by PDS.
     *
     * @return array{blob: array}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-upload-blob
     */
    #[Post, NSID(self::uploadBlob)]
    public function uploadBlob();
}
