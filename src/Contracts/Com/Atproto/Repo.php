<?php
/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

use Revolution\AtProto\Lexicon\Attributes\Deprecated;
use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
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

    public const applyWritesResponse = ['commit' => ['cid' => 'string', 'rev' => 'string'], 'results' => 'array'];
    public const createRecordResponse = ['uri' => 'string', 'cid' => 'string', 'commit' => ['cid' => 'string', 'rev' => 'string'], 'validationStatus' => 'string'];
    public const deleteRecordResponse = ['commit' => ['cid' => 'string', 'rev' => 'string']];
    public const describeRepoResponse = ['handle' => 'string', 'did' => 'string', 'didDoc' => 'mixed', 'collections' => 'array', 'handleIsCorrect' => 'bool'];
    public const getRecordResponse = ['uri' => 'string', 'cid' => 'string', 'value' => 'mixed'];
    public const listMissingBlobsResponse = ['cursor' => 'string', 'blobs' => [['cid' => 'string', 'recordUri' => 'string']]];
    public const listRecordsResponse = ['cursor' => 'string', 'records' => [['uri' => 'string', 'cid' => 'string', 'value' => 'mixed']]];
    public const putRecordResponse = ['uri' => 'string', 'cid' => 'string', 'commit' => ['cid' => 'string', 'rev' => 'string'], 'validationStatus' => 'string'];
    public const uploadBlobResponse = ['blob' => 'array'];

    /**
     * Apply a batch transaction of repository creates, updates, and deletes. Requires auth, implemented by PDS.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-apply-writes
     */
    #[Post, NSID(self::applyWrites)]
    #[Output(self::applyWritesResponse)]
    public function applyWrites(#[Format('at-identifier')] string $repo, #[Union(['com.atproto.repo.applyWrites#create', 'com.atproto.repo.applyWrites#update', 'com.atproto.repo.applyWrites#delete'])] array $writes, ?bool $validate = null, #[Format('cid')] ?string $swapCommit = null);

    /**
     * Create a single new repository record. Requires auth, implemented by PDS.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-create-record
     */
    #[Post, NSID(self::createRecord)]
    #[Output(self::createRecordResponse)]
    public function createRecord(#[Format('at-identifier')] string $repo, #[Format('nsid')] string $collection, mixed $record, ?string $rkey = null, ?bool $validate = null, #[Format('cid')] ?string $swapCommit = null);

    /**
     * Delete a repository record, or ensure it doesn't exist. Requires auth, implemented by PDS.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-delete-record
     */
    #[Post, NSID(self::deleteRecord)]
    #[Output(self::deleteRecordResponse)]
    public function deleteRecord(#[Format('at-identifier')] string $repo, #[Format('nsid')] string $collection, string $rkey, #[Format('cid')] ?string $swapRecord = null, #[Format('cid')] ?string $swapCommit = null);

    /**
     * Get information about an account and repository, including the list of collections. Does not require auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-describe-repo
     */
    #[Get, NSID(self::describeRepo)]
    #[Output(self::describeRepoResponse)]
    public function describeRepo(#[Format('at-identifier')] string $repo);

    /**
     * Get a single record from a repository. Does not require auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-get-record
     */
    #[Get, NSID(self::getRecord)]
    #[Output(self::getRecordResponse)]
    public function getRecord(#[Format('at-identifier')] string $repo, #[Format('nsid')] string $collection, string $rkey, #[Format('cid')] ?string $cid = null);

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
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-list-missing-blobs
     */
    #[Get, NSID(self::listMissingBlobs)]
    #[Output(self::listMissingBlobsResponse)]
    public function listMissingBlobs(?int $limit = 500, ?string $cursor = null);

    /**
     * List a range of records in a repository, matching a specific collection. Does not require auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-list-records
     */
    #[Get, NSID(self::listRecords)]
    #[Output(self::listRecordsResponse)]
    public function listRecords(#[Format('at-identifier')] string $repo, #[Format('nsid')] string $collection, ?int $limit = 50, ?string $cursor = null, #[Deprecated] ?string $rkeyStart = null, #[Deprecated] ?string $rkeyEnd = null, ?bool $reverse = null);

    /**
     * Write a repository record, creating or updating it as needed. Requires auth, implemented by PDS.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-put-record
     */
    #[Post, NSID(self::putRecord)]
    #[Output(self::putRecordResponse)]
    public function putRecord(#[Format('at-identifier')] string $repo, #[Format('nsid')] string $collection, string $rkey, mixed $record, ?bool $validate = null, #[Format('cid')] ?string $swapRecord = null, #[Format('cid')] ?string $swapCommit = null);

    /**
     * Upload a new blob, to be referenced from a repository record. The blob will be deleted if it is not referenced within a time window (eg, minutes). Blob restrictions (mimetype, size, etc) are enforced when the reference is created. Requires auth, implemented by PDS.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-repo-upload-blob
     */
    #[Post, NSID(self::uploadBlob)]
    #[Output(self::uploadBlobResponse)]
    public function uploadBlob();
}
