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

interface Sync
{
    public const getBlob = 'com.atproto.sync.getBlob';
    public const getBlocks = 'com.atproto.sync.getBlocks';
    public const getCheckout = 'com.atproto.sync.getCheckout';
    public const getHead = 'com.atproto.sync.getHead';
    public const getHostStatus = 'com.atproto.sync.getHostStatus';
    public const getLatestCommit = 'com.atproto.sync.getLatestCommit';
    public const getRecord = 'com.atproto.sync.getRecord';
    public const getRepo = 'com.atproto.sync.getRepo';
    public const getRepoStatus = 'com.atproto.sync.getRepoStatus';
    public const listBlobs = 'com.atproto.sync.listBlobs';
    public const listHosts = 'com.atproto.sync.listHosts';
    public const listRepos = 'com.atproto.sync.listRepos';
    public const listReposByCollection = 'com.atproto.sync.listReposByCollection';
    public const notifyOfUpdate = 'com.atproto.sync.notifyOfUpdate';
    public const requestCrawl = 'com.atproto.sync.requestCrawl';

    /**
     * Get a blob associated with a given account. Returns the full blob as originally uploaded. Does not require auth; implemented by PDS.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-get-blob
     */
    #[Get, NSID(self::getBlob)]
    public function getBlob(#[Format('did')] string $did, #[Format('cid')] string $cid);

    /**
     * Get data blocks from a given repo, by CID. For example, intermediate MST nodes, or records. Does not require auth; implemented by PDS.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-get-blocks
     */
    #[Get, NSID(self::getBlocks)]
    public function getBlocks(#[Format('did')] string $did, #[Format('cid')] array $cids);

    /**
     * DEPRECATED - please use com.atproto.sync.getRepo instead.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-get-checkout
     */
    #[\Deprecated]
    #[Get, NSID(self::getCheckout)]
    public function getCheckout(#[Format('did')] string $did);

    /**
     * DEPRECATED - please use com.atproto.sync.getLatestCommit instead.
     *
     * @return array{root: string}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-get-head
     */
    #[\Deprecated]
    #[Get, NSID(self::getHead)]
    public function getHead(#[Format('did')] string $did);

    /**
     * Returns information about a specified upstream host, as consumed by the server. Implemented by relays.
     *
     * @return array{hostname: string, seq: int, accountCount: int, status: string}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-get-host-status
     */
    #[Get, NSID(self::getHostStatus)]
    public function getHostStatus(string $hostname);

    /**
     * Get the current commit CID & revision of the specified repo. Does not require auth.
     *
     * @return array{cid: string, rev: string}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-get-latest-commit
     */
    #[Get, NSID(self::getLatestCommit)]
    public function getLatestCommit(#[Format('did')] string $did);

    /**
     * Get data blocks needed to prove the existence or non-existence of record in the current version of repo. Does not require auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-get-record
     */
    #[Get, NSID(self::getRecord)]
    public function getRecord(#[Format('did')] string $did, #[Format('nsid')] string $collection, #[Format('record-key')] string $rkey);

    /**
     * Download a repository export as CAR file. Optionally only a 'diff' since a previous revision. Does not require auth; implemented by PDS.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-get-repo
     */
    #[Get, NSID(self::getRepo)]
    public function getRepo(#[Format('did')] string $did, #[Format('tid')] ?string $since = null);

    /**
     * Get the hosting status for a repository, on this server. Expected to be implemented by PDS and Relay.
     *
     * @return array{did: string, active: bool, status: string, rev: string}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-get-repo-status
     */
    #[Get, NSID(self::getRepoStatus)]
    public function getRepoStatus(#[Format('did')] string $did);

    /**
     * List blob CIDs for an account, since some repo revision. Does not require auth; implemented by PDS.
     *
     * @return array{cursor: string, cids: array}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-list-blobs
     */
    #[Get, NSID(self::listBlobs)]
    public function listBlobs(#[Format('did')] string $did, #[Format('tid')] ?string $since = null, ?int $limit = 500, ?string $cursor = null);

    /**
     * Enumerates upstream hosts (eg, PDS or relay instances) that this service consumes from. Implemented by relays.
     *
     * @return array{cursor: string, hosts: array{hostname: string, seq: int, accountCount: int, status: array}[]}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-list-hosts
     */
    #[Get, NSID(self::listHosts)]
    public function listHosts(?int $limit = 200, ?string $cursor = null);

    /**
     * Enumerates all the DID, rev, and commit CID for all repos hosted by this service. Does not require auth; implemented by PDS and Relay.
     *
     * @return array{cursor: string, repos: array{did: string, head: string, rev: string, active: bool, status: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-list-repos
     */
    #[Get, NSID(self::listRepos)]
    public function listRepos(?int $limit = 500, ?string $cursor = null);

    /**
     * Enumerates all the DIDs which have records with the given collection NSID.
     *
     * @return array{cursor: string, repos: array{did: string}[]}
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-list-repos-by-collection
     */
    #[Get, NSID(self::listReposByCollection)]
    public function listReposByCollection(#[Format('nsid')] string $collection, ?int $limit = 500, ?string $cursor = null);

    /**
     * Notify a crawling service of a recent update, and that crawling should resume. Intended use is after a gap between repo stream events caused the crawling service to disconnect. Does not require auth; implemented by Relay. DEPRECATED: just use com.atproto.sync.requestCrawl.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-notify-of-update
     */
    #[\Deprecated]
    #[Post, NSID(self::notifyOfUpdate)]
    public function notifyOfUpdate(string $hostname);

    /**
     * Request a service to persistently crawl hosted repos. Expected use is new PDS instances declaring their existence to Relays. Does not require auth.
     *
     * @link https://docs.bsky.app/docs/api/com-atproto-sync-request-crawl
     */
    #[Post, NSID(self::requestCrawl)]
    public function requestCrawl(string $hostname);
}
