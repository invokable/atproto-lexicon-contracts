<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Com\Atproto;

interface Sync
{
    public const getBlob = 'com.atproto.sync.getBlob';
    public const getBlocks = 'com.atproto.sync.getBlocks';
    public const getCheckout = 'com.atproto.sync.getCheckout';
    public const getHead = 'com.atproto.sync.getHead';
    public const getLatestCommit = 'com.atproto.sync.getLatestCommit';
    public const getRecord = 'com.atproto.sync.getRecord';
    public const getRepo = 'com.atproto.sync.getRepo';
    public const getRepoStatus = 'com.atproto.sync.getRepoStatus';
    public const listBlobs = 'com.atproto.sync.listBlobs';
    public const listRepos = 'com.atproto.sync.listRepos';
    public const notifyOfUpdate = 'com.atproto.sync.notifyOfUpdate';
    public const requestCrawl = 'com.atproto.sync.requestCrawl';

    /**
     * Get a blob associated with a given account. Returns the full blob as originally uploaded. Does not require auth; implemented by PDS.
     *
     * ```
     * GET com.atproto.sync.getBlob
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-get-blob
     */
    public function getBlob(string $did, string $cid);

    /**
     * Get data blocks from a given repo, by CID. For example, intermediate MST nodes, or records. Does not require auth; implemented by PDS.
     *
     * ```
     * GET com.atproto.sync.getBlocks
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-get-blocks
     */
    public function getBlocks(string $did, array $cids);

    /**
     * DEPRECATED - please use com.atproto.sync.getRepo instead.
     *
     * ```
     * GET com.atproto.sync.getCheckout
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-get-checkout
     */
    public function getCheckout(string $did);

    /**
     * DEPRECATED - please use com.atproto.sync.getLatestCommit instead.
     *
     * ```
     * GET com.atproto.sync.getHead
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-get-head
     */
    public function getHead(string $did);

    /**
     * Get the current commit CID & revision of the specified repo. Does not require auth.
     *
     * ```
     * GET com.atproto.sync.getLatestCommit
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-get-latest-commit
     */
    public function getLatestCommit(string $did);

    /**
     * Get data blocks needed to prove the existence or non-existence of record in the current version of repo. Does not require auth.
     *
     * ```
     * GET com.atproto.sync.getRecord
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-get-record
     */
    public function getRecord(string $did, string $collection, string $rkey, ?string $commit = null);

    /**
     * Download a repository export as CAR file. Optionally only a 'diff' since a previous revision. Does not require auth; implemented by PDS.
     *
     * ```
     * GET com.atproto.sync.getRepo
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-get-repo
     */
    public function getRepo(string $did, ?string $since = null);

    /**
     * Get the hosting status for a repository, on this server. Expected to be implemented by PDS and Relay.
     *
     * ```
     * GET com.atproto.sync.getRepoStatus
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-get-repo-status
     */
    public function getRepoStatus(string $did);

    /**
     * List blob CIDs for an account, since some repo revision. Does not require auth; implemented by PDS.
     *
     * ```
     * GET com.atproto.sync.listBlobs
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-list-blobs
     */
    public function listBlobs(string $did, ?string $since = null, ?int $limit = 500, ?string $cursor = null);

    /**
     * Enumerates all the DID, rev, and commit CID for all repos hosted by this service. Does not require auth; implemented by PDS and Relay.
     *
     * ```
     * GET com.atproto.sync.listRepos
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-list-repos
     */
    public function listRepos(?int $limit = 500, ?string $cursor = null);

    /**
     * Notify a crawling service of a recent update, and that crawling should resume. Intended use is after a gap between repo stream events caused the crawling service to disconnect. Does not require auth; implemented by Relay.
     *
     * ```
     * POST com.atproto.sync.notifyOfUpdate
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-notify-of-update
     */
    public function notifyOfUpdate(string $hostname);

    /**
     * Request a service to persistently crawl hosted repos. Expected use is new PDS instances declaring their existence to Relays. Does not require auth.
     *
     * ```
     * POST com.atproto.sync.requestCrawl
     * ```
     *
     * @see https://docs.bsky.app/docs/api/com-atproto-sync-request-crawl
     */
    public function requestCrawl(string $hostname);
}
