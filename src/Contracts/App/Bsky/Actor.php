<?php

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\App\Bsky;

interface Actor
{
    public const getPreferences = 'app.bsky.actor.getPreferences';
    public const getProfile = 'app.bsky.actor.getProfile';
    public const getProfiles = 'app.bsky.actor.getProfiles';
    public const getSuggestions = 'app.bsky.actor.getSuggestions';
    public const putPreferences = 'app.bsky.actor.putPreferences';
    public const searchActors = 'app.bsky.actor.searchActors';
    public const searchActorsTypeahead = 'app.bsky.actor.searchActorsTypeahead';

    /**
     * Get private preferences attached to the current account. Expected use is synchronization between multiple devices, and import/export during account migration. Requires auth.
     *
     * ```
     * GET app.bsky.actor.getPreferences
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-actor-get-preferences
     */
    public function getPreferences();

    /**
     * Get detailed profile view of an actor. Does not require auth, but contains relevant metadata with auth.
     *
     * ```
     * GET app.bsky.actor.getProfile
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-actor-get-profile
     */
    public function getProfile(string $actor);

    /**
     * Get detailed profile views of multiple actors.
     *
     * ```
     * GET app.bsky.actor.getProfiles
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-actor-get-profiles
     */
    public function getProfiles(array $actors);

    /**
     * Get a list of suggested actors. Expected use is discovery of accounts to follow during new account onboarding.
     *
     * ```
     * GET app.bsky.actor.getSuggestions
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-actor-get-suggestions
     */
    public function getSuggestions(?int $limit = 50, ?string $cursor = null);

    /**
     * Set the private preferences attached to the account.
     *
     * ```
     * POST app.bsky.actor.putPreferences
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-actor-put-preferences
     */
    public function putPreferences(array $preferences);

    /**
     * Find actors (profiles) matching search criteria. Does not require auth.
     *
     * ```
     * GET app.bsky.actor.searchActors
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-actor-search-actors
     */
    public function searchActors(?string $term = null, ?string $q = null, ?int $limit = 25, ?string $cursor = null);

    /**
     * Find actor suggestions for a prefix search term. Expected use is for auto-completion during text field entry. Does not require auth.
     *
     * ```
     * GET app.bsky.actor.searchActorsTypeahead
     * ```
     *
     * @see https://docs.bsky.app/docs/api/app-bsky-actor-search-actors-typeahead
     */
    public function searchActorsTypeahead(?string $term = null, ?string $q = null, ?int $limit = 10);
}
