<?php
/**
 * GENERATED CODE.
 */

return array (
  'app.bsky.actor.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.actor.defs',
    'defs' => 
    array (
      'profileViewBasic' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'handle',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
          ),
          'displayName' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 64,
            'maxLength' => 640,
          ),
          'avatar' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'associated' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileAssociated',
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#viewerState',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'profileView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'handle',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
          ),
          'displayName' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 64,
            'maxLength' => 640,
          ),
          'description' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 256,
            'maxLength' => 2560,
          ),
          'avatar' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'associated' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileAssociated',
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#viewerState',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
        ),
      ),
      'profileViewDetailed' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'handle',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
          ),
          'displayName' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 64,
            'maxLength' => 640,
          ),
          'description' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 256,
            'maxLength' => 2560,
          ),
          'avatar' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'banner' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'followersCount' => 
          array (
            'type' => 'integer',
          ),
          'followsCount' => 
          array (
            'type' => 'integer',
          ),
          'postsCount' => 
          array (
            'type' => 'integer',
          ),
          'associated' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileAssociated',
          ),
          'joinedViaStarterPack' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.graph.defs#starterPackViewBasic',
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#viewerState',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'pinnedPost' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.repo.strongRef',
          ),
        ),
      ),
      'profileAssociated' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'lists' => 
          array (
            'type' => 'integer',
          ),
          'feedgens' => 
          array (
            'type' => 'integer',
          ),
          'starterPacks' => 
          array (
            'type' => 'integer',
          ),
          'labeler' => 
          array (
            'type' => 'boolean',
          ),
          'chat' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileAssociatedChat',
          ),
        ),
      ),
      'profileAssociatedChat' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'allowIncoming',
        ),
        'properties' => 
        array (
          'allowIncoming' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'all',
              1 => 'none',
              2 => 'following',
            ),
          ),
        ),
      ),
      'viewerState' => 
      array (
        'type' => 'object',
        'description' => 'Metadata about the requesting account\'s relationship with the subject account. Only has meaningful content for authed requests.',
        'properties' => 
        array (
          'muted' => 
          array (
            'type' => 'boolean',
          ),
          'mutedByList' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.graph.defs#listViewBasic',
          ),
          'blockedBy' => 
          array (
            'type' => 'boolean',
          ),
          'blocking' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'blockingByList' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.graph.defs#listViewBasic',
          ),
          'following' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'followedBy' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'knownFollowers' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#knownFollowers',
          ),
        ),
      ),
      'knownFollowers' => 
      array (
        'type' => 'object',
        'description' => 'The subject\'s followers whom you also follow',
        'required' => 
        array (
          0 => 'count',
          1 => 'followers',
        ),
        'properties' => 
        array (
          'count' => 
          array (
            'type' => 'integer',
          ),
          'followers' => 
          array (
            'type' => 'array',
            'minLength' => 0,
            'maxLength' => 5,
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.actor.defs#profileViewBasic',
            ),
          ),
        ),
      ),
      'preferences' => 
      array (
        'type' => 'array',
        'items' => 
        array (
          'type' => 'union',
          'refs' => 
          array (
            0 => 'lex:app.bsky.actor.defs#adultContentPref',
            1 => 'lex:app.bsky.actor.defs#contentLabelPref',
            2 => 'lex:app.bsky.actor.defs#savedFeedsPref',
            3 => 'lex:app.bsky.actor.defs#savedFeedsPrefV2',
            4 => 'lex:app.bsky.actor.defs#personalDetailsPref',
            5 => 'lex:app.bsky.actor.defs#feedViewPref',
            6 => 'lex:app.bsky.actor.defs#threadViewPref',
            7 => 'lex:app.bsky.actor.defs#interestsPref',
            8 => 'lex:app.bsky.actor.defs#mutedWordsPref',
            9 => 'lex:app.bsky.actor.defs#hiddenPostsPref',
            10 => 'lex:app.bsky.actor.defs#bskyAppStatePref',
            11 => 'lex:app.bsky.actor.defs#labelersPref',
            12 => 'lex:app.bsky.actor.defs#postInteractionSettingsPref',
          ),
        ),
      ),
      'adultContentPref' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'enabled',
        ),
        'properties' => 
        array (
          'enabled' => 
          array (
            'type' => 'boolean',
            'default' => false,
          ),
        ),
      ),
      'contentLabelPref' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'label',
          1 => 'visibility',
        ),
        'properties' => 
        array (
          'labelerDid' => 
          array (
            'type' => 'string',
            'description' => 'Which labeler does this preference apply to? If undefined, applies globally.',
            'format' => 'did',
          ),
          'label' => 
          array (
            'type' => 'string',
          ),
          'visibility' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'ignore',
              1 => 'show',
              2 => 'warn',
              3 => 'hide',
            ),
          ),
        ),
      ),
      'savedFeed' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'id',
          1 => 'type',
          2 => 'value',
          3 => 'pinned',
        ),
        'properties' => 
        array (
          'id' => 
          array (
            'type' => 'string',
          ),
          'type' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'feed',
              1 => 'list',
              2 => 'timeline',
            ),
          ),
          'value' => 
          array (
            'type' => 'string',
          ),
          'pinned' => 
          array (
            'type' => 'boolean',
          ),
        ),
      ),
      'savedFeedsPrefV2' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'items',
        ),
        'properties' => 
        array (
          'items' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.actor.defs#savedFeed',
            ),
          ),
        ),
      ),
      'savedFeedsPref' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'pinned',
          1 => 'saved',
        ),
        'properties' => 
        array (
          'pinned' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
            ),
          ),
          'saved' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
            ),
          ),
          'timelineIndex' => 
          array (
            'type' => 'integer',
          ),
        ),
      ),
      'personalDetailsPref' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'birthDate' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
            'description' => 'The birth date of account owner.',
          ),
        ),
      ),
      'feedViewPref' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'feed',
        ),
        'properties' => 
        array (
          'feed' => 
          array (
            'type' => 'string',
            'description' => 'The URI of the feed, or an identifier which describes the feed.',
          ),
          'hideReplies' => 
          array (
            'type' => 'boolean',
            'description' => 'Hide replies in the feed.',
          ),
          'hideRepliesByUnfollowed' => 
          array (
            'type' => 'boolean',
            'description' => 'Hide replies in the feed if they are not by followed users.',
            'default' => true,
          ),
          'hideRepliesByLikeCount' => 
          array (
            'type' => 'integer',
            'description' => 'Hide replies in the feed if they do not have this number of likes.',
          ),
          'hideReposts' => 
          array (
            'type' => 'boolean',
            'description' => 'Hide reposts in the feed.',
          ),
          'hideQuotePosts' => 
          array (
            'type' => 'boolean',
            'description' => 'Hide quote posts in the feed.',
          ),
        ),
      ),
      'threadViewPref' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'sort' => 
          array (
            'type' => 'string',
            'description' => 'Sorting mode for threads.',
            'knownValues' => 
            array (
              0 => 'oldest',
              1 => 'newest',
              2 => 'most-likes',
              3 => 'random',
              4 => 'hotness',
            ),
          ),
          'prioritizeFollowedUsers' => 
          array (
            'type' => 'boolean',
            'description' => 'Show followed users at the top of all replies.',
          ),
        ),
      ),
      'interestsPref' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'tags',
        ),
        'properties' => 
        array (
          'tags' => 
          array (
            'type' => 'array',
            'maxLength' => 100,
            'items' => 
            array (
              'type' => 'string',
              'maxLength' => 640,
              'maxGraphemes' => 64,
            ),
            'description' => 'A list of tags which describe the account owner\'s interests gathered during onboarding.',
          ),
        ),
      ),
      'mutedWordTarget' => 
      array (
        'type' => 'string',
        'knownValues' => 
        array (
          0 => 'content',
          1 => 'tag',
        ),
        'maxLength' => 640,
        'maxGraphemes' => 64,
      ),
      'mutedWord' => 
      array (
        'type' => 'object',
        'description' => 'A word that the account owner has muted.',
        'required' => 
        array (
          0 => 'value',
          1 => 'targets',
        ),
        'properties' => 
        array (
          'id' => 
          array (
            'type' => 'string',
          ),
          'value' => 
          array (
            'type' => 'string',
            'description' => 'The muted word itself.',
            'maxLength' => 10000,
            'maxGraphemes' => 1000,
          ),
          'targets' => 
          array (
            'type' => 'array',
            'description' => 'The intended targets of the muted word.',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.actor.defs#mutedWordTarget',
            ),
          ),
          'actorTarget' => 
          array (
            'type' => 'string',
            'description' => 'Groups of users to apply the muted word to. If undefined, applies to all users.',
            'knownValues' => 
            array (
              0 => 'all',
              1 => 'exclude-following',
            ),
            'default' => 'all',
          ),
          'expiresAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
            'description' => 'The date and time at which the muted word will expire and no longer be applied.',
          ),
        ),
      ),
      'mutedWordsPref' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'items',
        ),
        'properties' => 
        array (
          'items' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.actor.defs#mutedWord',
            ),
            'description' => 'A list of words the account owner has muted.',
          ),
        ),
      ),
      'hiddenPostsPref' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'items',
        ),
        'properties' => 
        array (
          'items' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
            ),
            'description' => 'A list of URIs of posts the account owner has hidden.',
          ),
        ),
      ),
      'labelersPref' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'labelers',
        ),
        'properties' => 
        array (
          'labelers' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.actor.defs#labelerPrefItem',
            ),
          ),
        ),
      ),
      'labelerPrefItem' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
        ),
      ),
      'bskyAppStatePref' => 
      array (
        'description' => 'A grab bag of state that\'s specific to the bsky.app program. Third-party apps shouldn\'t use this.',
        'type' => 'object',
        'properties' => 
        array (
          'activeProgressGuide' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#bskyAppProgressGuide',
          ),
          'queuedNudges' => 
          array (
            'description' => 'An array of tokens which identify nudges (modals, popups, tours, highlight dots) that should be shown to the user.',
            'type' => 'array',
            'maxLength' => 1000,
            'items' => 
            array (
              'type' => 'string',
              'maxLength' => 100,
            ),
          ),
          'nuxs' => 
          array (
            'description' => 'Storage for NUXs the user has encountered.',
            'type' => 'array',
            'maxLength' => 100,
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.actor.defs#nux',
            ),
          ),
        ),
      ),
      'bskyAppProgressGuide' => 
      array (
        'description' => 'If set, an active progress guide. Once completed, can be set to undefined. Should have unspecced fields tracking progress.',
        'type' => 'object',
        'required' => 
        array (
          0 => 'guide',
        ),
        'properties' => 
        array (
          'guide' => 
          array (
            'type' => 'string',
            'maxLength' => 100,
          ),
        ),
      ),
      'nux' => 
      array (
        'type' => 'object',
        'description' => 'A new user experiences (NUX) storage object',
        'required' => 
        array (
          0 => 'id',
          1 => 'completed',
        ),
        'properties' => 
        array (
          'id' => 
          array (
            'type' => 'string',
            'maxLength' => 100,
          ),
          'completed' => 
          array (
            'type' => 'boolean',
            'default' => false,
          ),
          'data' => 
          array (
            'description' => 'Arbitrary data for the NUX. The structure is defined by the NUX itself. Limited to 300 characters.',
            'type' => 'string',
            'maxLength' => 3000,
            'maxGraphemes' => 300,
          ),
          'expiresAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
            'description' => 'The date and time at which the NUX will expire and should be considered completed.',
          ),
        ),
      ),
      'postInteractionSettingsPref' => 
      array (
        'type' => 'object',
        'description' => 'Default post interaction settings for the account. These values should be applied as default values when creating new posts. These refs should mirror the threadgate and postgate records exactly.',
        'required' => 
        array (
        ),
        'properties' => 
        array (
          'threadgateAllowRules' => 
          array (
            'description' => 'Matches threadgate record. List of rules defining who can reply to this users posts. If value is an empty array, no one can reply. If value is undefined, anyone can reply.',
            'type' => 'array',
            'maxLength' => 5,
            'items' => 
            array (
              'type' => 'union',
              'refs' => 
              array (
                0 => 'lex:app.bsky.feed.threadgate#mentionRule',
                1 => 'lex:app.bsky.feed.threadgate#followerRule',
                2 => 'lex:app.bsky.feed.threadgate#followingRule',
                3 => 'lex:app.bsky.feed.threadgate#listRule',
              ),
            ),
          ),
          'postgateEmbeddingRules' => 
          array (
            'description' => 'Matches postgate record. List of rules defining who can embed this users posts. If value is an empty array or is undefined, no particular rules apply and anyone can embed.',
            'type' => 'array',
            'maxLength' => 5,
            'items' => 
            array (
              'type' => 'union',
              'refs' => 
              array (
                0 => 'lex:app.bsky.feed.postgate#disableRule',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.actor.getPreferences' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.actor.getPreferences',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get private preferences attached to the current account. Expected use is synchronization between multiple devices, and import/export during account migration. Requires auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'preferences',
            ),
            'properties' => 
            array (
              'preferences' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.actor.defs#preferences',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.actor.getProfile' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.actor.getProfile',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get detailed profile view of an actor. Does not require auth, but contains relevant metadata with auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'Handle or DID of account to fetch profile of.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileViewDetailed',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.actor.getProfiles' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.actor.getProfiles',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get detailed profile views of multiple actors.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actors',
          ),
          'properties' => 
          array (
            'actors' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'at-identifier',
              ),
              'maxLength' => 25,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'profiles',
            ),
            'properties' => 
            array (
              'profiles' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileViewDetailed',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.actor.getSuggestions' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.actor.getSuggestions',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a list of suggested actors. Expected use is discovery of accounts to follow during new account onboarding.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'actors',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'actors' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileView',
                ),
              ),
              'recId' => 
              array (
                'type' => 'integer',
                'description' => 'Snowflake for this recommendation, use when submitting recommendation events.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.actor.profile' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.actor.profile',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'A declaration of a Bluesky account profile.',
        'key' => 'literal:self',
        'record' => 
        array (
          'type' => 'object',
          'properties' => 
          array (
            'displayName' => 
            array (
              'type' => 'string',
              'maxGraphemes' => 64,
              'maxLength' => 640,
            ),
            'description' => 
            array (
              'type' => 'string',
              'description' => 'Free-form profile description text.',
              'maxGraphemes' => 256,
              'maxLength' => 2560,
            ),
            'avatar' => 
            array (
              'type' => 'blob',
              'description' => 'Small image to be displayed next to posts from account. AKA, \'profile picture\'',
              'accept' => 
              array (
                0 => 'image/png',
                1 => 'image/jpeg',
              ),
              'maxSize' => 1000000,
            ),
            'banner' => 
            array (
              'type' => 'blob',
              'description' => 'Larger horizontal image to display behind profile view.',
              'accept' => 
              array (
                0 => 'image/png',
                1 => 'image/jpeg',
              ),
              'maxSize' => 1000000,
            ),
            'labels' => 
            array (
              'type' => 'union',
              'description' => 'Self-label values, specific to the Bluesky application, on the overall account.',
              'refs' => 
              array (
                0 => 'lex:com.atproto.label.defs#selfLabels',
              ),
            ),
            'joinedViaStarterPack' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.repo.strongRef',
            ),
            'pinnedPost' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.repo.strongRef',
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.actor.putPreferences' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.actor.putPreferences',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Set the private preferences attached to the account.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'preferences',
            ),
            'properties' => 
            array (
              'preferences' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.actor.defs#preferences',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.actor.searchActors' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.actor.searchActors',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Find actors (profiles) matching search criteria. Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'term' => 
            array (
              'type' => 'string',
              'description' => 'DEPRECATED: use \'q\' instead.',
            ),
            'q' => 
            array (
              'type' => 'string',
              'description' => 'Search query string. Syntax, phrase, boolean, and faceting is unspecified, but Lucene query syntax is recommended.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 25,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'actors',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'actors' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.actor.searchActorsTypeahead' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.actor.searchActorsTypeahead',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Find actor suggestions for a prefix search term. Expected use is for auto-completion during text field entry. Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'term' => 
            array (
              'type' => 'string',
              'description' => 'DEPRECATED: use \'q\' instead.',
            ),
            'q' => 
            array (
              'type' => 'string',
              'description' => 'Search query prefix; not a full query string.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 10,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'actors',
            ),
            'properties' => 
            array (
              'actors' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileViewBasic',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.embed.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.embed.defs',
    'defs' => 
    array (
      'aspectRatio' => 
      array (
        'type' => 'object',
        'description' => 'width:height represents an aspect ratio. It may be approximate, and may not correspond to absolute dimensions in any given unit.',
        'required' => 
        array (
          0 => 'width',
          1 => 'height',
        ),
        'properties' => 
        array (
          'width' => 
          array (
            'type' => 'integer',
            'minimum' => 1,
          ),
          'height' => 
          array (
            'type' => 'integer',
            'minimum' => 1,
          ),
        ),
      ),
    ),
  ),
  'app.bsky.embed.external' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.embed.external',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'object',
        'description' => 'A representation of some externally linked content (eg, a URL and \'card\'), embedded in a Bluesky record (eg, a post).',
        'required' => 
        array (
          0 => 'external',
        ),
        'properties' => 
        array (
          'external' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.embed.external#external',
          ),
        ),
      ),
      'external' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'title',
          2 => 'description',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'title' => 
          array (
            'type' => 'string',
          ),
          'description' => 
          array (
            'type' => 'string',
          ),
          'thumb' => 
          array (
            'type' => 'blob',
            'accept' => 
            array (
              0 => 'image/*',
            ),
            'maxSize' => 1000000,
          ),
        ),
      ),
      'view' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'external',
        ),
        'properties' => 
        array (
          'external' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.embed.external#viewExternal',
          ),
        ),
      ),
      'viewExternal' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'title',
          2 => 'description',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'title' => 
          array (
            'type' => 'string',
          ),
          'description' => 
          array (
            'type' => 'string',
          ),
          'thumb' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.embed.images' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.embed.images',
    'description' => 'A set of images embedded in a Bluesky record (eg, a post).',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'images',
        ),
        'properties' => 
        array (
          'images' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.embed.images#image',
            ),
            'maxLength' => 4,
          ),
        ),
      ),
      'image' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'image',
          1 => 'alt',
        ),
        'properties' => 
        array (
          'image' => 
          array (
            'type' => 'blob',
            'accept' => 
            array (
              0 => 'image/*',
            ),
            'maxSize' => 1000000,
          ),
          'alt' => 
          array (
            'type' => 'string',
            'description' => 'Alt text description of the image, for accessibility.',
          ),
          'aspectRatio' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.embed.defs#aspectRatio',
          ),
        ),
      ),
      'view' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'images',
        ),
        'properties' => 
        array (
          'images' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.embed.images#viewImage',
            ),
            'maxLength' => 4,
          ),
        ),
      ),
      'viewImage' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'thumb',
          1 => 'fullsize',
          2 => 'alt',
        ),
        'properties' => 
        array (
          'thumb' => 
          array (
            'type' => 'string',
            'format' => 'uri',
            'description' => 'Fully-qualified URL where a thumbnail of the image can be fetched. For example, CDN location provided by the App View.',
          ),
          'fullsize' => 
          array (
            'type' => 'string',
            'format' => 'uri',
            'description' => 'Fully-qualified URL where a large version of the image can be fetched. May or may not be the exact original blob. For example, CDN location provided by the App View.',
          ),
          'alt' => 
          array (
            'type' => 'string',
            'description' => 'Alt text description of the image, for accessibility.',
          ),
          'aspectRatio' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.embed.defs#aspectRatio',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.embed.record' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.embed.record',
    'description' => 'A representation of a record embedded in a Bluesky record (eg, a post). For example, a quote-post, or sharing a feed generator record.',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'record',
        ),
        'properties' => 
        array (
          'record' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.repo.strongRef',
          ),
        ),
      ),
      'view' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'record',
        ),
        'properties' => 
        array (
          'record' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.embed.record#viewRecord',
              1 => 'lex:app.bsky.embed.record#viewNotFound',
              2 => 'lex:app.bsky.embed.record#viewBlocked',
              3 => 'lex:app.bsky.embed.record#viewDetached',
              4 => 'lex:app.bsky.feed.defs#generatorView',
              5 => 'lex:app.bsky.graph.defs#listView',
              6 => 'lex:app.bsky.labeler.defs#labelerView',
              7 => 'lex:app.bsky.graph.defs#starterPackViewBasic',
            ),
          ),
        ),
      ),
      'viewRecord' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'author',
          3 => 'value',
          4 => 'indexedAt',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'author' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileViewBasic',
          ),
          'value' => 
          array (
            'type' => 'unknown',
            'description' => 'The record data itself.',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'replyCount' => 
          array (
            'type' => 'integer',
          ),
          'repostCount' => 
          array (
            'type' => 'integer',
          ),
          'likeCount' => 
          array (
            'type' => 'integer',
          ),
          'quoteCount' => 
          array (
            'type' => 'integer',
          ),
          'embeds' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'union',
              'refs' => 
              array (
                0 => 'lex:app.bsky.embed.images#view',
                1 => 'lex:app.bsky.embed.video#view',
                2 => 'lex:app.bsky.embed.external#view',
                3 => 'lex:app.bsky.embed.record#view',
                4 => 'lex:app.bsky.embed.recordWithMedia#view',
              ),
            ),
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'viewNotFound' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'notFound',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'notFound' => 
          array (
            'type' => 'boolean',
            'const' => true,
          ),
        ),
      ),
      'viewBlocked' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'blocked',
          2 => 'author',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'blocked' => 
          array (
            'type' => 'boolean',
            'const' => true,
          ),
          'author' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.feed.defs#blockedAuthor',
          ),
        ),
      ),
      'viewDetached' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'detached',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'detached' => 
          array (
            'type' => 'boolean',
            'const' => true,
          ),
        ),
      ),
    ),
  ),
  'app.bsky.embed.recordWithMedia' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.embed.recordWithMedia',
    'description' => 'A representation of a record embedded in a Bluesky record (eg, a post), alongside other compatible embeds. For example, a quote post and image, or a quote post and external URL card.',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'record',
          1 => 'media',
        ),
        'properties' => 
        array (
          'record' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.embed.record',
          ),
          'media' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.embed.images',
              1 => 'lex:app.bsky.embed.video',
              2 => 'lex:app.bsky.embed.external',
            ),
          ),
        ),
      ),
      'view' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'record',
          1 => 'media',
        ),
        'properties' => 
        array (
          'record' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.embed.record#view',
          ),
          'media' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.embed.images#view',
              1 => 'lex:app.bsky.embed.video#view',
              2 => 'lex:app.bsky.embed.external#view',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.embed.video' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.embed.video',
    'description' => 'A video embedded in a Bluesky record (eg, a post).',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'video',
        ),
        'properties' => 
        array (
          'video' => 
          array (
            'type' => 'blob',
            'accept' => 
            array (
              0 => 'video/mp4',
            ),
            'maxSize' => 50000000,
          ),
          'captions' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.embed.video#caption',
            ),
            'maxLength' => 20,
          ),
          'alt' => 
          array (
            'type' => 'string',
            'description' => 'Alt text description of the video, for accessibility.',
            'maxGraphemes' => 1000,
            'maxLength' => 10000,
          ),
          'aspectRatio' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.embed.defs#aspectRatio',
          ),
        ),
      ),
      'caption' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'lang',
          1 => 'file',
        ),
        'properties' => 
        array (
          'lang' => 
          array (
            'type' => 'string',
            'format' => 'language',
          ),
          'file' => 
          array (
            'type' => 'blob',
            'accept' => 
            array (
              0 => 'text/vtt',
            ),
            'maxSize' => 20000,
          ),
        ),
      ),
      'view' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'cid',
          1 => 'playlist',
        ),
        'properties' => 
        array (
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'playlist' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'thumbnail' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'alt' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 1000,
            'maxLength' => 10000,
          ),
          'aspectRatio' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.embed.defs#aspectRatio',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.defs',
    'defs' => 
    array (
      'postView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'author',
          3 => 'record',
          4 => 'indexedAt',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'author' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileViewBasic',
          ),
          'record' => 
          array (
            'type' => 'unknown',
          ),
          'embed' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.embed.images#view',
              1 => 'lex:app.bsky.embed.video#view',
              2 => 'lex:app.bsky.embed.external#view',
              3 => 'lex:app.bsky.embed.record#view',
              4 => 'lex:app.bsky.embed.recordWithMedia#view',
            ),
          ),
          'replyCount' => 
          array (
            'type' => 'integer',
          ),
          'repostCount' => 
          array (
            'type' => 'integer',
          ),
          'likeCount' => 
          array (
            'type' => 'integer',
          ),
          'quoteCount' => 
          array (
            'type' => 'integer',
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.feed.defs#viewerState',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'threadgate' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.feed.defs#threadgateView',
          ),
        ),
      ),
      'viewerState' => 
      array (
        'type' => 'object',
        'description' => 'Metadata about the requesting account\'s relationship with the subject content. Only has meaningful content for authed requests.',
        'properties' => 
        array (
          'repost' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'like' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'threadMuted' => 
          array (
            'type' => 'boolean',
          ),
          'replyDisabled' => 
          array (
            'type' => 'boolean',
          ),
          'embeddingDisabled' => 
          array (
            'type' => 'boolean',
          ),
          'pinned' => 
          array (
            'type' => 'boolean',
          ),
        ),
      ),
      'threadContext' => 
      array (
        'type' => 'object',
        'description' => 'Metadata about this post within the context of the thread it is in.',
        'properties' => 
        array (
          'rootAuthorLike' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
      'feedViewPost' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'post',
        ),
        'properties' => 
        array (
          'post' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.feed.defs#postView',
          ),
          'reply' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.feed.defs#replyRef',
          ),
          'reason' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.feed.defs#reasonRepost',
              1 => 'lex:app.bsky.feed.defs#reasonPin',
            ),
          ),
          'feedContext' => 
          array (
            'type' => 'string',
            'description' => 'Context provided by feed generator that may be passed back alongside interactions.',
            'maxLength' => 2000,
          ),
        ),
      ),
      'replyRef' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'root',
          1 => 'parent',
        ),
        'properties' => 
        array (
          'root' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.feed.defs#postView',
              1 => 'lex:app.bsky.feed.defs#notFoundPost',
              2 => 'lex:app.bsky.feed.defs#blockedPost',
            ),
          ),
          'parent' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.feed.defs#postView',
              1 => 'lex:app.bsky.feed.defs#notFoundPost',
              2 => 'lex:app.bsky.feed.defs#blockedPost',
            ),
          ),
          'grandparentAuthor' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileViewBasic',
            'description' => 'When parent is a reply to another post, this is the author of that post.',
          ),
        ),
      ),
      'reasonRepost' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'by',
          1 => 'indexedAt',
        ),
        'properties' => 
        array (
          'by' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileViewBasic',
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'reasonPin' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
        ),
      ),
      'threadViewPost' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'post',
        ),
        'properties' => 
        array (
          'post' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.feed.defs#postView',
          ),
          'parent' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.feed.defs#threadViewPost',
              1 => 'lex:app.bsky.feed.defs#notFoundPost',
              2 => 'lex:app.bsky.feed.defs#blockedPost',
            ),
          ),
          'replies' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'union',
              'refs' => 
              array (
                0 => 'lex:app.bsky.feed.defs#threadViewPost',
                1 => 'lex:app.bsky.feed.defs#notFoundPost',
                2 => 'lex:app.bsky.feed.defs#blockedPost',
              ),
            ),
          ),
          'threadContext' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.feed.defs#threadContext',
          ),
        ),
      ),
      'notFoundPost' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'notFound',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'notFound' => 
          array (
            'type' => 'boolean',
            'const' => true,
          ),
        ),
      ),
      'blockedPost' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'blocked',
          2 => 'author',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'blocked' => 
          array (
            'type' => 'boolean',
            'const' => true,
          ),
          'author' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.feed.defs#blockedAuthor',
          ),
        ),
      ),
      'blockedAuthor' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#viewerState',
          ),
        ),
      ),
      'generatorView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'did',
          3 => 'creator',
          4 => 'displayName',
          5 => 'indexedAt',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'creator' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileView',
          ),
          'displayName' => 
          array (
            'type' => 'string',
          ),
          'description' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 300,
            'maxLength' => 3000,
          ),
          'descriptionFacets' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.richtext.facet',
            ),
          ),
          'avatar' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'likeCount' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'acceptsInteractions' => 
          array (
            'type' => 'boolean',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.feed.defs#generatorViewerState',
          ),
          'contentMode' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'app.bsky.feed.defs#contentModeUnspecified',
              1 => 'app.bsky.feed.defs#contentModeVideo',
            ),
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'generatorViewerState' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'like' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
      'skeletonFeedPost' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'post',
        ),
        'properties' => 
        array (
          'post' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'reason' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.feed.defs#skeletonReasonRepost',
              1 => 'lex:app.bsky.feed.defs#skeletonReasonPin',
            ),
          ),
          'feedContext' => 
          array (
            'type' => 'string',
            'description' => 'Context that will be passed through to client and may be passed to feed generator back alongside interactions.',
            'maxLength' => 2000,
          ),
        ),
      ),
      'skeletonReasonRepost' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'repost',
        ),
        'properties' => 
        array (
          'repost' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
      'skeletonReasonPin' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
        ),
      ),
      'threadgateView' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'record' => 
          array (
            'type' => 'unknown',
          ),
          'lists' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.graph.defs#listViewBasic',
            ),
          ),
        ),
      ),
      'interaction' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'item' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'event' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'app.bsky.feed.defs#requestLess',
              1 => 'app.bsky.feed.defs#requestMore',
              2 => 'app.bsky.feed.defs#clickthroughItem',
              3 => 'app.bsky.feed.defs#clickthroughAuthor',
              4 => 'app.bsky.feed.defs#clickthroughReposter',
              5 => 'app.bsky.feed.defs#clickthroughEmbed',
              6 => 'app.bsky.feed.defs#interactionSeen',
              7 => 'app.bsky.feed.defs#interactionLike',
              8 => 'app.bsky.feed.defs#interactionRepost',
              9 => 'app.bsky.feed.defs#interactionReply',
              10 => 'app.bsky.feed.defs#interactionQuote',
              11 => 'app.bsky.feed.defs#interactionShare',
            ),
          ),
          'feedContext' => 
          array (
            'type' => 'string',
            'description' => 'Context on a feed item that was originally supplied by the feed generator on getFeedSkeleton.',
            'maxLength' => 2000,
          ),
        ),
      ),
      'requestLess' => 
      array (
        'type' => 'token',
        'description' => 'Request that less content like the given feed item be shown in the feed',
      ),
      'requestMore' => 
      array (
        'type' => 'token',
        'description' => 'Request that more content like the given feed item be shown in the feed',
      ),
      'clickthroughItem' => 
      array (
        'type' => 'token',
        'description' => 'User clicked through to the feed item',
      ),
      'clickthroughAuthor' => 
      array (
        'type' => 'token',
        'description' => 'User clicked through to the author of the feed item',
      ),
      'clickthroughReposter' => 
      array (
        'type' => 'token',
        'description' => 'User clicked through to the reposter of the feed item',
      ),
      'clickthroughEmbed' => 
      array (
        'type' => 'token',
        'description' => 'User clicked through to the embedded content of the feed item',
      ),
      'contentModeUnspecified' => 
      array (
        'type' => 'token',
        'description' => 'Declares the feed generator returns any types of posts.',
      ),
      'contentModeVideo' => 
      array (
        'type' => 'token',
        'description' => 'Declares the feed generator returns posts containing app.bsky.embed.video embeds.',
      ),
      'interactionSeen' => 
      array (
        'type' => 'token',
        'description' => 'Feed item was seen by user',
      ),
      'interactionLike' => 
      array (
        'type' => 'token',
        'description' => 'User liked the feed item',
      ),
      'interactionRepost' => 
      array (
        'type' => 'token',
        'description' => 'User reposted the feed item',
      ),
      'interactionReply' => 
      array (
        'type' => 'token',
        'description' => 'User replied to the feed item',
      ),
      'interactionQuote' => 
      array (
        'type' => 'token',
        'description' => 'User quoted the feed item',
      ),
      'interactionShare' => 
      array (
        'type' => 'token',
        'description' => 'User shared the feed item',
      ),
    ),
  ),
  'app.bsky.feed.describeFeedGenerator' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.describeFeedGenerator',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get information about a feed generator, including policies and offered feed URIs. Does not require auth; implemented by Feed Generator services (not App View).',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
              1 => 'feeds',
            ),
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'feeds' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.describeFeedGenerator#feed',
                ),
              ),
              'links' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.feed.describeFeedGenerator#links',
              ),
            ),
          ),
        ),
      ),
      'feed' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
      'links' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'privacyPolicy' => 
          array (
            'type' => 'string',
          ),
          'termsOfService' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.generator' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.generator',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'Record declaring of the existence of a feed generator, and containing metadata about it. The record can exist in any repository.',
        'key' => 'any',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'did',
            1 => 'displayName',
            2 => 'createdAt',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
            ),
            'displayName' => 
            array (
              'type' => 'string',
              'maxGraphemes' => 24,
              'maxLength' => 240,
            ),
            'description' => 
            array (
              'type' => 'string',
              'maxGraphemes' => 300,
              'maxLength' => 3000,
            ),
            'descriptionFacets' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.richtext.facet',
              ),
            ),
            'avatar' => 
            array (
              'type' => 'blob',
              'accept' => 
              array (
                0 => 'image/png',
                1 => 'image/jpeg',
              ),
              'maxSize' => 1000000,
            ),
            'acceptsInteractions' => 
            array (
              'type' => 'boolean',
              'description' => 'Declaration that a feed accepts feedback interactions from a client through app.bsky.feed.sendInteractions',
            ),
            'labels' => 
            array (
              'type' => 'union',
              'description' => 'Self-label values',
              'refs' => 
              array (
                0 => 'lex:com.atproto.label.defs#selfLabels',
              ),
            ),
            'contentMode' => 
            array (
              'type' => 'string',
              'knownValues' => 
              array (
                0 => 'app.bsky.feed.defs#contentModeUnspecified',
                1 => 'app.bsky.feed.defs#contentModeVideo',
              ),
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getActorFeeds' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getActorFeeds',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a list of feeds (feed generator records) created by the actor (in the actor\'s repo).',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'feeds',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'feeds' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#generatorView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getActorLikes' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getActorLikes',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a list of posts liked by an actor. Requires auth, actor must be the requesting account.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'feed',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'feed' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#feedViewPost',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'BlockedActor',
          ),
          1 => 
          array (
            'name' => 'BlockedByActor',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getAuthorFeed' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getAuthorFeed',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a view of an actor\'s \'author feed\' (post and reposts by the author). Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'filter' => 
            array (
              'type' => 'string',
              'description' => 'Combinations of post/repost types to include in response.',
              'knownValues' => 
              array (
                0 => 'posts_with_replies',
                1 => 'posts_no_replies',
                2 => 'posts_with_media',
                3 => 'posts_and_author_threads',
                4 => 'posts_with_video',
              ),
              'default' => 'posts_with_replies',
            ),
            'includePins' => 
            array (
              'type' => 'boolean',
              'default' => false,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'feed',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'feed' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#feedViewPost',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'BlockedActor',
          ),
          1 => 
          array (
            'name' => 'BlockedByActor',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getFeed' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getFeed',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a hydrated feed from an actor\'s selected feed generator. Implemented by App View.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'feed',
          ),
          'properties' => 
          array (
            'feed' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'feed',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'feed' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#feedViewPost',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'UnknownFeed',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getFeedGenerator' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getFeedGenerator',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get information about a feed generator. Implemented by AppView.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'feed',
          ),
          'properties' => 
          array (
            'feed' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'AT-URI of the feed generator record.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'view',
              1 => 'isOnline',
              2 => 'isValid',
            ),
            'properties' => 
            array (
              'view' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.feed.defs#generatorView',
              ),
              'isOnline' => 
              array (
                'type' => 'boolean',
                'description' => 'Indicates whether the feed generator service has been online recently, or else seems to be inactive.',
              ),
              'isValid' => 
              array (
                'type' => 'boolean',
                'description' => 'Indicates whether the feed generator service is compatible with the record declaration.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getFeedGenerators' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getFeedGenerators',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get information about a list of feed generators.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'feeds',
          ),
          'properties' => 
          array (
            'feeds' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'feeds',
            ),
            'properties' => 
            array (
              'feeds' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#generatorView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getFeedSkeleton' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getFeedSkeleton',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a skeleton of a feed provided by a feed generator. Auth is optional, depending on provider requirements, and provides the DID of the requester. Implemented by Feed Generator Service.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'feed',
          ),
          'properties' => 
          array (
            'feed' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference to feed generator record describing the specific feed being requested.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'feed',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'feed' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#skeletonFeedPost',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'UnknownFeed',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getLikes' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getLikes',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get like records which reference a subject (by AT-URI and CID).',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'uri',
          ),
          'properties' => 
          array (
            'uri' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'AT-URI of the subject (eg, a post record).',
            ),
            'cid' => 
            array (
              'type' => 'string',
              'format' => 'cid',
              'description' => 'CID of the subject record (aka, specific version of record), to filter likes.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'uri',
              1 => 'likes',
            ),
            'properties' => 
            array (
              'uri' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
              'cid' => 
              array (
                'type' => 'string',
                'format' => 'cid',
              ),
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'likes' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.getLikes#like',
                ),
              ),
            ),
          ),
        ),
      ),
      'like' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'indexedAt',
          1 => 'createdAt',
          2 => 'actor',
        ),
        'properties' => 
        array (
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'actor' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileView',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getListFeed' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getListFeed',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a feed of recent posts from a list (posts and reposts from any actors on the list). Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'list',
          ),
          'properties' => 
          array (
            'list' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) to the list record.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'feed',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'feed' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#feedViewPost',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'UnknownList',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getPostThread' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getPostThread',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get posts in a thread. Does not require auth, but additional metadata and filtering will be applied for authed requests.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'uri',
          ),
          'properties' => 
          array (
            'uri' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) to post record.',
            ),
            'depth' => 
            array (
              'type' => 'integer',
              'description' => 'How many levels of reply depth should be included in response.',
              'default' => 6,
              'minimum' => 0,
              'maximum' => 1000,
            ),
            'parentHeight' => 
            array (
              'type' => 'integer',
              'description' => 'How many levels of parent (and grandparent, etc) post to include.',
              'default' => 80,
              'minimum' => 0,
              'maximum' => 1000,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'thread',
            ),
            'properties' => 
            array (
              'thread' => 
              array (
                'type' => 'union',
                'refs' => 
                array (
                  0 => 'lex:app.bsky.feed.defs#threadViewPost',
                  1 => 'lex:app.bsky.feed.defs#notFoundPost',
                  2 => 'lex:app.bsky.feed.defs#blockedPost',
                ),
              ),
              'threadgate' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.feed.defs#threadgateView',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'NotFound',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getPosts' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getPosts',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Gets post views for a specified list of posts (by AT-URI). This is sometimes referred to as \'hydrating\' a \'feed skeleton\'.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'uris',
          ),
          'properties' => 
          array (
            'uris' => 
            array (
              'type' => 'array',
              'description' => 'List of post AT-URIs to return hydrated views for.',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
              'maxLength' => 25,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'posts',
            ),
            'properties' => 
            array (
              'posts' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#postView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getQuotes' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getQuotes',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a list of quotes for a given post.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'uri',
          ),
          'properties' => 
          array (
            'uri' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) of post record',
            ),
            'cid' => 
            array (
              'type' => 'string',
              'format' => 'cid',
              'description' => 'If supplied, filters to quotes of specific version (by CID) of the post record.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'uri',
              1 => 'posts',
            ),
            'properties' => 
            array (
              'uri' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
              'cid' => 
              array (
                'type' => 'string',
                'format' => 'cid',
              ),
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'posts' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#postView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getRepostedBy' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getRepostedBy',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a list of reposts for a given post.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'uri',
          ),
          'properties' => 
          array (
            'uri' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) of post record',
            ),
            'cid' => 
            array (
              'type' => 'string',
              'format' => 'cid',
              'description' => 'If supplied, filters to reposts of specific version (by CID) of the post record.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'uri',
              1 => 'repostedBy',
            ),
            'properties' => 
            array (
              'uri' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
              'cid' => 
              array (
                'type' => 'string',
                'format' => 'cid',
              ),
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'repostedBy' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getSuggestedFeeds' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getSuggestedFeeds',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a list of suggested feeds (feed generators) for the requesting account.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'feeds',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'feeds' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#generatorView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.getTimeline' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.getTimeline',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a view of the requesting account\'s home timeline. This is expected to be some form of reverse-chronological feed.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'algorithm' => 
            array (
              'type' => 'string',
              'description' => 'Variant \'algorithm\' for timeline. Implementation-specific. NOTE: most feed flexibility has been moved to feed generator mechanism.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'feed',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'feed' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#feedViewPost',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.like' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.like',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'Record declaring a \'like\' of a piece of subject content.',
        'key' => 'tid',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'subject',
            1 => 'createdAt',
          ),
          'properties' => 
          array (
            'subject' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.repo.strongRef',
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.post' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.post',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'Record containing a Bluesky post.',
        'key' => 'tid',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'text',
            1 => 'createdAt',
          ),
          'properties' => 
          array (
            'text' => 
            array (
              'type' => 'string',
              'maxLength' => 3000,
              'maxGraphemes' => 300,
              'description' => 'The primary post content. May be an empty string, if there are embeds.',
            ),
            'entities' => 
            array (
              'type' => 'array',
              'description' => 'DEPRECATED: replaced by app.bsky.richtext.facet.',
              'items' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.feed.post#entity',
              ),
            ),
            'facets' => 
            array (
              'type' => 'array',
              'description' => 'Annotations of text (mentions, URLs, hashtags, etc)',
              'items' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.richtext.facet',
              ),
            ),
            'reply' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.feed.post#replyRef',
            ),
            'embed' => 
            array (
              'type' => 'union',
              'refs' => 
              array (
                0 => 'lex:app.bsky.embed.images',
                1 => 'lex:app.bsky.embed.video',
                2 => 'lex:app.bsky.embed.external',
                3 => 'lex:app.bsky.embed.record',
                4 => 'lex:app.bsky.embed.recordWithMedia',
              ),
            ),
            'langs' => 
            array (
              'type' => 'array',
              'description' => 'Indicates human language of post primary text content.',
              'maxLength' => 3,
              'items' => 
              array (
                'type' => 'string',
                'format' => 'language',
              ),
            ),
            'labels' => 
            array (
              'type' => 'union',
              'description' => 'Self-label values for this post. Effectively content warnings.',
              'refs' => 
              array (
                0 => 'lex:com.atproto.label.defs#selfLabels',
              ),
            ),
            'tags' => 
            array (
              'type' => 'array',
              'description' => 'Additional hashtags, in addition to any included in post text and facets.',
              'maxLength' => 8,
              'items' => 
              array (
                'type' => 'string',
                'maxLength' => 640,
                'maxGraphemes' => 64,
              ),
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Client-declared timestamp when this post was originally created.',
            ),
          ),
        ),
      ),
      'replyRef' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'root',
          1 => 'parent',
        ),
        'properties' => 
        array (
          'root' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.repo.strongRef',
          ),
          'parent' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.repo.strongRef',
          ),
        ),
      ),
      'entity' => 
      array (
        'type' => 'object',
        'description' => 'Deprecated: use facets instead.',
        'required' => 
        array (
          0 => 'index',
          1 => 'type',
          2 => 'value',
        ),
        'properties' => 
        array (
          'index' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.feed.post#textSlice',
          ),
          'type' => 
          array (
            'type' => 'string',
            'description' => 'Expected values are \'mention\' and \'link\'.',
          ),
          'value' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'textSlice' => 
      array (
        'type' => 'object',
        'description' => 'Deprecated. Use app.bsky.richtext instead -- A text segment. Start is inclusive, end is exclusive. Indices are for utf16-encoded strings.',
        'required' => 
        array (
          0 => 'start',
          1 => 'end',
        ),
        'properties' => 
        array (
          'start' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'end' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.postgate' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.postgate',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'key' => 'tid',
        'description' => 'Record defining interaction rules for a post. The record key (rkey) of the postgate record must match the record key of the post, and that record must be in the same repository.',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'post',
            1 => 'createdAt',
          ),
          'properties' => 
          array (
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
            'post' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) to the post record.',
            ),
            'detachedEmbeddingUris' => 
            array (
              'type' => 'array',
              'maxLength' => 50,
              'items' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
              'description' => 'List of AT-URIs embedding this post that the author has detached from.',
            ),
            'embeddingRules' => 
            array (
              'description' => 'List of rules defining who can embed this post. If value is an empty array or is undefined, no particular rules apply and anyone can embed.',
              'type' => 'array',
              'maxLength' => 5,
              'items' => 
              array (
                'type' => 'union',
                'refs' => 
                array (
                  0 => 'lex:app.bsky.feed.postgate#disableRule',
                ),
              ),
            ),
          ),
        ),
      ),
      'disableRule' => 
      array (
        'type' => 'object',
        'description' => 'Disables embedding of this post.',
        'properties' => 
        array (
        ),
      ),
    ),
  ),
  'app.bsky.feed.repost' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.repost',
    'defs' => 
    array (
      'main' => 
      array (
        'description' => 'Record representing a \'repost\' of an existing Bluesky post.',
        'type' => 'record',
        'key' => 'tid',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'subject',
            1 => 'createdAt',
          ),
          'properties' => 
          array (
            'subject' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.repo.strongRef',
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.searchPosts' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.searchPosts',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Find posts matching search criteria, returning views of those posts.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'q',
          ),
          'properties' => 
          array (
            'q' => 
            array (
              'type' => 'string',
              'description' => 'Search query string; syntax, phrase, boolean, and faceting is unspecified, but Lucene query syntax is recommended.',
            ),
            'sort' => 
            array (
              'type' => 'string',
              'knownValues' => 
              array (
                0 => 'top',
                1 => 'latest',
              ),
              'default' => 'latest',
              'description' => 'Specifies the ranking order of results.',
            ),
            'since' => 
            array (
              'type' => 'string',
              'description' => 'Filter results for posts after the indicated datetime (inclusive). Expected to use \'sortAt\' timestamp, which may not match \'createdAt\'. Can be a datetime, or just an ISO date (YYYY-MM-DD).',
            ),
            'until' => 
            array (
              'type' => 'string',
              'description' => 'Filter results for posts before the indicated datetime (not inclusive). Expected to use \'sortAt\' timestamp, which may not match \'createdAt\'. Can be a datetime, or just an ISO date (YYY-MM-DD).',
            ),
            'mentions' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'Filter to posts which mention the given account. Handles are resolved to DID before query-time. Only matches rich-text facet mentions.',
            ),
            'author' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'Filter to posts by the given account. Handles are resolved to DID before query-time.',
            ),
            'lang' => 
            array (
              'type' => 'string',
              'format' => 'language',
              'description' => 'Filter to posts in the given language. Expected to be based on post language field, though server may override language detection.',
            ),
            'domain' => 
            array (
              'type' => 'string',
              'description' => 'Filter to posts with URLs (facet links or embeds) linking to the given domain (hostname). Server may apply hostname normalization.',
            ),
            'url' => 
            array (
              'type' => 'string',
              'format' => 'uri',
              'description' => 'Filter to posts with links (facet links or embeds) pointing to this URL. Server may apply URL normalization or fuzzy matching.',
            ),
            'tag' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'maxLength' => 640,
                'maxGraphemes' => 64,
              ),
              'description' => 'Filter to posts with the given tag (hashtag), based on rich-text facet or tag field. Do not include the hash (#) prefix. Multiple tags can be specified, with \'AND\' matching.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 25,
            ),
            'cursor' => 
            array (
              'type' => 'string',
              'description' => 'Optional pagination mechanism; may not necessarily allow scrolling through entire result set.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'posts',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'hitsTotal' => 
              array (
                'type' => 'integer',
                'description' => 'Count of search hits. Optional, may be rounded/truncated, and may not be possible to paginate through all hits.',
              ),
              'posts' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#postView',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'BadQueryString',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.sendInteractions' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.sendInteractions',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Send information about interactions with feed items back to the feed generator that served them.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'interactions',
            ),
            'properties' => 
            array (
              'interactions' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#interaction',
                ),
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.feed.threadgate' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.feed.threadgate',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'key' => 'tid',
        'description' => 'Record defining interaction gating rules for a thread (aka, reply controls). The record key (rkey) of the threadgate record must match the record key of the thread\'s root post, and that record must be in the same repository.',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'post',
            1 => 'createdAt',
          ),
          'properties' => 
          array (
            'post' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) to the post record.',
            ),
            'allow' => 
            array (
              'description' => 'List of rules defining who can reply to this post. If value is an empty array, no one can reply. If value is undefined, anyone can reply.',
              'type' => 'array',
              'maxLength' => 5,
              'items' => 
              array (
                'type' => 'union',
                'refs' => 
                array (
                  0 => 'lex:app.bsky.feed.threadgate#mentionRule',
                  1 => 'lex:app.bsky.feed.threadgate#followerRule',
                  2 => 'lex:app.bsky.feed.threadgate#followingRule',
                  3 => 'lex:app.bsky.feed.threadgate#listRule',
                ),
              ),
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
            'hiddenReplies' => 
            array (
              'type' => 'array',
              'maxLength' => 50,
              'items' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
              'description' => 'List of hidden reply URIs.',
            ),
          ),
        ),
      ),
      'mentionRule' => 
      array (
        'type' => 'object',
        'description' => 'Allow replies from actors mentioned in your post.',
        'properties' => 
        array (
        ),
      ),
      'followerRule' => 
      array (
        'type' => 'object',
        'description' => 'Allow replies from actors who follow you.',
        'properties' => 
        array (
        ),
      ),
      'followingRule' => 
      array (
        'type' => 'object',
        'description' => 'Allow replies from actors you follow.',
        'properties' => 
        array (
        ),
      ),
      'listRule' => 
      array (
        'type' => 'object',
        'description' => 'Allow replies from actors on a list.',
        'required' => 
        array (
          0 => 'list',
        ),
        'properties' => 
        array (
          'list' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.block' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.block',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'Record declaring a \'block\' relationship against another account. NOTE: blocks are public in Bluesky; see blog posts for details.',
        'key' => 'tid',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'subject',
            1 => 'createdAt',
          ),
          'properties' => 
          array (
            'subject' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'DID of the account to be blocked.',
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.defs',
    'defs' => 
    array (
      'listViewBasic' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'name',
          3 => 'purpose',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'name' => 
          array (
            'type' => 'string',
            'maxLength' => 64,
            'minLength' => 1,
          ),
          'purpose' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.graph.defs#listPurpose',
          ),
          'avatar' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'listItemCount' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.graph.defs#listViewerState',
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'listView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'creator',
          3 => 'name',
          4 => 'purpose',
          5 => 'indexedAt',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'creator' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileView',
          ),
          'name' => 
          array (
            'type' => 'string',
            'maxLength' => 64,
            'minLength' => 1,
          ),
          'purpose' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.graph.defs#listPurpose',
          ),
          'description' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 300,
            'maxLength' => 3000,
          ),
          'descriptionFacets' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.richtext.facet',
            ),
          ),
          'avatar' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'listItemCount' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.graph.defs#listViewerState',
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'listItemView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'subject',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'subject' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileView',
          ),
        ),
      ),
      'starterPackView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'record',
          3 => 'creator',
          4 => 'indexedAt',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'record' => 
          array (
            'type' => 'unknown',
          ),
          'creator' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileViewBasic',
          ),
          'list' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.graph.defs#listViewBasic',
          ),
          'listItemsSample' => 
          array (
            'type' => 'array',
            'maxLength' => 12,
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.graph.defs#listItemView',
            ),
          ),
          'feeds' => 
          array (
            'type' => 'array',
            'maxLength' => 3,
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.feed.defs#generatorView',
            ),
          ),
          'joinedWeekCount' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'joinedAllTimeCount' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'starterPackViewBasic' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'record',
          3 => 'creator',
          4 => 'indexedAt',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'record' => 
          array (
            'type' => 'unknown',
          ),
          'creator' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileViewBasic',
          ),
          'listItemCount' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'joinedWeekCount' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'joinedAllTimeCount' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'listPurpose' => 
      array (
        'type' => 'string',
        'knownValues' => 
        array (
          0 => 'app.bsky.graph.defs#modlist',
          1 => 'app.bsky.graph.defs#curatelist',
          2 => 'app.bsky.graph.defs#referencelist',
        ),
      ),
      'modlist' => 
      array (
        'type' => 'token',
        'description' => 'A list of actors to apply an aggregate moderation action (mute/block) on.',
      ),
      'curatelist' => 
      array (
        'type' => 'token',
        'description' => 'A list of actors used for curation purposes such as list feeds or interaction gating.',
      ),
      'referencelist' => 
      array (
        'type' => 'token',
        'description' => 'A list of actors used for only for reference purposes such as within a starter pack.',
      ),
      'listViewerState' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'muted' => 
          array (
            'type' => 'boolean',
          ),
          'blocked' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
      'notFoundActor' => 
      array (
        'type' => 'object',
        'description' => 'indicates that a handle or DID could not be resolved',
        'required' => 
        array (
          0 => 'actor',
          1 => 'notFound',
        ),
        'properties' => 
        array (
          'actor' => 
          array (
            'type' => 'string',
            'format' => 'at-identifier',
          ),
          'notFound' => 
          array (
            'type' => 'boolean',
            'const' => true,
          ),
        ),
      ),
      'relationship' => 
      array (
        'type' => 'object',
        'description' => 'lists the bi-directional graph relationships between one actor (not indicated in the object), and the target actors (the DID included in the object)',
        'required' => 
        array (
          0 => 'did',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'following' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
            'description' => 'if the actor follows this DID, this is the AT-URI of the follow record',
          ),
          'followedBy' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
            'description' => 'if the actor is followed by this DID, contains the AT-URI of the follow record',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.follow' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.follow',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'Record declaring a social \'follow\' relationship of another account. Duplicate follows will be ignored by the AppView.',
        'key' => 'tid',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'subject',
            1 => 'createdAt',
          ),
          'properties' => 
          array (
            'subject' => 
            array (
              'type' => 'string',
              'format' => 'did',
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getActorStarterPacks' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getActorStarterPacks',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a list of starter packs created by the actor.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'starterPacks',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'starterPacks' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.graph.defs#starterPackViewBasic',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getBlocks' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getBlocks',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates which accounts the requesting account is currently blocking. Requires auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'blocks',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'blocks' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getFollowers' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getFollowers',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates accounts which follow a specified account (actor).',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'subject',
              1 => 'followers',
            ),
            'properties' => 
            array (
              'subject' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.actor.defs#profileView',
              ),
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'followers' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getFollows' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getFollows',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates accounts which a specified account (actor) follows.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'subject',
              1 => 'follows',
            ),
            'properties' => 
            array (
              'subject' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.actor.defs#profileView',
              ),
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'follows' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getKnownFollowers' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getKnownFollowers',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates accounts which follow a specified account (actor) and are followed by the viewer.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'subject',
              1 => 'followers',
            ),
            'properties' => 
            array (
              'subject' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.actor.defs#profileView',
              ),
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'followers' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getList' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getList',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Gets a \'view\' (with additional context) of a specified list.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'list',
          ),
          'properties' => 
          array (
            'list' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) of the list record to hydrate.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'list',
              1 => 'items',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'list' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.graph.defs#listView',
              ),
              'items' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.graph.defs#listItemView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getListBlocks' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getListBlocks',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get mod lists that the requesting account (actor) is blocking. Requires auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'lists',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'lists' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.graph.defs#listView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getListMutes' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getListMutes',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates mod lists that the requesting account (actor) currently has muted. Requires auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'lists',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'lists' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.graph.defs#listView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getLists' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getLists',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates the lists created by a specified account (actor).',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'The account (actor) to enumerate lists from.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'lists',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'lists' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.graph.defs#listView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getMutes' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getMutes',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates accounts that the requesting account (actor) currently has muted. Requires auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'mutes',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'mutes' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getRelationships' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getRelationships',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates public relationships between one account, and a list of other accounts. Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'Primary account requesting relationships for.',
            ),
            'others' => 
            array (
              'type' => 'array',
              'description' => 'List of \'other\' accounts to be related back to the primary.',
              'maxLength' => 30,
              'items' => 
              array (
                'type' => 'string',
                'format' => 'at-identifier',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'relationships',
            ),
            'properties' => 
            array (
              'actor' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'relationships' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'union',
                  'refs' => 
                  array (
                    0 => 'lex:app.bsky.graph.defs#relationship',
                    1 => 'lex:app.bsky.graph.defs#notFoundActor',
                  ),
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'ActorNotFound',
            'description' => 'the primary actor at-identifier could not be resolved',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getStarterPack' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getStarterPack',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Gets a view of a starter pack.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'starterPack',
          ),
          'properties' => 
          array (
            'starterPack' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) of the starter pack record.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'starterPack',
            ),
            'properties' => 
            array (
              'starterPack' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.graph.defs#starterPackView',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getStarterPacks' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getStarterPacks',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get views for a list of starter packs.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'uris',
          ),
          'properties' => 
          array (
            'uris' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
              'maxLength' => 25,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'starterPacks',
            ),
            'properties' => 
            array (
              'starterPacks' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.graph.defs#starterPackViewBasic',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.getSuggestedFollowsByActor' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.getSuggestedFollowsByActor',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates follows similar to a given account (actor). Expected use is to recommend additional accounts immediately after following one account.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'suggestions',
            ),
            'properties' => 
            array (
              'suggestions' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.actor.defs#profileView',
                ),
              ),
              'isFallback' => 
              array (
                'type' => 'boolean',
                'description' => 'If true, response has fallen-back to generic results, and is not scoped using relativeToDid',
                'default' => false,
              ),
              'recId' => 
              array (
                'type' => 'integer',
                'description' => 'Snowflake for this recommendation, use when submitting recommendation events.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.list' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.list',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'Record representing a list of accounts (actors). Scope includes both moderation-oriented lists and curration-oriented lists.',
        'key' => 'tid',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'name',
            1 => 'purpose',
            2 => 'createdAt',
          ),
          'properties' => 
          array (
            'purpose' => 
            array (
              'type' => 'ref',
              'description' => 'Defines the purpose of the list (aka, moderation-oriented or curration-oriented)',
              'ref' => 'lex:app.bsky.graph.defs#listPurpose',
            ),
            'name' => 
            array (
              'type' => 'string',
              'maxLength' => 64,
              'minLength' => 1,
              'description' => 'Display name for list; can not be empty.',
            ),
            'description' => 
            array (
              'type' => 'string',
              'maxGraphemes' => 300,
              'maxLength' => 3000,
            ),
            'descriptionFacets' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.richtext.facet',
              ),
            ),
            'avatar' => 
            array (
              'type' => 'blob',
              'accept' => 
              array (
                0 => 'image/png',
                1 => 'image/jpeg',
              ),
              'maxSize' => 1000000,
            ),
            'labels' => 
            array (
              'type' => 'union',
              'refs' => 
              array (
                0 => 'lex:com.atproto.label.defs#selfLabels',
              ),
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.listblock' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.listblock',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'Record representing a block relationship against an entire an entire list of accounts (actors).',
        'key' => 'tid',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'subject',
            1 => 'createdAt',
          ),
          'properties' => 
          array (
            'subject' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) to the mod list record.',
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.listitem' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.listitem',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'Record representing an account\'s inclusion on a specific list. The AppView will ignore duplicate listitem records.',
        'key' => 'tid',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'subject',
            1 => 'list',
            2 => 'createdAt',
          ),
          'properties' => 
          array (
            'subject' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The account which is included on the list.',
            ),
            'list' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) to the list record (app.bsky.graph.list).',
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.muteActor' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.muteActor',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Creates a mute relationship for the specified account. Mutes are private in Bluesky. Requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'actor',
            ),
            'properties' => 
            array (
              'actor' => 
              array (
                'type' => 'string',
                'format' => 'at-identifier',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.muteActorList' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.muteActorList',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Creates a mute relationship for the specified list of accounts. Mutes are private in Bluesky. Requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'list',
            ),
            'properties' => 
            array (
              'list' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.muteThread' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.muteThread',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Mutes a thread preventing notifications from the thread and any of its children. Mutes are private in Bluesky. Requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'root',
            ),
            'properties' => 
            array (
              'root' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.searchStarterPacks' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.searchStarterPacks',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Find starter packs matching search criteria. Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'q',
          ),
          'properties' => 
          array (
            'q' => 
            array (
              'type' => 'string',
              'description' => 'Search query string. Syntax, phrase, boolean, and faceting is unspecified, but Lucene query syntax is recommended.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 25,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'starterPacks',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'starterPacks' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.graph.defs#starterPackViewBasic',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.starterpack' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.starterpack',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'Record defining a starter pack of actors and feeds for new users.',
        'key' => 'tid',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'name',
            1 => 'list',
            2 => 'createdAt',
          ),
          'properties' => 
          array (
            'name' => 
            array (
              'type' => 'string',
              'maxGraphemes' => 50,
              'maxLength' => 500,
              'minLength' => 1,
              'description' => 'Display name for starter pack; can not be empty.',
            ),
            'description' => 
            array (
              'type' => 'string',
              'maxGraphemes' => 300,
              'maxLength' => 3000,
            ),
            'descriptionFacets' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.richtext.facet',
              ),
            ),
            'list' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
              'description' => 'Reference (AT-URI) to the list record.',
            ),
            'feeds' => 
            array (
              'type' => 'array',
              'maxLength' => 3,
              'items' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.graph.starterpack#feedItem',
              ),
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
      ),
      'feedItem' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.unmuteActor' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.unmuteActor',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Unmutes the specified account. Requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'actor',
            ),
            'properties' => 
            array (
              'actor' => 
              array (
                'type' => 'string',
                'format' => 'at-identifier',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.unmuteActorList' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.unmuteActorList',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Unmutes the specified list of accounts. Requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'list',
            ),
            'properties' => 
            array (
              'list' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.graph.unmuteThread' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.graph.unmuteThread',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Unmutes the specified thread. Requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'root',
            ),
            'properties' => 
            array (
              'root' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.labeler.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.labeler.defs',
    'defs' => 
    array (
      'labelerView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'creator',
          3 => 'indexedAt',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'creator' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileView',
          ),
          'likeCount' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.labeler.defs#labelerViewerState',
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
        ),
      ),
      'labelerViewDetailed' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'creator',
          3 => 'policies',
          4 => 'indexedAt',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'creator' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileView',
          ),
          'policies' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.labeler.defs#labelerPolicies',
          ),
          'likeCount' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.labeler.defs#labelerViewerState',
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'reasonTypes' => 
          array (
            'description' => 'The set of report reason \'codes\' which are in-scope for this service to review and action. These usually align to policy categories. If not defined (distinct from empty array), all reason types are allowed.',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.moderation.defs#reasonType',
            ),
          ),
          'subjectTypes' => 
          array (
            'description' => 'The set of subject types (account, record, etc) this service accepts reports on.',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.moderation.defs#subjectType',
            ),
          ),
          'subjectCollections' => 
          array (
            'type' => 'array',
            'description' => 'Set of record types (collection NSIDs) which can be reported to this service. If not defined (distinct from empty array), default is any record type.',
            'items' => 
            array (
              'type' => 'string',
              'format' => 'nsid',
            ),
          ),
        ),
      ),
      'labelerViewerState' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'like' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
      'labelerPolicies' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'labelValues',
        ),
        'properties' => 
        array (
          'labelValues' => 
          array (
            'type' => 'array',
            'description' => 'The label values which this labeler publishes. May include global or custom labels.',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#labelValue',
            ),
          ),
          'labelValueDefinitions' => 
          array (
            'type' => 'array',
            'description' => 'Label values created by this labeler and scoped exclusively to it. Labels defined here will override global label definitions for this labeler.',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#labelValueDefinition',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.labeler.getServices' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.labeler.getServices',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get information about a list of labeler services.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'dids',
          ),
          'properties' => 
          array (
            'dids' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
            'detailed' => 
            array (
              'type' => 'boolean',
              'default' => false,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'views',
            ),
            'properties' => 
            array (
              'views' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'union',
                  'refs' => 
                  array (
                    0 => 'lex:app.bsky.labeler.defs#labelerView',
                    1 => 'lex:app.bsky.labeler.defs#labelerViewDetailed',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.labeler.service' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.labeler.service',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'A declaration of the existence of labeler service.',
        'key' => 'literal:self',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'policies',
            1 => 'createdAt',
          ),
          'properties' => 
          array (
            'policies' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.labeler.defs#labelerPolicies',
            ),
            'labels' => 
            array (
              'type' => 'union',
              'refs' => 
              array (
                0 => 'lex:com.atproto.label.defs#selfLabels',
              ),
            ),
            'createdAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
            'reasonTypes' => 
            array (
              'description' => 'The set of report reason \'codes\' which are in-scope for this service to review and action. These usually align to policy categories. If not defined (distinct from empty array), all reason types are allowed.',
              'type' => 'array',
              'items' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.moderation.defs#reasonType',
              ),
            ),
            'subjectTypes' => 
            array (
              'description' => 'The set of subject types (account, record, etc) this service accepts reports on.',
              'type' => 'array',
              'items' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.moderation.defs#subjectType',
              ),
            ),
            'subjectCollections' => 
            array (
              'type' => 'array',
              'description' => 'Set of record types (collection NSIDs) which can be reported to this service. If not defined (distinct from empty array), default is any record type.',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'nsid',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.notification.getUnreadCount' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.notification.getUnreadCount',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Count the number of unread notifications for the requesting account. Requires auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'priority' => 
            array (
              'type' => 'boolean',
            ),
            'seenAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'count',
            ),
            'properties' => 
            array (
              'count' => 
              array (
                'type' => 'integer',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.notification.listNotifications' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.notification.listNotifications',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerate notifications for the requesting account. Requires auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'reasons' => 
            array (
              'description' => 'Notification reasons to include in response.',
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'description' => 'A reason that matches the reason property of #notification.',
              ),
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'priority' => 
            array (
              'type' => 'boolean',
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'seenAt' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'notifications',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'notifications' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.notification.listNotifications#notification',
                ),
              ),
              'priority' => 
              array (
                'type' => 'boolean',
              ),
              'seenAt' => 
              array (
                'type' => 'string',
                'format' => 'datetime',
              ),
            ),
          ),
        ),
      ),
      'notification' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'author',
          3 => 'reason',
          4 => 'record',
          5 => 'isRead',
          6 => 'indexedAt',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'author' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileView',
          ),
          'reason' => 
          array (
            'type' => 'string',
            'description' => 'Expected values are \'like\', \'repost\', \'follow\', \'mention\', \'reply\', \'quote\', and \'starterpack-joined\'.',
            'knownValues' => 
            array (
              0 => 'like',
              1 => 'repost',
              2 => 'follow',
              3 => 'mention',
              4 => 'reply',
              5 => 'quote',
              6 => 'starterpack-joined',
            ),
          ),
          'reasonSubject' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'record' => 
          array (
            'type' => 'unknown',
          ),
          'isRead' => 
          array (
            'type' => 'boolean',
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.notification.putPreferences' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.notification.putPreferences',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Set notification-related preferences for an account. Requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'priority',
            ),
            'properties' => 
            array (
              'priority' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.notification.registerPush' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.notification.registerPush',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Register to receive push notifications, via a specified service, for the requesting account. Requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'serviceDid',
              1 => 'token',
              2 => 'platform',
              3 => 'appId',
            ),
            'properties' => 
            array (
              'serviceDid' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'token' => 
              array (
                'type' => 'string',
              ),
              'platform' => 
              array (
                'type' => 'string',
                'knownValues' => 
                array (
                  0 => 'ios',
                  1 => 'android',
                  2 => 'web',
                ),
              ),
              'appId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.notification.updateSeen' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.notification.updateSeen',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Notify server that the requesting account has seen notifications. Requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'seenAt',
            ),
            'properties' => 
            array (
              'seenAt' => 
              array (
                'type' => 'string',
                'format' => 'datetime',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.richtext.facet' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.richtext.facet',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'object',
        'description' => 'Annotation of a sub-string within rich text.',
        'required' => 
        array (
          0 => 'index',
          1 => 'features',
        ),
        'properties' => 
        array (
          'index' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.richtext.facet#byteSlice',
          ),
          'features' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'union',
              'refs' => 
              array (
                0 => 'lex:app.bsky.richtext.facet#mention',
                1 => 'lex:app.bsky.richtext.facet#link',
                2 => 'lex:app.bsky.richtext.facet#tag',
              ),
            ),
          ),
        ),
      ),
      'mention' => 
      array (
        'type' => 'object',
        'description' => 'Facet feature for mention of another account. The text is usually a handle, including a \'@\' prefix, but the facet reference is a DID.',
        'required' => 
        array (
          0 => 'did',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
        ),
      ),
      'link' => 
      array (
        'type' => 'object',
        'description' => 'Facet feature for a URL. The text URL may have been simplified or truncated, but the facet reference should be a complete URL.',
        'required' => 
        array (
          0 => 'uri',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
        ),
      ),
      'tag' => 
      array (
        'type' => 'object',
        'description' => 'Facet feature for a hashtag. The text usually includes a \'#\' prefix, but the facet reference should not (except in the case of \'double hash tags\').',
        'required' => 
        array (
          0 => 'tag',
        ),
        'properties' => 
        array (
          'tag' => 
          array (
            'type' => 'string',
            'maxLength' => 640,
            'maxGraphemes' => 64,
          ),
        ),
      ),
      'byteSlice' => 
      array (
        'type' => 'object',
        'description' => 'Specifies the sub-string range a facet feature applies to. Start index is inclusive, end index is exclusive. Indices are zero-indexed, counting bytes of the UTF-8 encoded text. NOTE: some languages, like Javascript, use UTF-16 or Unicode codepoints for string slice indexing; in these languages, convert to byte arrays before working with facets.',
        'required' => 
        array (
          0 => 'byteStart',
          1 => 'byteEnd',
        ),
        'properties' => 
        array (
          'byteStart' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
          'byteEnd' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
          ),
        ),
      ),
    ),
  ),
  'app.bsky.unspecced.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.unspecced.defs',
    'defs' => 
    array (
      'skeletonSearchPost' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
      'skeletonSearchActor' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
        ),
      ),
      'skeletonSearchStarterPack' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
      'trendingTopic' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'topic',
          1 => 'link',
        ),
        'properties' => 
        array (
          'topic' => 
          array (
            'type' => 'string',
          ),
          'displayName' => 
          array (
            'type' => 'string',
          ),
          'description' => 
          array (
            'type' => 'string',
          ),
          'link' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.unspecced.getConfig' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.unspecced.getConfig',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get miscellaneous runtime configuration.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
            ),
            'properties' => 
            array (
              'checkEmailConfirmed' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.unspecced.getPopularFeedGenerators' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.unspecced.getPopularFeedGenerators',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'An unspecced view of globally popular feed generators.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'query' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'feeds',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'feeds' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.feed.defs#generatorView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.unspecced.getSuggestionsSkeleton' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.unspecced.getSuggestionsSkeleton',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a skeleton of suggested actors. Intended to be called and then hydrated through app.bsky.actor.getSuggestions',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'viewer' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'DID of the account making the request (not included for public/unauthenticated queries). Used to boost followed accounts in ranking.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'relativeToDid' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'DID of the account to get suggestions relative to. If not provided, suggestions will be based on the viewer.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'actors',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'actors' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.unspecced.defs#skeletonSearchActor',
                ),
              ),
              'relativeToDid' => 
              array (
                'type' => 'string',
                'format' => 'did',
                'description' => 'DID of the account these suggestions are relative to. If this is returned undefined, suggestions are based on the viewer.',
              ),
              'recId' => 
              array (
                'type' => 'integer',
                'description' => 'Snowflake for this recommendation, use when submitting recommendation events.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.unspecced.getTaggedSuggestions' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.unspecced.getTaggedSuggestions',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a list of suggestions (feeds and users) tagged with categories',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'suggestions',
            ),
            'properties' => 
            array (
              'suggestions' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.unspecced.getTaggedSuggestions#suggestion',
                ),
              ),
            ),
          ),
        ),
      ),
      'suggestion' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'tag',
          1 => 'subjectType',
          2 => 'subject',
        ),
        'properties' => 
        array (
          'tag' => 
          array (
            'type' => 'string',
          ),
          'subjectType' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'actor',
              1 => 'feed',
            ),
          ),
          'subject' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.unspecced.getTrendingTopics' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.unspecced.getTrendingTopics',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a list of trending topics',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'viewer' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'DID of the account making the request (not included for public/unauthenticated queries). Used to boost followed accounts in ranking.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 25,
              'default' => 10,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'topics',
              1 => 'suggested',
            ),
            'properties' => 
            array (
              'topics' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.unspecced.defs#trendingTopic',
                ),
              ),
              'suggested' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.unspecced.defs#trendingTopic',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.unspecced.searchActorsSkeleton' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.unspecced.searchActorsSkeleton',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Backend Actors (profile) search, returns only skeleton.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'q',
          ),
          'properties' => 
          array (
            'q' => 
            array (
              'type' => 'string',
              'description' => 'Search query string; syntax, phrase, boolean, and faceting is unspecified, but Lucene query syntax is recommended. For typeahead search, only simple term match is supported, not full syntax.',
            ),
            'viewer' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'DID of the account making the request (not included for public/unauthenticated queries). Used to boost followed accounts in ranking.',
            ),
            'typeahead' => 
            array (
              'type' => 'boolean',
              'description' => 'If true, acts as fast/simple \'typeahead\' query.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 25,
            ),
            'cursor' => 
            array (
              'type' => 'string',
              'description' => 'Optional pagination mechanism; may not necessarily allow scrolling through entire result set.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'actors',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'hitsTotal' => 
              array (
                'type' => 'integer',
                'description' => 'Count of search hits. Optional, may be rounded/truncated, and may not be possible to paginate through all hits.',
              ),
              'actors' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.unspecced.defs#skeletonSearchActor',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'BadQueryString',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.unspecced.searchPostsSkeleton' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.unspecced.searchPostsSkeleton',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Backend Posts search, returns only skeleton',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'q',
          ),
          'properties' => 
          array (
            'q' => 
            array (
              'type' => 'string',
              'description' => 'Search query string; syntax, phrase, boolean, and faceting is unspecified, but Lucene query syntax is recommended.',
            ),
            'sort' => 
            array (
              'type' => 'string',
              'knownValues' => 
              array (
                0 => 'top',
                1 => 'latest',
              ),
              'default' => 'latest',
              'description' => 'Specifies the ranking order of results.',
            ),
            'since' => 
            array (
              'type' => 'string',
              'description' => 'Filter results for posts after the indicated datetime (inclusive). Expected to use \'sortAt\' timestamp, which may not match \'createdAt\'. Can be a datetime, or just an ISO date (YYYY-MM-DD).',
            ),
            'until' => 
            array (
              'type' => 'string',
              'description' => 'Filter results for posts before the indicated datetime (not inclusive). Expected to use \'sortAt\' timestamp, which may not match \'createdAt\'. Can be a datetime, or just an ISO date (YYY-MM-DD).',
            ),
            'mentions' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'Filter to posts which mention the given account. Handles are resolved to DID before query-time. Only matches rich-text facet mentions.',
            ),
            'author' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'Filter to posts by the given account. Handles are resolved to DID before query-time.',
            ),
            'lang' => 
            array (
              'type' => 'string',
              'format' => 'language',
              'description' => 'Filter to posts in the given language. Expected to be based on post language field, though server may override language detection.',
            ),
            'domain' => 
            array (
              'type' => 'string',
              'description' => 'Filter to posts with URLs (facet links or embeds) linking to the given domain (hostname). Server may apply hostname normalization.',
            ),
            'url' => 
            array (
              'type' => 'string',
              'format' => 'uri',
              'description' => 'Filter to posts with links (facet links or embeds) pointing to this URL. Server may apply URL normalization or fuzzy matching.',
            ),
            'tag' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'maxLength' => 640,
                'maxGraphemes' => 64,
              ),
              'description' => 'Filter to posts with the given tag (hashtag), based on rich-text facet or tag field. Do not include the hash (#) prefix. Multiple tags can be specified, with \'AND\' matching.',
            ),
            'viewer' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'DID of the account making the request (not included for public/unauthenticated queries). Used for \'from:me\' queries.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 25,
            ),
            'cursor' => 
            array (
              'type' => 'string',
              'description' => 'Optional pagination mechanism; may not necessarily allow scrolling through entire result set.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'posts',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'hitsTotal' => 
              array (
                'type' => 'integer',
                'description' => 'Count of search hits. Optional, may be rounded/truncated, and may not be possible to paginate through all hits.',
              ),
              'posts' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.unspecced.defs#skeletonSearchPost',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'BadQueryString',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.unspecced.searchStarterPacksSkeleton' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.unspecced.searchStarterPacksSkeleton',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Backend Starter Pack search, returns only skeleton.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'q',
          ),
          'properties' => 
          array (
            'q' => 
            array (
              'type' => 'string',
              'description' => 'Search query string; syntax, phrase, boolean, and faceting is unspecified, but Lucene query syntax is recommended.',
            ),
            'viewer' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'DID of the account making the request (not included for public/unauthenticated queries).',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 25,
            ),
            'cursor' => 
            array (
              'type' => 'string',
              'description' => 'Optional pagination mechanism; may not necessarily allow scrolling through entire result set.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'starterPacks',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'hitsTotal' => 
              array (
                'type' => 'integer',
                'description' => 'Count of search hits. Optional, may be rounded/truncated, and may not be possible to paginate through all hits.',
              ),
              'starterPacks' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:app.bsky.unspecced.defs#skeletonSearchStarterPack',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'BadQueryString',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.video.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.video.defs',
    'defs' => 
    array (
      'jobStatus' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'jobId',
          1 => 'did',
          2 => 'state',
        ),
        'properties' => 
        array (
          'jobId' => 
          array (
            'type' => 'string',
          ),
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'state' => 
          array (
            'type' => 'string',
            'description' => 'The state of the video processing job. All values not listed as a known value indicate that the job is in process.',
            'knownValues' => 
            array (
              0 => 'JOB_STATE_COMPLETED',
              1 => 'JOB_STATE_FAILED',
            ),
          ),
          'progress' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
            'maximum' => 100,
            'description' => 'Progress within the current processing state.',
          ),
          'blob' => 
          array (
            'type' => 'blob',
          ),
          'error' => 
          array (
            'type' => 'string',
          ),
          'message' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
    ),
  ),
  'app.bsky.video.getJobStatus' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.video.getJobStatus',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get status details for a video processing job.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'jobId',
          ),
          'properties' => 
          array (
            'jobId' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'jobStatus',
            ),
            'properties' => 
            array (
              'jobStatus' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.video.defs#jobStatus',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.video.getUploadLimits' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.video.getUploadLimits',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get video upload limits for the authenticated user.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'canUpload',
            ),
            'properties' => 
            array (
              'canUpload' => 
              array (
                'type' => 'boolean',
              ),
              'remainingDailyVideos' => 
              array (
                'type' => 'integer',
              ),
              'remainingDailyBytes' => 
              array (
                'type' => 'integer',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'error' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'app.bsky.video.uploadVideo' => 
  array (
    'lexicon' => 1,
    'id' => 'app.bsky.video.uploadVideo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Upload a video to be processed then stored on the PDS.',
        'input' => 
        array (
          'encoding' => 'video/mp4',
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'jobStatus',
            ),
            'properties' => 
            array (
              'jobStatus' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:app.bsky.video.defs#jobStatus',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.actor.declaration' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.actor.declaration',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'A declaration of a Bluesky chat account.',
        'key' => 'literal:self',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'allowIncoming',
          ),
          'properties' => 
          array (
            'allowIncoming' => 
            array (
              'type' => 'string',
              'knownValues' => 
              array (
                0 => 'all',
                1 => 'none',
                2 => 'following',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.actor.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.actor.defs',
    'defs' => 
    array (
      'profileViewBasic' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'handle',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
          ),
          'displayName' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 64,
            'maxLength' => 640,
          ),
          'avatar' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'associated' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileAssociated',
          ),
          'viewer' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#viewerState',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'chatDisabled' => 
          array (
            'type' => 'boolean',
            'description' => 'Set to true when the actor cannot actively participate in converations',
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.actor.deleteAccount' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.actor.deleteAccount',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.actor.exportAccountData' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.actor.exportAccountData',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'output' => 
        array (
          'encoding' => 'application/jsonl',
        ),
      ),
    ),
  ),
  'chat.bsky.convo.acceptConvo' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.acceptConvo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convoId',
            ),
            'properties' => 
            array (
              'convoId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'rev' => 
              array (
                'description' => 'Rev when the convo was accepted. If not present, the convo was already accepted.',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.defs',
    'defs' => 
    array (
      'messageRef' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'messageId',
          2 => 'convoId',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'convoId' => 
          array (
            'type' => 'string',
          ),
          'messageId' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'messageInput' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'text',
        ),
        'properties' => 
        array (
          'text' => 
          array (
            'type' => 'string',
            'maxLength' => 10000,
            'maxGraphemes' => 1000,
          ),
          'facets' => 
          array (
            'type' => 'array',
            'description' => 'Annotations of text (mentions, URLs, hashtags, etc)',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.richtext.facet',
            ),
          ),
          'embed' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.embed.record',
            ),
          ),
        ),
      ),
      'messageView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'id',
          1 => 'rev',
          2 => 'text',
          3 => 'sender',
          4 => 'sentAt',
        ),
        'properties' => 
        array (
          'id' => 
          array (
            'type' => 'string',
          ),
          'rev' => 
          array (
            'type' => 'string',
          ),
          'text' => 
          array (
            'type' => 'string',
            'maxLength' => 10000,
            'maxGraphemes' => 1000,
          ),
          'facets' => 
          array (
            'type' => 'array',
            'description' => 'Annotations of text (mentions, URLs, hashtags, etc)',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:app.bsky.richtext.facet',
            ),
          ),
          'embed' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:app.bsky.embed.record#view',
            ),
          ),
          'sender' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:chat.bsky.convo.defs#messageViewSender',
          ),
          'sentAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'deletedMessageView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'id',
          1 => 'rev',
          2 => 'sender',
          3 => 'sentAt',
        ),
        'properties' => 
        array (
          'id' => 
          array (
            'type' => 'string',
          ),
          'rev' => 
          array (
            'type' => 'string',
          ),
          'sender' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:chat.bsky.convo.defs#messageViewSender',
          ),
          'sentAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'messageViewSender' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
        ),
      ),
      'convoView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'id',
          1 => 'rev',
          2 => 'members',
          3 => 'muted',
          4 => 'unreadCount',
        ),
        'properties' => 
        array (
          'id' => 
          array (
            'type' => 'string',
          ),
          'rev' => 
          array (
            'type' => 'string',
          ),
          'members' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:chat.bsky.actor.defs#profileViewBasic',
            ),
          ),
          'lastMessage' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:chat.bsky.convo.defs#messageView',
              1 => 'lex:chat.bsky.convo.defs#deletedMessageView',
            ),
          ),
          'muted' => 
          array (
            'type' => 'boolean',
          ),
          'status' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'request',
              1 => 'accepted',
            ),
          ),
          'unreadCount' => 
          array (
            'type' => 'integer',
          ),
        ),
      ),
      'logBeginConvo' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'rev',
          1 => 'convoId',
        ),
        'properties' => 
        array (
          'rev' => 
          array (
            'type' => 'string',
          ),
          'convoId' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'logAcceptConvo' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'rev',
          1 => 'convoId',
        ),
        'properties' => 
        array (
          'rev' => 
          array (
            'type' => 'string',
          ),
          'convoId' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'logLeaveConvo' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'rev',
          1 => 'convoId',
        ),
        'properties' => 
        array (
          'rev' => 
          array (
            'type' => 'string',
          ),
          'convoId' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'logMuteConvo' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'rev',
          1 => 'convoId',
        ),
        'properties' => 
        array (
          'rev' => 
          array (
            'type' => 'string',
          ),
          'convoId' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'logUnmuteConvo' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'rev',
          1 => 'convoId',
        ),
        'properties' => 
        array (
          'rev' => 
          array (
            'type' => 'string',
          ),
          'convoId' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'logCreateMessage' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'rev',
          1 => 'convoId',
          2 => 'message',
        ),
        'properties' => 
        array (
          'rev' => 
          array (
            'type' => 'string',
          ),
          'convoId' => 
          array (
            'type' => 'string',
          ),
          'message' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:chat.bsky.convo.defs#messageView',
              1 => 'lex:chat.bsky.convo.defs#deletedMessageView',
            ),
          ),
        ),
      ),
      'logDeleteMessage' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'rev',
          1 => 'convoId',
          2 => 'message',
        ),
        'properties' => 
        array (
          'rev' => 
          array (
            'type' => 'string',
          ),
          'convoId' => 
          array (
            'type' => 'string',
          ),
          'message' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:chat.bsky.convo.defs#messageView',
              1 => 'lex:chat.bsky.convo.defs#deletedMessageView',
            ),
          ),
        ),
      ),
      'logReadMessage' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'rev',
          1 => 'convoId',
          2 => 'message',
        ),
        'properties' => 
        array (
          'rev' => 
          array (
            'type' => 'string',
          ),
          'convoId' => 
          array (
            'type' => 'string',
          ),
          'message' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:chat.bsky.convo.defs#messageView',
              1 => 'lex:chat.bsky.convo.defs#deletedMessageView',
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.deleteMessageForSelf' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.deleteMessageForSelf',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convoId',
              1 => 'messageId',
            ),
            'properties' => 
            array (
              'convoId' => 
              array (
                'type' => 'string',
              ),
              'messageId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:chat.bsky.convo.defs#deletedMessageView',
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.getConvo' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.getConvo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'convoId',
          ),
          'properties' => 
          array (
            'convoId' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convo',
            ),
            'properties' => 
            array (
              'convo' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:chat.bsky.convo.defs#convoView',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.getConvoAvailability' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.getConvoAvailability',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get whether the requester and the other members can chat. If an existing convo is found for these members, it is returned.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'members',
          ),
          'properties' => 
          array (
            'members' => 
            array (
              'type' => 'array',
              'minLength' => 1,
              'maxLength' => 10,
              'items' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'canChat',
            ),
            'properties' => 
            array (
              'canChat' => 
              array (
                'type' => 'boolean',
              ),
              'convo' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:chat.bsky.convo.defs#convoView',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.getConvoForMembers' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.getConvoForMembers',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'members',
          ),
          'properties' => 
          array (
            'members' => 
            array (
              'type' => 'array',
              'minLength' => 1,
              'maxLength' => 10,
              'items' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convo',
            ),
            'properties' => 
            array (
              'convo' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:chat.bsky.convo.defs#convoView',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.getLog' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.getLog',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
          ),
          'properties' => 
          array (
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'logs',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'logs' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'union',
                  'refs' => 
                  array (
                    0 => 'lex:chat.bsky.convo.defs#logBeginConvo',
                    1 => 'lex:chat.bsky.convo.defs#logAcceptConvo',
                    2 => 'lex:chat.bsky.convo.defs#logLeaveConvo',
                    3 => 'lex:chat.bsky.convo.defs#logCreateMessage',
                    4 => 'lex:chat.bsky.convo.defs#logDeleteMessage',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.getMessages' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.getMessages',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'convoId',
          ),
          'properties' => 
          array (
            'convoId' => 
            array (
              'type' => 'string',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'messages',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'messages' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'union',
                  'refs' => 
                  array (
                    0 => 'lex:chat.bsky.convo.defs#messageView',
                    1 => 'lex:chat.bsky.convo.defs#deletedMessageView',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.leaveConvo' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.leaveConvo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convoId',
            ),
            'properties' => 
            array (
              'convoId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convoId',
              1 => 'rev',
            ),
            'properties' => 
            array (
              'convoId' => 
              array (
                'type' => 'string',
              ),
              'rev' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.listConvos' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.listConvos',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'readState' => 
            array (
              'type' => 'string',
              'knownValues' => 
              array (
                0 => 'unread',
              ),
            ),
            'status' => 
            array (
              'type' => 'string',
              'knownValues' => 
              array (
                0 => 'request',
                1 => 'accepted',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convos',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'convos' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:chat.bsky.convo.defs#convoView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.muteConvo' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.muteConvo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convoId',
            ),
            'properties' => 
            array (
              'convoId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convo',
            ),
            'properties' => 
            array (
              'convo' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:chat.bsky.convo.defs#convoView',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.sendMessage' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.sendMessage',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convoId',
              1 => 'message',
            ),
            'properties' => 
            array (
              'convoId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:chat.bsky.convo.defs#messageInput',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:chat.bsky.convo.defs#messageView',
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.sendMessageBatch' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.sendMessageBatch',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'items',
            ),
            'properties' => 
            array (
              'items' => 
              array (
                'type' => 'array',
                'maxLength' => 100,
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:chat.bsky.convo.sendMessageBatch#batchItem',
                ),
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'items',
            ),
            'properties' => 
            array (
              'items' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:chat.bsky.convo.defs#messageView',
                ),
              ),
            ),
          ),
        ),
      ),
      'batchItem' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'convoId',
          1 => 'message',
        ),
        'properties' => 
        array (
          'convoId' => 
          array (
            'type' => 'string',
          ),
          'message' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:chat.bsky.convo.defs#messageInput',
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.unmuteConvo' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.unmuteConvo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convoId',
            ),
            'properties' => 
            array (
              'convoId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convo',
            ),
            'properties' => 
            array (
              'convo' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:chat.bsky.convo.defs#convoView',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.updateAllRead' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.updateAllRead',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'type' => 'string',
                'knownValues' => 
                array (
                  0 => 'request',
                  1 => 'accepted',
                ),
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'updatedCount',
            ),
            'properties' => 
            array (
              'updatedCount' => 
              array (
                'description' => 'The count of updated convos.',
                'type' => 'integer',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.convo.updateRead' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.convo.updateRead',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convoId',
            ),
            'properties' => 
            array (
              'convoId' => 
              array (
                'type' => 'string',
              ),
              'messageId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'convo',
            ),
            'properties' => 
            array (
              'convo' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:chat.bsky.convo.defs#convoView',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.moderation.getActorMetadata' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.moderation.getActorMetadata',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'actor',
          ),
          'properties' => 
          array (
            'actor' => 
            array (
              'type' => 'string',
              'format' => 'did',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'day',
              1 => 'month',
              2 => 'all',
            ),
            'properties' => 
            array (
              'day' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:chat.bsky.moderation.getActorMetadata#metadata',
              ),
              'month' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:chat.bsky.moderation.getActorMetadata#metadata',
              ),
              'all' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:chat.bsky.moderation.getActorMetadata#metadata',
              ),
            ),
          ),
        ),
      ),
      'metadata' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'messagesSent',
          1 => 'messagesReceived',
          2 => 'convos',
          3 => 'convosStarted',
        ),
        'properties' => 
        array (
          'messagesSent' => 
          array (
            'type' => 'integer',
          ),
          'messagesReceived' => 
          array (
            'type' => 'integer',
          ),
          'convos' => 
          array (
            'type' => 'integer',
          ),
          'convosStarted' => 
          array (
            'type' => 'integer',
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.moderation.getMessageContext' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.moderation.getMessageContext',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'messageId',
          ),
          'properties' => 
          array (
            'convoId' => 
            array (
              'type' => 'string',
              'description' => 'Conversation that the message is from. NOTE: this field will eventually be required.',
            ),
            'messageId' => 
            array (
              'type' => 'string',
            ),
            'before' => 
            array (
              'type' => 'integer',
              'default' => 5,
            ),
            'after' => 
            array (
              'type' => 'integer',
              'default' => 5,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'messages',
            ),
            'properties' => 
            array (
              'messages' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'union',
                  'refs' => 
                  array (
                    0 => 'lex:chat.bsky.convo.defs#messageView',
                    1 => 'lex:chat.bsky.convo.defs#deletedMessageView',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'chat.bsky.moderation.updateActorAccess' => 
  array (
    'lexicon' => 1,
    'id' => 'chat.bsky.moderation.updateActorAccess',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'actor',
              1 => 'allowAccess',
            ),
            'properties' => 
            array (
              'actor' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'allowAccess' => 
              array (
                'type' => 'boolean',
              ),
              'ref' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.defs',
    'defs' => 
    array (
      'statusAttr' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'applied',
        ),
        'properties' => 
        array (
          'applied' => 
          array (
            'type' => 'boolean',
          ),
          'ref' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'accountView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'handle',
          2 => 'indexedAt',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
          ),
          'email' => 
          array (
            'type' => 'string',
          ),
          'relatedRecords' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'unknown',
            ),
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'invitedBy' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.server.defs#inviteCode',
          ),
          'invites' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.server.defs#inviteCode',
            ),
          ),
          'invitesDisabled' => 
          array (
            'type' => 'boolean',
          ),
          'emailConfirmedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'inviteNote' => 
          array (
            'type' => 'string',
          ),
          'deactivatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'threatSignatures' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.admin.defs#threatSignature',
            ),
          ),
        ),
      ),
      'repoRef' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
        ),
      ),
      'repoBlobRef' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'cid',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'recordUri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
      'threatSignature' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'property',
          1 => 'value',
        ),
        'properties' => 
        array (
          'property' => 
          array (
            'type' => 'string',
          ),
          'value' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.deleteAccount' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.deleteAccount',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Delete a user account as an administrator.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
            ),
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.disableAccountInvites' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.disableAccountInvites',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Disable an account from receiving new invite codes, but does not invalidate existing codes.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'account',
            ),
            'properties' => 
            array (
              'account' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'note' => 
              array (
                'type' => 'string',
                'description' => 'Optional reason for disabled invites.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.disableInviteCodes' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.disableInviteCodes',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Disable some set of codes and/or all codes associated with a set of users.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'codes' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'accounts' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.enableAccountInvites' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.enableAccountInvites',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Re-enable an account\'s ability to receive invite codes.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'account',
            ),
            'properties' => 
            array (
              'account' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'note' => 
              array (
                'type' => 'string',
                'description' => 'Optional reason for enabled invites.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.getAccountInfo' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.getAccountInfo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get details about an account.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.admin.defs#accountView',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.getAccountInfos' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.getAccountInfos',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get details about some accounts.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'dids',
          ),
          'properties' => 
          array (
            'dids' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'infos',
            ),
            'properties' => 
            array (
              'infos' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.admin.defs#accountView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.getInviteCodes' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.getInviteCodes',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get an admin view of invite codes.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'sort' => 
            array (
              'type' => 'string',
              'knownValues' => 
              array (
                0 => 'recent',
                1 => 'usage',
              ),
              'default' => 'recent',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 500,
              'default' => 100,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'codes',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'codes' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.server.defs#inviteCode',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.getSubjectStatus' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.getSubjectStatus',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get the service-specific admin status of a subject (account, record, or blob).',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
            ),
            'uri' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
            ),
            'blob' => 
            array (
              'type' => 'string',
              'format' => 'cid',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'subject',
            ),
            'properties' => 
            array (
              'subject' => 
              array (
                'type' => 'union',
                'refs' => 
                array (
                  0 => 'lex:com.atproto.admin.defs#repoRef',
                  1 => 'lex:com.atproto.repo.strongRef',
                  2 => 'lex:com.atproto.admin.defs#repoBlobRef',
                ),
              ),
              'takedown' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.admin.defs#statusAttr',
              ),
              'deactivated' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.admin.defs#statusAttr',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.searchAccounts' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.searchAccounts',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get list of accounts that matches your search query.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'email' => 
            array (
              'type' => 'string',
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'accounts',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'accounts' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.admin.defs#accountView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.sendEmail' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.sendEmail',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Send email to a user\'s account email address.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'recipientDid',
              1 => 'content',
              2 => 'senderDid',
            ),
            'properties' => 
            array (
              'recipientDid' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'content' => 
              array (
                'type' => 'string',
              ),
              'subject' => 
              array (
                'type' => 'string',
              ),
              'senderDid' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'comment' => 
              array (
                'type' => 'string',
                'description' => 'Additional comment by the sender that won\'t be used in the email itself but helpful to provide more context for moderators/reviewers',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'sent',
            ),
            'properties' => 
            array (
              'sent' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.updateAccountEmail' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.updateAccountEmail',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Administrative action to update an account\'s email.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'account',
              1 => 'email',
            ),
            'properties' => 
            array (
              'account' => 
              array (
                'type' => 'string',
                'format' => 'at-identifier',
                'description' => 'The handle or DID of the repo.',
              ),
              'email' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.updateAccountHandle' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.updateAccountHandle',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Administrative action to update an account\'s handle.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
              1 => 'handle',
            ),
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'handle' => 
              array (
                'type' => 'string',
                'format' => 'handle',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.updateAccountPassword' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.updateAccountPassword',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Update the password for a user account as an administrator.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
              1 => 'password',
            ),
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'password' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.admin.updateSubjectStatus' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.admin.updateSubjectStatus',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Update the service-specific admin status of a subject (account, record, or blob).',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'subject',
            ),
            'properties' => 
            array (
              'subject' => 
              array (
                'type' => 'union',
                'refs' => 
                array (
                  0 => 'lex:com.atproto.admin.defs#repoRef',
                  1 => 'lex:com.atproto.repo.strongRef',
                  2 => 'lex:com.atproto.admin.defs#repoBlobRef',
                ),
              ),
              'takedown' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.admin.defs#statusAttr',
              ),
              'deactivated' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.admin.defs#statusAttr',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'subject',
            ),
            'properties' => 
            array (
              'subject' => 
              array (
                'type' => 'union',
                'refs' => 
                array (
                  0 => 'lex:com.atproto.admin.defs#repoRef',
                  1 => 'lex:com.atproto.repo.strongRef',
                  2 => 'lex:com.atproto.admin.defs#repoBlobRef',
                ),
              ),
              'takedown' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.admin.defs#statusAttr',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.identity.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.identity.defs',
    'defs' => 
    array (
      'identityInfo' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'handle',
          2 => 'didDoc',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
            'description' => 'The validated handle of the account; or \'handle.invalid\' if the handle did not bi-directionally match the DID document.',
          ),
          'didDoc' => 
          array (
            'type' => 'unknown',
            'description' => 'The complete DID document for the identity.',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.identity.getRecommendedDidCredentials' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.identity.getRecommendedDidCredentials',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Describe the credentials that should be included in the DID doc of an account that is migrating to this service.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'rotationKeys' => 
              array (
                'description' => 'Recommended rotation keys for PLC dids. Should be undefined (or ignored) for did:webs.',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'alsoKnownAs' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'verificationMethods' => 
              array (
                'type' => 'unknown',
              ),
              'services' => 
              array (
                'type' => 'unknown',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.identity.refreshIdentity' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.identity.refreshIdentity',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Request that the server re-resolve an identity (DID and handle). The server may ignore this request, or require authentication, depending on the role, implementation, and policy of the server.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'identifier',
            ),
            'properties' => 
            array (
              'identifier' => 
              array (
                'type' => 'string',
                'format' => 'at-identifier',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.identity.defs#identityInfo',
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'HandleNotFound',
            'description' => 'The resolution process confirmed that the handle does not resolve to any DID.',
          ),
          1 => 
          array (
            'name' => 'DidNotFound',
            'description' => 'The DID resolution process confirmed that there is no current DID.',
          ),
          2 => 
          array (
            'name' => 'DidDeactivated',
            'description' => 'The DID previously existed, but has been deactivated.',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.identity.requestPlcOperationSignature' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.identity.requestPlcOperationSignature',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Request an email with a code to in order to request a signed PLC operation. Requires Auth.',
      ),
    ),
  ),
  'com.atproto.identity.resolveDid' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.identity.resolveDid',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Resolves DID to DID document. Does not bi-directionally verify handle.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'DID to resolve.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'didDoc',
            ),
            'properties' => 
            array (
              'didDoc' => 
              array (
                'type' => 'unknown',
                'description' => 'The complete DID document for the identity.',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'DidNotFound',
            'description' => 'The DID resolution process confirmed that there is no current DID.',
          ),
          1 => 
          array (
            'name' => 'DidDeactivated',
            'description' => 'The DID previously existed, but has been deactivated.',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.identity.resolveHandle' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.identity.resolveHandle',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Resolves an atproto handle (hostname) to a DID. Does not necessarily bi-directionally verify against the the DID document.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'handle',
          ),
          'properties' => 
          array (
            'handle' => 
            array (
              'type' => 'string',
              'format' => 'handle',
              'description' => 'The handle to resolve.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
            ),
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'HandleNotFound',
            'description' => 'The resolution process confirmed that the handle does not resolve to any DID.',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.identity.resolveIdentity' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.identity.resolveIdentity',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Resolves an identity (DID or Handle) to a full identity (DID document and verified handle).',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'identifier',
          ),
          'properties' => 
          array (
            'identifier' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'Handle or DID to resolve.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.identity.defs#identityInfo',
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'HandleNotFound',
            'description' => 'The resolution process confirmed that the handle does not resolve to any DID.',
          ),
          1 => 
          array (
            'name' => 'DidNotFound',
            'description' => 'The DID resolution process confirmed that there is no current DID.',
          ),
          2 => 
          array (
            'name' => 'DidDeactivated',
            'description' => 'The DID previously existed, but has been deactivated.',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.identity.signPlcOperation' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.identity.signPlcOperation',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Signs a PLC operation to update some value(s) in the requesting DID\'s document.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'token' => 
              array (
                'description' => 'A token received through com.atproto.identity.requestPlcOperationSignature',
                'type' => 'string',
              ),
              'rotationKeys' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'alsoKnownAs' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'verificationMethods' => 
              array (
                'type' => 'unknown',
              ),
              'services' => 
              array (
                'type' => 'unknown',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'operation',
            ),
            'properties' => 
            array (
              'operation' => 
              array (
                'type' => 'unknown',
                'description' => 'A signed DID PLC operation.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.identity.submitPlcOperation' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.identity.submitPlcOperation',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Validates a PLC operation to ensure that it doesn\'t violate a service\'s constraints or get the identity into a bad state, then submits it to the PLC registry',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'operation',
            ),
            'properties' => 
            array (
              'operation' => 
              array (
                'type' => 'unknown',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.identity.updateHandle' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.identity.updateHandle',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Updates the current account\'s handle. Verifies handle validity, and updates did:plc document if necessary. Implemented by PDS, and requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'handle',
            ),
            'properties' => 
            array (
              'handle' => 
              array (
                'type' => 'string',
                'format' => 'handle',
                'description' => 'The new handle.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.label.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.label.defs',
    'defs' => 
    array (
      'label' => 
      array (
        'type' => 'object',
        'description' => 'Metadata tag on an atproto resource (eg, repo or record).',
        'required' => 
        array (
          0 => 'src',
          1 => 'uri',
          2 => 'val',
          3 => 'cts',
        ),
        'properties' => 
        array (
          'ver' => 
          array (
            'type' => 'integer',
            'description' => 'The AT Protocol version of the label object.',
          ),
          'src' => 
          array (
            'type' => 'string',
            'format' => 'did',
            'description' => 'DID of the actor who created this label.',
          ),
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'uri',
            'description' => 'AT URI of the record, repository (account), or other resource that this label applies to.',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
            'description' => 'Optionally, CID specifying the specific version of \'uri\' resource this label applies to.',
          ),
          'val' => 
          array (
            'type' => 'string',
            'maxLength' => 128,
            'description' => 'The short string name of the value or type of this label.',
          ),
          'neg' => 
          array (
            'type' => 'boolean',
            'description' => 'If true, this is a negation label, overwriting a previous label.',
          ),
          'cts' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
            'description' => 'Timestamp when this label was created.',
          ),
          'exp' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
            'description' => 'Timestamp at which this label expires (no longer applies).',
          ),
          'sig' => 
          array (
            'type' => 'bytes',
            'description' => 'Signature of dag-cbor encoded label.',
          ),
        ),
      ),
      'selfLabels' => 
      array (
        'type' => 'object',
        'description' => 'Metadata tags on an atproto record, published by the author within the record.',
        'required' => 
        array (
          0 => 'values',
        ),
        'properties' => 
        array (
          'values' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#selfLabel',
            ),
            'maxLength' => 10,
          ),
        ),
      ),
      'selfLabel' => 
      array (
        'type' => 'object',
        'description' => 'Metadata tag on an atproto record, published by the author within the record. Note that schemas should use #selfLabels, not #selfLabel.',
        'required' => 
        array (
          0 => 'val',
        ),
        'properties' => 
        array (
          'val' => 
          array (
            'type' => 'string',
            'maxLength' => 128,
            'description' => 'The short string name of the value or type of this label.',
          ),
        ),
      ),
      'labelValueDefinition' => 
      array (
        'type' => 'object',
        'description' => 'Declares a label value and its expected interpretations and behaviors.',
        'required' => 
        array (
          0 => 'identifier',
          1 => 'severity',
          2 => 'blurs',
          3 => 'locales',
        ),
        'properties' => 
        array (
          'identifier' => 
          array (
            'type' => 'string',
            'description' => 'The value of the label being defined. Must only include lowercase ascii and the \'-\' character ([a-z-]+).',
            'maxLength' => 100,
            'maxGraphemes' => 100,
          ),
          'severity' => 
          array (
            'type' => 'string',
            'description' => 'How should a client visually convey this label? \'inform\' means neutral and informational; \'alert\' means negative and warning; \'none\' means show nothing.',
            'knownValues' => 
            array (
              0 => 'inform',
              1 => 'alert',
              2 => 'none',
            ),
          ),
          'blurs' => 
          array (
            'type' => 'string',
            'description' => 'What should this label hide in the UI, if applied? \'content\' hides all of the target; \'media\' hides the images/video/audio; \'none\' hides nothing.',
            'knownValues' => 
            array (
              0 => 'content',
              1 => 'media',
              2 => 'none',
            ),
          ),
          'defaultSetting' => 
          array (
            'type' => 'string',
            'description' => 'The default setting for this label.',
            'knownValues' => 
            array (
              0 => 'ignore',
              1 => 'warn',
              2 => 'hide',
            ),
            'default' => 'warn',
          ),
          'adultOnly' => 
          array (
            'type' => 'boolean',
            'description' => 'Does the user need to have adult content enabled in order to configure this label?',
          ),
          'locales' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#labelValueDefinitionStrings',
            ),
          ),
        ),
      ),
      'labelValueDefinitionStrings' => 
      array (
        'type' => 'object',
        'description' => 'Strings which describe the label in the UI, localized into a specific language.',
        'required' => 
        array (
          0 => 'lang',
          1 => 'name',
          2 => 'description',
        ),
        'properties' => 
        array (
          'lang' => 
          array (
            'type' => 'string',
            'description' => 'The code of the language these strings are written in.',
            'format' => 'language',
          ),
          'name' => 
          array (
            'type' => 'string',
            'description' => 'A short human-readable name for the label.',
            'maxGraphemes' => 64,
            'maxLength' => 640,
          ),
          'description' => 
          array (
            'type' => 'string',
            'description' => 'A longer description of what the label means and why it might be applied.',
            'maxGraphemes' => 10000,
            'maxLength' => 100000,
          ),
        ),
      ),
      'labelValue' => 
      array (
        'type' => 'string',
        'knownValues' => 
        array (
          0 => '!hide',
          1 => '!no-promote',
          2 => '!warn',
          3 => '!no-unauthenticated',
          4 => 'dmca-violation',
          5 => 'doxxing',
          6 => 'porn',
          7 => 'sexual',
          8 => 'nudity',
          9 => 'nsfl',
          10 => 'gore',
        ),
      ),
    ),
  ),
  'com.atproto.label.queryLabels' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.label.queryLabels',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Find labels relevant to the provided AT-URI patterns. Public endpoint for moderation services, though may return different or additional results with auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'uriPatterns',
          ),
          'properties' => 
          array (
            'uriPatterns' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
              'description' => 'List of AT URI patterns to match (boolean \'OR\'). Each may be a prefix (ending with \'*\'; will match inclusive of the string leading to \'*\'), or a full URI.',
            ),
            'sources' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'description' => 'Optional list of label sources (DIDs) to filter on.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 250,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'labels',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'labels' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.label.defs#label',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.label.subscribeLabels' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.label.subscribeLabels',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'subscription',
        'description' => 'Subscribe to stream of labels (and negations). Public endpoint implemented by mod services. Uses same sequencing scheme as repo event stream.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'cursor' => 
            array (
              'type' => 'integer',
              'description' => 'The last known event seq number to backfill from.',
            ),
          ),
        ),
        'message' => 
        array (
          'schema' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:com.atproto.label.subscribeLabels#labels',
              1 => 'lex:com.atproto.label.subscribeLabels#info',
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'FutureCursor',
          ),
        ),
      ),
      'labels' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'seq',
          1 => 'labels',
        ),
        'properties' => 
        array (
          'seq' => 
          array (
            'type' => 'integer',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
        ),
      ),
      'info' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'name',
        ),
        'properties' => 
        array (
          'name' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'OutdatedCursor',
            ),
          ),
          'message' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.lexicon.schema' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.lexicon.schema',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'record',
        'description' => 'Representation of Lexicon schemas themselves, when published as atproto records. Note that the schema language is not defined in Lexicon; this meta schema currently only includes a single version field (\'lexicon\'). See the atproto specifications for description of the other expected top-level fields (\'id\', \'defs\', etc).',
        'key' => 'nsid',
        'record' => 
        array (
          'type' => 'object',
          'required' => 
          array (
            0 => 'lexicon',
          ),
          'properties' => 
          array (
            'lexicon' => 
            array (
              'type' => 'integer',
              'description' => 'Indicates the \'version\' of the Lexicon language. Must be \'1\' for the current atproto/Lexicon schema system.',
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.moderation.createReport' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.moderation.createReport',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Submit a moderation report regarding an atproto account or record. Implemented by moderation services (with PDS proxying), and requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'reasonType',
              1 => 'subject',
            ),
            'properties' => 
            array (
              'reasonType' => 
              array (
                'type' => 'ref',
                'description' => 'Indicates the broad category of violation the report is for.',
                'ref' => 'lex:com.atproto.moderation.defs#reasonType',
              ),
              'reason' => 
              array (
                'type' => 'string',
                'maxGraphemes' => 2000,
                'maxLength' => 20000,
                'description' => 'Additional context about the content and violation.',
              ),
              'subject' => 
              array (
                'type' => 'union',
                'refs' => 
                array (
                  0 => 'lex:com.atproto.admin.defs#repoRef',
                  1 => 'lex:com.atproto.repo.strongRef',
                ),
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'id',
              1 => 'reasonType',
              2 => 'subject',
              3 => 'reportedBy',
              4 => 'createdAt',
            ),
            'properties' => 
            array (
              'id' => 
              array (
                'type' => 'integer',
              ),
              'reasonType' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.moderation.defs#reasonType',
              ),
              'reason' => 
              array (
                'type' => 'string',
                'maxGraphemes' => 2000,
                'maxLength' => 20000,
              ),
              'subject' => 
              array (
                'type' => 'union',
                'refs' => 
                array (
                  0 => 'lex:com.atproto.admin.defs#repoRef',
                  1 => 'lex:com.atproto.repo.strongRef',
                ),
              ),
              'reportedBy' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'createdAt' => 
              array (
                'type' => 'string',
                'format' => 'datetime',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.moderation.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.moderation.defs',
    'defs' => 
    array (
      'reasonType' => 
      array (
        'type' => 'string',
        'knownValues' => 
        array (
          0 => 'com.atproto.moderation.defs#reasonSpam',
          1 => 'com.atproto.moderation.defs#reasonViolation',
          2 => 'com.atproto.moderation.defs#reasonMisleading',
          3 => 'com.atproto.moderation.defs#reasonSexual',
          4 => 'com.atproto.moderation.defs#reasonRude',
          5 => 'com.atproto.moderation.defs#reasonOther',
          6 => 'com.atproto.moderation.defs#reasonAppeal',
        ),
      ),
      'reasonSpam' => 
      array (
        'type' => 'token',
        'description' => 'Spam: frequent unwanted promotion, replies, mentions',
      ),
      'reasonViolation' => 
      array (
        'type' => 'token',
        'description' => 'Direct violation of server rules, laws, terms of service',
      ),
      'reasonMisleading' => 
      array (
        'type' => 'token',
        'description' => 'Misleading identity, affiliation, or content',
      ),
      'reasonSexual' => 
      array (
        'type' => 'token',
        'description' => 'Unwanted or mislabeled sexual content',
      ),
      'reasonRude' => 
      array (
        'type' => 'token',
        'description' => 'Rude, harassing, explicit, or otherwise unwelcoming behavior',
      ),
      'reasonOther' => 
      array (
        'type' => 'token',
        'description' => 'Other: reports not falling under another report category',
      ),
      'reasonAppeal' => 
      array (
        'type' => 'token',
        'description' => 'Appeal: appeal a previously taken moderation action',
      ),
      'subjectType' => 
      array (
        'type' => 'string',
        'description' => 'Tag describing a type of subject that might be reported.',
        'knownValues' => 
        array (
          0 => 'account',
          1 => 'record',
          2 => 'chat',
        ),
      ),
    ),
  ),
  'com.atproto.repo.applyWrites' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.applyWrites',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Apply a batch transaction of repository creates, updates, and deletes. Requires auth, implemented by PDS.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'repo',
              1 => 'writes',
            ),
            'properties' => 
            array (
              'repo' => 
              array (
                'type' => 'string',
                'format' => 'at-identifier',
                'description' => 'The handle or DID of the repo (aka, current account).',
              ),
              'validate' => 
              array (
                'type' => 'boolean',
                'description' => 'Can be set to \'false\' to skip Lexicon schema validation of record data across all operations, \'true\' to require it, or leave unset to validate only for known Lexicons.',
              ),
              'writes' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'union',
                  'refs' => 
                  array (
                    0 => 'lex:com.atproto.repo.applyWrites#create',
                    1 => 'lex:com.atproto.repo.applyWrites#update',
                    2 => 'lex:com.atproto.repo.applyWrites#delete',
                  ),
                  'closed' => true,
                ),
              ),
              'swapCommit' => 
              array (
                'type' => 'string',
                'description' => 'If provided, the entire operation will fail if the current repo commit CID does not match this value. Used to prevent conflicting repo mutations.',
                'format' => 'cid',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
            ),
            'properties' => 
            array (
              'commit' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.repo.defs#commitMeta',
              ),
              'results' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'union',
                  'refs' => 
                  array (
                    0 => 'lex:com.atproto.repo.applyWrites#createResult',
                    1 => 'lex:com.atproto.repo.applyWrites#updateResult',
                    2 => 'lex:com.atproto.repo.applyWrites#deleteResult',
                  ),
                  'closed' => true,
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'InvalidSwap',
            'description' => 'Indicates that the \'swapCommit\' parameter did not match current commit.',
          ),
        ),
      ),
      'create' => 
      array (
        'type' => 'object',
        'description' => 'Operation which creates a new record.',
        'required' => 
        array (
          0 => 'collection',
          1 => 'value',
        ),
        'properties' => 
        array (
          'collection' => 
          array (
            'type' => 'string',
            'format' => 'nsid',
          ),
          'rkey' => 
          array (
            'type' => 'string',
            'maxLength' => 512,
            'format' => 'record-key',
            'description' => 'NOTE: maxLength is redundant with record-key format. Keeping it temporarily to ensure backwards compatibility.',
          ),
          'value' => 
          array (
            'type' => 'unknown',
          ),
        ),
      ),
      'update' => 
      array (
        'type' => 'object',
        'description' => 'Operation which updates an existing record.',
        'required' => 
        array (
          0 => 'collection',
          1 => 'rkey',
          2 => 'value',
        ),
        'properties' => 
        array (
          'collection' => 
          array (
            'type' => 'string',
            'format' => 'nsid',
          ),
          'rkey' => 
          array (
            'type' => 'string',
            'format' => 'record-key',
          ),
          'value' => 
          array (
            'type' => 'unknown',
          ),
        ),
      ),
      'delete' => 
      array (
        'type' => 'object',
        'description' => 'Operation which deletes an existing record.',
        'required' => 
        array (
          0 => 'collection',
          1 => 'rkey',
        ),
        'properties' => 
        array (
          'collection' => 
          array (
            'type' => 'string',
            'format' => 'nsid',
          ),
          'rkey' => 
          array (
            'type' => 'string',
            'format' => 'record-key',
          ),
        ),
      ),
      'createResult' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'validationStatus' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'valid',
              1 => 'unknown',
            ),
          ),
        ),
      ),
      'updateResult' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'validationStatus' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'valid',
              1 => 'unknown',
            ),
          ),
        ),
      ),
      'deleteResult' => 
      array (
        'type' => 'object',
        'required' => 
        array (
        ),
        'properties' => 
        array (
        ),
      ),
    ),
  ),
  'com.atproto.repo.createRecord' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.createRecord',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Create a single new repository record. Requires auth, implemented by PDS.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'repo',
              1 => 'collection',
              2 => 'record',
            ),
            'properties' => 
            array (
              'repo' => 
              array (
                'type' => 'string',
                'format' => 'at-identifier',
                'description' => 'The handle or DID of the repo (aka, current account).',
              ),
              'collection' => 
              array (
                'type' => 'string',
                'format' => 'nsid',
                'description' => 'The NSID of the record collection.',
              ),
              'rkey' => 
              array (
                'type' => 'string',
                'format' => 'record-key',
                'description' => 'The Record Key.',
                'maxLength' => 512,
              ),
              'validate' => 
              array (
                'type' => 'boolean',
                'description' => 'Can be set to \'false\' to skip Lexicon schema validation of record data, \'true\' to require it, or leave unset to validate only for known Lexicons.',
              ),
              'record' => 
              array (
                'type' => 'unknown',
                'description' => 'The record itself. Must contain a $type field.',
              ),
              'swapCommit' => 
              array (
                'type' => 'string',
                'format' => 'cid',
                'description' => 'Compare and swap with the previous commit by CID.',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'uri',
              1 => 'cid',
            ),
            'properties' => 
            array (
              'uri' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
              'cid' => 
              array (
                'type' => 'string',
                'format' => 'cid',
              ),
              'commit' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.repo.defs#commitMeta',
              ),
              'validationStatus' => 
              array (
                'type' => 'string',
                'knownValues' => 
                array (
                  0 => 'valid',
                  1 => 'unknown',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'InvalidSwap',
            'description' => 'Indicates that \'swapCommit\' didn\'t match current repo commit.',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.repo.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.defs',
    'defs' => 
    array (
      'commitMeta' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'cid',
          1 => 'rev',
        ),
        'properties' => 
        array (
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'rev' => 
          array (
            'type' => 'string',
            'format' => 'tid',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.repo.deleteRecord' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.deleteRecord',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Delete a repository record, or ensure it doesn\'t exist. Requires auth, implemented by PDS.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'repo',
              1 => 'collection',
              2 => 'rkey',
            ),
            'properties' => 
            array (
              'repo' => 
              array (
                'type' => 'string',
                'format' => 'at-identifier',
                'description' => 'The handle or DID of the repo (aka, current account).',
              ),
              'collection' => 
              array (
                'type' => 'string',
                'format' => 'nsid',
                'description' => 'The NSID of the record collection.',
              ),
              'rkey' => 
              array (
                'type' => 'string',
                'format' => 'record-key',
                'description' => 'The Record Key.',
              ),
              'swapRecord' => 
              array (
                'type' => 'string',
                'format' => 'cid',
                'description' => 'Compare and swap with the previous record by CID.',
              ),
              'swapCommit' => 
              array (
                'type' => 'string',
                'format' => 'cid',
                'description' => 'Compare and swap with the previous commit by CID.',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'commit' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.repo.defs#commitMeta',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'InvalidSwap',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.repo.describeRepo' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.describeRepo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get information about an account and repository, including the list of collections. Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'repo',
          ),
          'properties' => 
          array (
            'repo' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'The handle or DID of the repo.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'handle',
              1 => 'did',
              2 => 'didDoc',
              3 => 'collections',
              4 => 'handleIsCorrect',
            ),
            'properties' => 
            array (
              'handle' => 
              array (
                'type' => 'string',
                'format' => 'handle',
              ),
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'didDoc' => 
              array (
                'type' => 'unknown',
                'description' => 'The complete DID document for this account.',
              ),
              'collections' => 
              array (
                'type' => 'array',
                'description' => 'List of all the collections (NSIDs) for which this repo contains at least one record.',
                'items' => 
                array (
                  'type' => 'string',
                  'format' => 'nsid',
                ),
              ),
              'handleIsCorrect' => 
              array (
                'type' => 'boolean',
                'description' => 'Indicates if handle is currently valid (resolves bi-directionally)',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.repo.getRecord' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.getRecord',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a single record from a repository. Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'repo',
            1 => 'collection',
            2 => 'rkey',
          ),
          'properties' => 
          array (
            'repo' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'The handle or DID of the repo.',
            ),
            'collection' => 
            array (
              'type' => 'string',
              'format' => 'nsid',
              'description' => 'The NSID of the record collection.',
            ),
            'rkey' => 
            array (
              'type' => 'string',
              'description' => 'The Record Key.',
              'format' => 'record-key',
            ),
            'cid' => 
            array (
              'type' => 'string',
              'format' => 'cid',
              'description' => 'The CID of the version of the record. If not specified, then return the most recent version.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'uri',
              1 => 'value',
            ),
            'properties' => 
            array (
              'uri' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
              'cid' => 
              array (
                'type' => 'string',
                'format' => 'cid',
              ),
              'value' => 
              array (
                'type' => 'unknown',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'RecordNotFound',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.repo.importRepo' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.importRepo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Import a repo in the form of a CAR file. Requires Content-Length HTTP header to be set.',
        'input' => 
        array (
          'encoding' => 'application/vnd.ipld.car',
        ),
      ),
    ),
  ),
  'com.atproto.repo.listMissingBlobs' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.listMissingBlobs',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Returns a list of missing blobs for the requesting account. Intended to be used in the account migration flow.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 1000,
              'default' => 500,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'blobs',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'blobs' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.repo.listMissingBlobs#recordBlob',
                ),
              ),
            ),
          ),
        ),
      ),
      'recordBlob' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'cid',
          1 => 'recordUri',
        ),
        'properties' => 
        array (
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'recordUri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.repo.listRecords' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.listRecords',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'List a range of records in a repository, matching a specific collection. Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'repo',
            1 => 'collection',
          ),
          'properties' => 
          array (
            'repo' => 
            array (
              'type' => 'string',
              'format' => 'at-identifier',
              'description' => 'The handle or DID of the repo.',
            ),
            'collection' => 
            array (
              'type' => 'string',
              'format' => 'nsid',
              'description' => 'The NSID of the record type.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
              'description' => 'The number of records to return.',
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'reverse' => 
            array (
              'type' => 'boolean',
              'description' => 'Flag to reverse the order of the returned records.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'records',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'records' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.repo.listRecords#record',
                ),
              ),
            ),
          ),
        ),
      ),
      'record' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'value',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'value' => 
          array (
            'type' => 'unknown',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.repo.putRecord' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.putRecord',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Write a repository record, creating or updating it as needed. Requires auth, implemented by PDS.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'repo',
              1 => 'collection',
              2 => 'rkey',
              3 => 'record',
            ),
            'nullable' => 
            array (
              0 => 'swapRecord',
            ),
            'properties' => 
            array (
              'repo' => 
              array (
                'type' => 'string',
                'format' => 'at-identifier',
                'description' => 'The handle or DID of the repo (aka, current account).',
              ),
              'collection' => 
              array (
                'type' => 'string',
                'format' => 'nsid',
                'description' => 'The NSID of the record collection.',
              ),
              'rkey' => 
              array (
                'type' => 'string',
                'format' => 'record-key',
                'description' => 'The Record Key.',
                'maxLength' => 512,
              ),
              'validate' => 
              array (
                'type' => 'boolean',
                'description' => 'Can be set to \'false\' to skip Lexicon schema validation of record data, \'true\' to require it, or leave unset to validate only for known Lexicons.',
              ),
              'record' => 
              array (
                'type' => 'unknown',
                'description' => 'The record to write.',
              ),
              'swapRecord' => 
              array (
                'type' => 'string',
                'format' => 'cid',
                'description' => 'Compare and swap with the previous record by CID. WARNING: nullable and optional field; may cause problems with golang implementation',
              ),
              'swapCommit' => 
              array (
                'type' => 'string',
                'format' => 'cid',
                'description' => 'Compare and swap with the previous commit by CID.',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'uri',
              1 => 'cid',
            ),
            'properties' => 
            array (
              'uri' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
              'cid' => 
              array (
                'type' => 'string',
                'format' => 'cid',
              ),
              'commit' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:com.atproto.repo.defs#commitMeta',
              ),
              'validationStatus' => 
              array (
                'type' => 'string',
                'knownValues' => 
                array (
                  0 => 'valid',
                  1 => 'unknown',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'InvalidSwap',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.repo.strongRef' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.strongRef',
    'description' => 'A URI with a content-hash fingerprint.',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.repo.uploadBlob' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.repo.uploadBlob',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Upload a new blob, to be referenced from a repository record. The blob will be deleted if it is not referenced within a time window (eg, minutes). Blob restrictions (mimetype, size, etc) are enforced when the reference is created. Requires auth, implemented by PDS.',
        'input' => 
        array (
          'encoding' => '*/*',
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'blob',
            ),
            'properties' => 
            array (
              'blob' => 
              array (
                'type' => 'blob',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.activateAccount' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.activateAccount',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Activates a currently deactivated account. Used to finalize account migration after the account\'s repo is imported and identity is setup.',
      ),
    ),
  ),
  'com.atproto.server.checkAccountStatus' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.checkAccountStatus',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Returns the status of an account, especially as pertaining to import or recovery. Can be called many times over the course of an account migration. Requires auth and can only be called pertaining to oneself.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'activated',
              1 => 'validDid',
              2 => 'repoCommit',
              3 => 'repoRev',
              4 => 'repoBlocks',
              5 => 'indexedRecords',
              6 => 'privateStateValues',
              7 => 'expectedBlobs',
              8 => 'importedBlobs',
            ),
            'properties' => 
            array (
              'activated' => 
              array (
                'type' => 'boolean',
              ),
              'validDid' => 
              array (
                'type' => 'boolean',
              ),
              'repoCommit' => 
              array (
                'type' => 'string',
                'format' => 'cid',
              ),
              'repoRev' => 
              array (
                'type' => 'string',
              ),
              'repoBlocks' => 
              array (
                'type' => 'integer',
              ),
              'indexedRecords' => 
              array (
                'type' => 'integer',
              ),
              'privateStateValues' => 
              array (
                'type' => 'integer',
              ),
              'expectedBlobs' => 
              array (
                'type' => 'integer',
              ),
              'importedBlobs' => 
              array (
                'type' => 'integer',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.confirmEmail' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.confirmEmail',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Confirm an email using a token from com.atproto.server.requestEmailConfirmation.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'email',
              1 => 'token',
            ),
            'properties' => 
            array (
              'email' => 
              array (
                'type' => 'string',
              ),
              'token' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'AccountNotFound',
          ),
          1 => 
          array (
            'name' => 'ExpiredToken',
          ),
          2 => 
          array (
            'name' => 'InvalidToken',
          ),
          3 => 
          array (
            'name' => 'InvalidEmail',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.createAccount' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.createAccount',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Create an account. Implemented by PDS.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'handle',
            ),
            'properties' => 
            array (
              'email' => 
              array (
                'type' => 'string',
              ),
              'handle' => 
              array (
                'type' => 'string',
                'format' => 'handle',
                'description' => 'Requested handle for the account.',
              ),
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
                'description' => 'Pre-existing atproto DID, being imported to a new account.',
              ),
              'inviteCode' => 
              array (
                'type' => 'string',
              ),
              'verificationCode' => 
              array (
                'type' => 'string',
              ),
              'verificationPhone' => 
              array (
                'type' => 'string',
              ),
              'password' => 
              array (
                'type' => 'string',
                'description' => 'Initial account password. May need to meet instance-specific password strength requirements.',
              ),
              'recoveryKey' => 
              array (
                'type' => 'string',
                'description' => 'DID PLC rotation key (aka, recovery key) to be included in PLC creation operation.',
              ),
              'plcOp' => 
              array (
                'type' => 'unknown',
                'description' => 'A signed DID PLC operation to be submitted as part of importing an existing account to this instance. NOTE: this optional field may be updated when full account migration is implemented.',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'description' => 'Account login session returned on successful account creation.',
            'required' => 
            array (
              0 => 'accessJwt',
              1 => 'refreshJwt',
              2 => 'handle',
              3 => 'did',
            ),
            'properties' => 
            array (
              'accessJwt' => 
              array (
                'type' => 'string',
              ),
              'refreshJwt' => 
              array (
                'type' => 'string',
              ),
              'handle' => 
              array (
                'type' => 'string',
                'format' => 'handle',
              ),
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
                'description' => 'The DID of the new account.',
              ),
              'didDoc' => 
              array (
                'type' => 'unknown',
                'description' => 'Complete DID document.',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'InvalidHandle',
          ),
          1 => 
          array (
            'name' => 'InvalidPassword',
          ),
          2 => 
          array (
            'name' => 'InvalidInviteCode',
          ),
          3 => 
          array (
            'name' => 'HandleNotAvailable',
          ),
          4 => 
          array (
            'name' => 'UnsupportedDomain',
          ),
          5 => 
          array (
            'name' => 'UnresolvableDid',
          ),
          6 => 
          array (
            'name' => 'IncompatibleDidDoc',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.createAppPassword' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.createAppPassword',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Create an App Password.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'name',
            ),
            'properties' => 
            array (
              'name' => 
              array (
                'type' => 'string',
                'description' => 'A short name for the App Password, to help distinguish them.',
              ),
              'privileged' => 
              array (
                'type' => 'boolean',
                'description' => 'If an app password has \'privileged\' access to possibly sensitive account state. Meant for use with trusted clients.',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.server.createAppPassword#appPassword',
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'AccountTakedown',
          ),
        ),
      ),
      'appPassword' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'name',
          1 => 'password',
          2 => 'createdAt',
        ),
        'properties' => 
        array (
          'name' => 
          array (
            'type' => 'string',
          ),
          'password' => 
          array (
            'type' => 'string',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'privileged' => 
          array (
            'type' => 'boolean',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.createInviteCode' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.createInviteCode',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Create an invite code.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'useCount',
            ),
            'properties' => 
            array (
              'useCount' => 
              array (
                'type' => 'integer',
              ),
              'forAccount' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'code',
            ),
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.createInviteCodes' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.createInviteCodes',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Create invite codes.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'codeCount',
              1 => 'useCount',
            ),
            'properties' => 
            array (
              'codeCount' => 
              array (
                'type' => 'integer',
                'default' => 1,
              ),
              'useCount' => 
              array (
                'type' => 'integer',
              ),
              'forAccounts' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'format' => 'did',
                ),
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'codes',
            ),
            'properties' => 
            array (
              'codes' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.server.createInviteCodes#accountCodes',
                ),
              ),
            ),
          ),
        ),
      ),
      'accountCodes' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'account',
          1 => 'codes',
        ),
        'properties' => 
        array (
          'account' => 
          array (
            'type' => 'string',
          ),
          'codes' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.createSession' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.createSession',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Create an authentication session.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'identifier',
              1 => 'password',
            ),
            'properties' => 
            array (
              'identifier' => 
              array (
                'type' => 'string',
                'description' => 'Handle or other identifier supported by the server for the authenticating user.',
              ),
              'password' => 
              array (
                'type' => 'string',
              ),
              'authFactorToken' => 
              array (
                'type' => 'string',
              ),
              'allowTakendown' => 
              array (
                'type' => 'boolean',
                'description' => 'When true, instead of throwing error for takendown accounts, a valid response with a narrow scoped token will be returned',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'accessJwt',
              1 => 'refreshJwt',
              2 => 'handle',
              3 => 'did',
            ),
            'properties' => 
            array (
              'accessJwt' => 
              array (
                'type' => 'string',
              ),
              'refreshJwt' => 
              array (
                'type' => 'string',
              ),
              'handle' => 
              array (
                'type' => 'string',
                'format' => 'handle',
              ),
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'didDoc' => 
              array (
                'type' => 'unknown',
              ),
              'email' => 
              array (
                'type' => 'string',
              ),
              'emailConfirmed' => 
              array (
                'type' => 'boolean',
              ),
              'emailAuthFactor' => 
              array (
                'type' => 'boolean',
              ),
              'active' => 
              array (
                'type' => 'boolean',
              ),
              'status' => 
              array (
                'type' => 'string',
                'description' => 'If active=false, this optional field indicates a possible reason for why the account is not active. If active=false and no status is supplied, then the host makes no claim for why the repository is no longer being hosted.',
                'knownValues' => 
                array (
                  0 => 'takendown',
                  1 => 'suspended',
                  2 => 'deactivated',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'AccountTakedown',
          ),
          1 => 
          array (
            'name' => 'AuthFactorTokenRequired',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.deactivateAccount' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.deactivateAccount',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Deactivates a currently active account. Stops serving of repo, and future writes to repo until reactivated. Used to finalize account migration with the old host after the account has been activated on the new host.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'deleteAfter' => 
              array (
                'type' => 'string',
                'format' => 'datetime',
                'description' => 'A recommendation to server as to how long they should hold onto the deactivated account before deleting.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.defs',
    'defs' => 
    array (
      'inviteCode' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'code',
          1 => 'available',
          2 => 'disabled',
          3 => 'forAccount',
          4 => 'createdBy',
          5 => 'createdAt',
          6 => 'uses',
        ),
        'properties' => 
        array (
          'code' => 
          array (
            'type' => 'string',
          ),
          'available' => 
          array (
            'type' => 'integer',
          ),
          'disabled' => 
          array (
            'type' => 'boolean',
          ),
          'forAccount' => 
          array (
            'type' => 'string',
          ),
          'createdBy' => 
          array (
            'type' => 'string',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'uses' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.server.defs#inviteCodeUse',
            ),
          ),
        ),
      ),
      'inviteCodeUse' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'usedBy',
          1 => 'usedAt',
        ),
        'properties' => 
        array (
          'usedBy' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'usedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.deleteAccount' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.deleteAccount',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Delete an actor\'s account with a token and password. Can only be called after requesting a deletion token. Requires auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
              1 => 'password',
              2 => 'token',
            ),
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'password' => 
              array (
                'type' => 'string',
              ),
              'token' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'ExpiredToken',
          ),
          1 => 
          array (
            'name' => 'InvalidToken',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.deleteSession' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.deleteSession',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Delete the current session. Requires auth.',
      ),
    ),
  ),
  'com.atproto.server.describeServer' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.describeServer',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Describes the server\'s account creation requirements and capabilities. Implemented by PDS.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
              1 => 'availableUserDomains',
            ),
            'properties' => 
            array (
              'inviteCodeRequired' => 
              array (
                'type' => 'boolean',
                'description' => 'If true, an invite code must be supplied to create an account on this instance.',
              ),
              'phoneVerificationRequired' => 
              array (
                'type' => 'boolean',
                'description' => 'If true, a phone verification token must be supplied to create an account on this instance.',
              ),
              'availableUserDomains' => 
              array (
                'type' => 'array',
                'description' => 'List of domain suffixes that can be used in account handles.',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'links' => 
              array (
                'type' => 'ref',
                'description' => 'URLs of service policy documents.',
                'ref' => 'lex:com.atproto.server.describeServer#links',
              ),
              'contact' => 
              array (
                'type' => 'ref',
                'description' => 'Contact information',
                'ref' => 'lex:com.atproto.server.describeServer#contact',
              ),
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
      ),
      'links' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'privacyPolicy' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'termsOfService' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
        ),
      ),
      'contact' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'email' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.getAccountInviteCodes' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.getAccountInviteCodes',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get all invite codes for the current account. Requires auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'includeUsed' => 
            array (
              'type' => 'boolean',
              'default' => true,
            ),
            'createAvailable' => 
            array (
              'type' => 'boolean',
              'default' => true,
              'description' => 'Controls whether any new \'earned\' but not \'created\' invites should be created.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'codes',
            ),
            'properties' => 
            array (
              'codes' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.server.defs#inviteCode',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'DuplicateCreate',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.getServiceAuth' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.getServiceAuth',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a signed token on behalf of the requesting DID for the requested service.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'aud',
          ),
          'properties' => 
          array (
            'aud' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The DID of the service that the token will be used to authenticate with',
            ),
            'exp' => 
            array (
              'type' => 'integer',
              'description' => 'The time in Unix Epoch seconds that the JWT expires. Defaults to 60 seconds in the future. The service may enforce certain time bounds on tokens depending on the requested scope.',
            ),
            'lxm' => 
            array (
              'type' => 'string',
              'format' => 'nsid',
              'description' => 'Lexicon (XRPC) method to bind the requested token to',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'token',
            ),
            'properties' => 
            array (
              'token' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'BadExpiration',
            'description' => 'Indicates that the requested expiration date is not a valid. May be in the past or may be reliant on the requested scopes.',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.getSession' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.getSession',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get information about the current auth session. Requires auth.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'handle',
              1 => 'did',
            ),
            'properties' => 
            array (
              'handle' => 
              array (
                'type' => 'string',
                'format' => 'handle',
              ),
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'email' => 
              array (
                'type' => 'string',
              ),
              'emailConfirmed' => 
              array (
                'type' => 'boolean',
              ),
              'emailAuthFactor' => 
              array (
                'type' => 'boolean',
              ),
              'didDoc' => 
              array (
                'type' => 'unknown',
              ),
              'active' => 
              array (
                'type' => 'boolean',
              ),
              'status' => 
              array (
                'type' => 'string',
                'description' => 'If active=false, this optional field indicates a possible reason for why the account is not active. If active=false and no status is supplied, then the host makes no claim for why the repository is no longer being hosted.',
                'knownValues' => 
                array (
                  0 => 'takendown',
                  1 => 'suspended',
                  2 => 'deactivated',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.listAppPasswords' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.listAppPasswords',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'List all App Passwords.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'passwords',
            ),
            'properties' => 
            array (
              'passwords' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.server.listAppPasswords#appPassword',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'AccountTakedown',
          ),
        ),
      ),
      'appPassword' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'name',
          1 => 'createdAt',
        ),
        'properties' => 
        array (
          'name' => 
          array (
            'type' => 'string',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'privileged' => 
          array (
            'type' => 'boolean',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.refreshSession' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.refreshSession',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Refresh an authentication session. Requires auth using the \'refreshJwt\' (not the \'accessJwt\').',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'accessJwt',
              1 => 'refreshJwt',
              2 => 'handle',
              3 => 'did',
            ),
            'properties' => 
            array (
              'accessJwt' => 
              array (
                'type' => 'string',
              ),
              'refreshJwt' => 
              array (
                'type' => 'string',
              ),
              'handle' => 
              array (
                'type' => 'string',
                'format' => 'handle',
              ),
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'didDoc' => 
              array (
                'type' => 'unknown',
              ),
              'active' => 
              array (
                'type' => 'boolean',
              ),
              'status' => 
              array (
                'type' => 'string',
                'description' => 'Hosting status of the account. If not specified, then assume \'active\'.',
                'knownValues' => 
                array (
                  0 => 'takendown',
                  1 => 'suspended',
                  2 => 'deactivated',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'AccountTakedown',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.requestAccountDelete' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.requestAccountDelete',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Initiate a user account deletion via email.',
      ),
    ),
  ),
  'com.atproto.server.requestEmailConfirmation' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.requestEmailConfirmation',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Request an email with a code to confirm ownership of email.',
      ),
    ),
  ),
  'com.atproto.server.requestEmailUpdate' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.requestEmailUpdate',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Request a token in order to update email.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'tokenRequired',
            ),
            'properties' => 
            array (
              'tokenRequired' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.requestPasswordReset' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.requestPasswordReset',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Initiate a user account password reset via email.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'email',
            ),
            'properties' => 
            array (
              'email' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.reserveSigningKey' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.reserveSigningKey',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Reserve a repo signing key, for use with account creation. Necessary so that a DID PLC update operation can be constructed during an account migraiton. Public and does not require auth; implemented by PDS. NOTE: this endpoint may change when full account migration is implemented.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
                'description' => 'The DID to reserve a key for.',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'signingKey',
            ),
            'properties' => 
            array (
              'signingKey' => 
              array (
                'type' => 'string',
                'description' => 'The public key for the reserved signing key, in did:key serialization.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.resetPassword' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.resetPassword',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Reset a user account password using a token.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'token',
              1 => 'password',
            ),
            'properties' => 
            array (
              'token' => 
              array (
                'type' => 'string',
              ),
              'password' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'ExpiredToken',
          ),
          1 => 
          array (
            'name' => 'InvalidToken',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.revokeAppPassword' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.revokeAppPassword',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Revoke an App Password by name.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'name',
            ),
            'properties' => 
            array (
              'name' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.server.updateEmail' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.server.updateEmail',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Update an account\'s email.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'email',
            ),
            'properties' => 
            array (
              'email' => 
              array (
                'type' => 'string',
              ),
              'emailAuthFactor' => 
              array (
                'type' => 'boolean',
              ),
              'token' => 
              array (
                'type' => 'string',
                'description' => 'Requires a token from com.atproto.sever.requestEmailUpdate if the account\'s email has been confirmed.',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'ExpiredToken',
          ),
          1 => 
          array (
            'name' => 'InvalidToken',
          ),
          2 => 
          array (
            'name' => 'TokenRequired',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.getBlob' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.getBlob',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a blob associated with a given account. Returns the full blob as originally uploaded. Does not require auth; implemented by PDS.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
            1 => 'cid',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The DID of the account.',
            ),
            'cid' => 
            array (
              'type' => 'string',
              'format' => 'cid',
              'description' => 'The CID of the blob to fetch',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => '*/*',
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'BlobNotFound',
          ),
          1 => 
          array (
            'name' => 'RepoNotFound',
          ),
          2 => 
          array (
            'name' => 'RepoTakendown',
          ),
          3 => 
          array (
            'name' => 'RepoSuspended',
          ),
          4 => 
          array (
            'name' => 'RepoDeactivated',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.getBlocks' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.getBlocks',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get data blocks from a given repo, by CID. For example, intermediate MST nodes, or records. Does not require auth; implemented by PDS.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
            1 => 'cids',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The DID of the repo.',
            ),
            'cids' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'cid',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/vnd.ipld.car',
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'BlockNotFound',
          ),
          1 => 
          array (
            'name' => 'RepoNotFound',
          ),
          2 => 
          array (
            'name' => 'RepoTakendown',
          ),
          3 => 
          array (
            'name' => 'RepoSuspended',
          ),
          4 => 
          array (
            'name' => 'RepoDeactivated',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.getCheckout' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.getCheckout',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'DEPRECATED - please use com.atproto.sync.getRepo instead',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The DID of the repo.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/vnd.ipld.car',
        ),
      ),
    ),
  ),
  'com.atproto.sync.getHead' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.getHead',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'DEPRECATED - please use com.atproto.sync.getLatestCommit instead',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The DID of the repo.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'root',
            ),
            'properties' => 
            array (
              'root' => 
              array (
                'type' => 'string',
                'format' => 'cid',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'HeadNotFound',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.getLatestCommit' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.getLatestCommit',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get the current commit CID & revision of the specified repo. Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The DID of the repo.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'cid',
              1 => 'rev',
            ),
            'properties' => 
            array (
              'cid' => 
              array (
                'type' => 'string',
                'format' => 'cid',
              ),
              'rev' => 
              array (
                'type' => 'string',
                'format' => 'tid',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'RepoNotFound',
          ),
          1 => 
          array (
            'name' => 'RepoTakendown',
          ),
          2 => 
          array (
            'name' => 'RepoSuspended',
          ),
          3 => 
          array (
            'name' => 'RepoDeactivated',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.getRecord' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.getRecord',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get data blocks needed to prove the existence or non-existence of record in the current version of repo. Does not require auth.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
            1 => 'collection',
            2 => 'rkey',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The DID of the repo.',
            ),
            'collection' => 
            array (
              'type' => 'string',
              'format' => 'nsid',
            ),
            'rkey' => 
            array (
              'type' => 'string',
              'description' => 'Record Key',
              'format' => 'record-key',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/vnd.ipld.car',
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'RecordNotFound',
          ),
          1 => 
          array (
            'name' => 'RepoNotFound',
          ),
          2 => 
          array (
            'name' => 'RepoTakendown',
          ),
          3 => 
          array (
            'name' => 'RepoSuspended',
          ),
          4 => 
          array (
            'name' => 'RepoDeactivated',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.getRepo' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.getRepo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Download a repository export as CAR file. Optionally only a \'diff\' since a previous revision. Does not require auth; implemented by PDS.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The DID of the repo.',
            ),
            'since' => 
            array (
              'type' => 'string',
              'format' => 'tid',
              'description' => 'The revision (\'rev\') of the repo to create a diff from.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/vnd.ipld.car',
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'RepoNotFound',
          ),
          1 => 
          array (
            'name' => 'RepoTakendown',
          ),
          2 => 
          array (
            'name' => 'RepoSuspended',
          ),
          3 => 
          array (
            'name' => 'RepoDeactivated',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.getRepoStatus' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.getRepoStatus',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get the hosting status for a repository, on this server. Expected to be implemented by PDS and Relay.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The DID of the repo.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
              1 => 'active',
            ),
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'active' => 
              array (
                'type' => 'boolean',
              ),
              'status' => 
              array (
                'type' => 'string',
                'description' => 'If active=false, this optional field indicates a possible reason for why the account is not active. If active=false and no status is supplied, then the host makes no claim for why the repository is no longer being hosted.',
                'knownValues' => 
                array (
                  0 => 'takendown',
                  1 => 'suspended',
                  2 => 'deleted',
                  3 => 'deactivated',
                  4 => 'desynchronized',
                  5 => 'throttled',
                ),
              ),
              'rev' => 
              array (
                'type' => 'string',
                'format' => 'tid',
                'description' => 'Optional field, the current rev of the repo, if active=true',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'RepoNotFound',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.listBlobs' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.listBlobs',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'List blob CIDs for an account, since some repo revision. Does not require auth; implemented by PDS.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'The DID of the repo.',
            ),
            'since' => 
            array (
              'type' => 'string',
              'format' => 'tid',
              'description' => 'Optional revision of the repo to list blobs since.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 1000,
              'default' => 500,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'cids',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'cids' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'format' => 'cid',
                ),
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'RepoNotFound',
          ),
          1 => 
          array (
            'name' => 'RepoTakendown',
          ),
          2 => 
          array (
            'name' => 'RepoSuspended',
          ),
          3 => 
          array (
            'name' => 'RepoDeactivated',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.listRepos' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.listRepos',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates all the DID, rev, and commit CID for all repos hosted by this service. Does not require auth; implemented by PDS and Relay.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 1000,
              'default' => 500,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'repos',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'repos' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.sync.listRepos#repo',
                ),
              ),
            ),
          ),
        ),
      ),
      'repo' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'head',
          2 => 'rev',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'head' => 
          array (
            'type' => 'string',
            'format' => 'cid',
            'description' => 'Current repo commit CID',
          ),
          'rev' => 
          array (
            'type' => 'string',
            'format' => 'tid',
          ),
          'active' => 
          array (
            'type' => 'boolean',
          ),
          'status' => 
          array (
            'type' => 'string',
            'description' => 'If active=false, this optional field indicates a possible reason for why the account is not active. If active=false and no status is supplied, then the host makes no claim for why the repository is no longer being hosted.',
            'knownValues' => 
            array (
              0 => 'takendown',
              1 => 'suspended',
              2 => 'deleted',
              3 => 'deactivated',
              4 => 'desynchronized',
              5 => 'throttled',
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.listReposByCollection' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.listReposByCollection',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Enumerates all the DIDs which have records with the given collection NSID.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'collection',
          ),
          'properties' => 
          array (
            'collection' => 
            array (
              'type' => 'string',
              'format' => 'nsid',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'description' => 'Maximum size of response set. Recommend setting a large maximum (1000+) when enumerating large DID lists.',
              'minimum' => 1,
              'maximum' => 2000,
              'default' => 500,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'repos',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'repos' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.sync.listReposByCollection#repo',
                ),
              ),
            ),
          ),
        ),
      ),
      'repo' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.notifyOfUpdate' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.notifyOfUpdate',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Notify a crawling service of a recent update, and that crawling should resume. Intended use is after a gap between repo stream events caused the crawling service to disconnect. Does not require auth; implemented by Relay. DEPRECATED: just use com.atproto.sync.requestCrawl',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'hostname',
            ),
            'properties' => 
            array (
              'hostname' => 
              array (
                'type' => 'string',
                'description' => 'Hostname of the current service (usually a PDS) that is notifying of update.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.requestCrawl' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.requestCrawl',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Request a service to persistently crawl hosted repos. Expected use is new PDS instances declaring their existence to Relays. Does not require auth.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'hostname',
            ),
            'properties' => 
            array (
              'hostname' => 
              array (
                'type' => 'string',
                'description' => 'Hostname of the current service (eg, PDS) that is requesting to be crawled.',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.sync.subscribeRepos' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.sync.subscribeRepos',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'subscription',
        'description' => 'Repository event stream, aka Firehose endpoint. Outputs repo commits with diff data, and identity update events, for all repositories on the current server. See the atproto specifications for details around stream sequencing, repo versioning, CAR diff format, and more. Public and does not require auth; implemented by PDS and Relay.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'cursor' => 
            array (
              'type' => 'integer',
              'description' => 'The last known event seq number to backfill from.',
            ),
          ),
        ),
        'message' => 
        array (
          'schema' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:com.atproto.sync.subscribeRepos#commit',
              1 => 'lex:com.atproto.sync.subscribeRepos#sync',
              2 => 'lex:com.atproto.sync.subscribeRepos#identity',
              3 => 'lex:com.atproto.sync.subscribeRepos#account',
              4 => 'lex:com.atproto.sync.subscribeRepos#handle',
              5 => 'lex:com.atproto.sync.subscribeRepos#migrate',
              6 => 'lex:com.atproto.sync.subscribeRepos#tombstone',
              7 => 'lex:com.atproto.sync.subscribeRepos#info',
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'FutureCursor',
          ),
          1 => 
          array (
            'name' => 'ConsumerTooSlow',
            'description' => 'If the consumer of the stream can not keep up with events, and a backlog gets too large, the server will drop the connection.',
          ),
        ),
      ),
      'commit' => 
      array (
        'type' => 'object',
        'description' => 'Represents an update of repository state. Note that empty commits are allowed, which include no repo data changes, but an update to rev and signature.',
        'required' => 
        array (
          0 => 'seq',
          1 => 'rebase',
          2 => 'tooBig',
          3 => 'repo',
          4 => 'commit',
          5 => 'rev',
          6 => 'since',
          7 => 'blocks',
          8 => 'ops',
          9 => 'blobs',
          10 => 'time',
        ),
        'nullable' => 
        array (
          0 => 'since',
        ),
        'properties' => 
        array (
          'seq' => 
          array (
            'type' => 'integer',
            'description' => 'The stream sequence number of this message.',
          ),
          'rebase' => 
          array (
            'type' => 'boolean',
            'description' => 'DEPRECATED -- unused',
          ),
          'tooBig' => 
          array (
            'type' => 'boolean',
            'description' => 'DEPRECATED -- replaced by #sync event and data limits. Indicates that this commit contained too many ops, or data size was too large. Consumers will need to make a separate request to get missing data.',
          ),
          'repo' => 
          array (
            'type' => 'string',
            'format' => 'did',
            'description' => 'The repo this event comes from. Note that all other message types name this field \'did\'.',
          ),
          'commit' => 
          array (
            'type' => 'cid-link',
            'description' => 'Repo commit object CID.',
          ),
          'rev' => 
          array (
            'type' => 'string',
            'format' => 'tid',
            'description' => 'The rev of the emitted commit. Note that this information is also in the commit object included in blocks, unless this is a tooBig event.',
          ),
          'since' => 
          array (
            'type' => 'string',
            'format' => 'tid',
            'description' => 'The rev of the last emitted commit from this repo (if any).',
          ),
          'blocks' => 
          array (
            'type' => 'bytes',
            'description' => 'CAR file containing relevant blocks, as a diff since the previous repo state. The commit must be included as a block, and the commit block CID must be the first entry in the CAR header \'roots\' list.',
            'maxLength' => 2000000,
          ),
          'ops' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.sync.subscribeRepos#repoOp',
              'description' => 'List of repo mutation operations in this commit (eg, records created, updated, or deleted).',
            ),
            'maxLength' => 200,
          ),
          'blobs' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'cid-link',
              'description' => 'DEPRECATED -- will soon always be empty. List of new blobs (by CID) referenced by records in this commit.',
            ),
          ),
          'prevData' => 
          array (
            'type' => 'cid-link',
            'description' => 'The root CID of the MST tree for the previous commit from this repo (indicated by the \'since\' revision field in this message). Corresponds to the \'data\' field in the repo commit object. NOTE: this field is effectively required for the \'inductive\' version of firehose.',
          ),
          'time' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
            'description' => 'Timestamp of when this message was originally broadcast.',
          ),
        ),
      ),
      'sync' => 
      array (
        'type' => 'object',
        'description' => 'Updates the repo to a new state, without necessarily including that state on the firehose. Used to recover from broken commit streams, data loss incidents, or in situations where upstream host does not know recent state of the repository.',
        'required' => 
        array (
          0 => 'seq',
          1 => 'did',
          2 => 'blocks',
          3 => 'rev',
          4 => 'time',
        ),
        'properties' => 
        array (
          'seq' => 
          array (
            'type' => 'integer',
            'description' => 'The stream sequence number of this message.',
          ),
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
            'description' => 'The account this repo event corresponds to. Must match that in the commit object.',
          ),
          'blocks' => 
          array (
            'type' => 'bytes',
            'description' => 'CAR file containing the commit, as a block. The CAR header must include the commit block CID as the first \'root\'.',
            'maxLength' => 10000,
          ),
          'rev' => 
          array (
            'type' => 'string',
            'description' => 'The rev of the commit. This value must match that in the commit object.',
          ),
          'time' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
            'description' => 'Timestamp of when this message was originally broadcast.',
          ),
        ),
      ),
      'identity' => 
      array (
        'type' => 'object',
        'description' => 'Represents a change to an account\'s identity. Could be an updated handle, signing key, or pds hosting endpoint. Serves as a prod to all downstream services to refresh their identity cache.',
        'required' => 
        array (
          0 => 'seq',
          1 => 'did',
          2 => 'time',
        ),
        'properties' => 
        array (
          'seq' => 
          array (
            'type' => 'integer',
          ),
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'time' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
            'description' => 'The current handle for the account, or \'handle.invalid\' if validation fails. This field is optional, might have been validated or passed-through from an upstream source. Semantics and behaviors for PDS vs Relay may evolve in the future; see atproto specs for more details.',
          ),
        ),
      ),
      'account' => 
      array (
        'type' => 'object',
        'description' => 'Represents a change to an account\'s status on a host (eg, PDS or Relay). The semantics of this event are that the status is at the host which emitted the event, not necessarily that at the currently active PDS. Eg, a Relay takedown would emit a takedown with active=false, even if the PDS is still active.',
        'required' => 
        array (
          0 => 'seq',
          1 => 'did',
          2 => 'time',
          3 => 'active',
        ),
        'properties' => 
        array (
          'seq' => 
          array (
            'type' => 'integer',
          ),
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'time' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'active' => 
          array (
            'type' => 'boolean',
            'description' => 'Indicates that the account has a repository which can be fetched from the host that emitted this event.',
          ),
          'status' => 
          array (
            'type' => 'string',
            'description' => 'If active=false, this optional field indicates a reason for why the account is not active.',
            'knownValues' => 
            array (
              0 => 'takendown',
              1 => 'suspended',
              2 => 'deleted',
              3 => 'deactivated',
              4 => 'desynchronized',
              5 => 'throttled',
            ),
          ),
        ),
      ),
      'handle' => 
      array (
        'type' => 'object',
        'description' => 'DEPRECATED -- Use #identity event instead',
        'required' => 
        array (
          0 => 'seq',
          1 => 'did',
          2 => 'handle',
          3 => 'time',
        ),
        'properties' => 
        array (
          'seq' => 
          array (
            'type' => 'integer',
          ),
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
          ),
          'time' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'migrate' => 
      array (
        'type' => 'object',
        'description' => 'DEPRECATED -- Use #account event instead',
        'required' => 
        array (
          0 => 'seq',
          1 => 'did',
          2 => 'migrateTo',
          3 => 'time',
        ),
        'nullable' => 
        array (
          0 => 'migrateTo',
        ),
        'properties' => 
        array (
          'seq' => 
          array (
            'type' => 'integer',
          ),
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'migrateTo' => 
          array (
            'type' => 'string',
          ),
          'time' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'tombstone' => 
      array (
        'type' => 'object',
        'description' => 'DEPRECATED -- Use #account event instead',
        'required' => 
        array (
          0 => 'seq',
          1 => 'did',
          2 => 'time',
        ),
        'properties' => 
        array (
          'seq' => 
          array (
            'type' => 'integer',
          ),
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'time' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'info' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'name',
        ),
        'properties' => 
        array (
          'name' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'OutdatedCursor',
            ),
          ),
          'message' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'repoOp' => 
      array (
        'type' => 'object',
        'description' => 'A repo operation, ie a mutation of a single record.',
        'required' => 
        array (
          0 => 'action',
          1 => 'path',
          2 => 'cid',
        ),
        'nullable' => 
        array (
          0 => 'cid',
        ),
        'properties' => 
        array (
          'action' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'create',
              1 => 'update',
              2 => 'delete',
            ),
          ),
          'path' => 
          array (
            'type' => 'string',
          ),
          'cid' => 
          array (
            'type' => 'cid-link',
            'description' => 'For creates and updates, the new record CID. For deletions, null.',
          ),
          'prev' => 
          array (
            'type' => 'cid-link',
            'description' => 'For updates and deletes, the previous record CID (required for inductive firehose). For creations, field should not be defined.',
          ),
        ),
      ),
    ),
  ),
  'com.atproto.temp.addReservedHandle' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.temp.addReservedHandle',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Add a handle to the set of reserved handles.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'handle',
            ),
            'properties' => 
            array (
              'handle' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.temp.checkSignupQueue' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.temp.checkSignupQueue',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Check accounts location in signup queue.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'activated',
            ),
            'properties' => 
            array (
              'activated' => 
              array (
                'type' => 'boolean',
              ),
              'placeInQueue' => 
              array (
                'type' => 'integer',
              ),
              'estimatedTimeMs' => 
              array (
                'type' => 'integer',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.temp.fetchLabels' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.temp.fetchLabels',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'DEPRECATED: use queryLabels or subscribeLabels instead -- Fetch all labels from a labeler created after a certain date.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'since' => 
            array (
              'type' => 'integer',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 250,
              'default' => 50,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'labels',
            ),
            'properties' => 
            array (
              'labels' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.label.defs#label',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'com.atproto.temp.requestPhoneVerification' => 
  array (
    'lexicon' => 1,
    'id' => 'com.atproto.temp.requestPhoneVerification',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Request a verification code to be sent to the supplied phone number',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'phoneNumber',
            ),
            'properties' => 
            array (
              'phoneNumber' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.communication.createTemplate' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.communication.createTemplate',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Administrative action to create a new, re-usable communication (email for now) template.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'subject',
              1 => 'contentMarkdown',
              2 => 'name',
            ),
            'properties' => 
            array (
              'name' => 
              array (
                'type' => 'string',
                'description' => 'Name of the template.',
              ),
              'contentMarkdown' => 
              array (
                'type' => 'string',
                'description' => 'Content of the template, markdown supported, can contain variable placeholders.',
              ),
              'subject' => 
              array (
                'type' => 'string',
                'description' => 'Subject of the message, used in emails.',
              ),
              'lang' => 
              array (
                'type' => 'string',
                'format' => 'language',
                'description' => 'Message language.',
              ),
              'createdBy' => 
              array (
                'type' => 'string',
                'format' => 'did',
                'description' => 'DID of the user who is creating the template.',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.communication.defs#templateView',
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'DuplicateTemplateName',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.communication.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.communication.defs',
    'defs' => 
    array (
      'templateView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'id',
          1 => 'name',
          2 => 'contentMarkdown',
          3 => 'disabled',
          4 => 'lastUpdatedBy',
          5 => 'createdAt',
          6 => 'updatedAt',
        ),
        'properties' => 
        array (
          'id' => 
          array (
            'type' => 'string',
          ),
          'name' => 
          array (
            'type' => 'string',
            'description' => 'Name of the template.',
          ),
          'subject' => 
          array (
            'type' => 'string',
            'description' => 'Content of the template, can contain markdown and variable placeholders.',
          ),
          'contentMarkdown' => 
          array (
            'type' => 'string',
            'description' => 'Subject of the message, used in emails.',
          ),
          'disabled' => 
          array (
            'type' => 'boolean',
          ),
          'lang' => 
          array (
            'type' => 'string',
            'format' => 'language',
            'description' => 'Message language.',
          ),
          'lastUpdatedBy' => 
          array (
            'type' => 'string',
            'format' => 'did',
            'description' => 'DID of the user who last updated the template.',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'updatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.communication.deleteTemplate' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.communication.deleteTemplate',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Delete a communication template.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'id',
            ),
            'properties' => 
            array (
              'id' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.communication.listTemplates' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.communication.listTemplates',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get list of all communication templates.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'communicationTemplates',
            ),
            'properties' => 
            array (
              'communicationTemplates' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:tools.ozone.communication.defs#templateView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.communication.updateTemplate' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.communication.updateTemplate',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Administrative action to update an existing communication template. Allows passing partial fields to patch specific fields only.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'id',
            ),
            'properties' => 
            array (
              'id' => 
              array (
                'type' => 'string',
                'description' => 'ID of the template to be updated.',
              ),
              'name' => 
              array (
                'type' => 'string',
                'description' => 'Name of the template.',
              ),
              'lang' => 
              array (
                'type' => 'string',
                'format' => 'language',
                'description' => 'Message language.',
              ),
              'contentMarkdown' => 
              array (
                'type' => 'string',
                'description' => 'Content of the template, markdown supported, can contain variable placeholders.',
              ),
              'subject' => 
              array (
                'type' => 'string',
                'description' => 'Subject of the message, used in emails.',
              ),
              'updatedBy' => 
              array (
                'type' => 'string',
                'format' => 'did',
                'description' => 'DID of the user who is updating the template.',
              ),
              'disabled' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.communication.defs#templateView',
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'DuplicateTemplateName',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.defs',
    'defs' => 
    array (
      'modEventView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'id',
          1 => 'event',
          2 => 'subject',
          3 => 'subjectBlobCids',
          4 => 'createdBy',
          5 => 'createdAt',
        ),
        'properties' => 
        array (
          'id' => 
          array (
            'type' => 'integer',
          ),
          'event' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:tools.ozone.moderation.defs#modEventTakedown',
              1 => 'lex:tools.ozone.moderation.defs#modEventReverseTakedown',
              2 => 'lex:tools.ozone.moderation.defs#modEventComment',
              3 => 'lex:tools.ozone.moderation.defs#modEventReport',
              4 => 'lex:tools.ozone.moderation.defs#modEventLabel',
              5 => 'lex:tools.ozone.moderation.defs#modEventAcknowledge',
              6 => 'lex:tools.ozone.moderation.defs#modEventEscalate',
              7 => 'lex:tools.ozone.moderation.defs#modEventMute',
              8 => 'lex:tools.ozone.moderation.defs#modEventUnmute',
              9 => 'lex:tools.ozone.moderation.defs#modEventMuteReporter',
              10 => 'lex:tools.ozone.moderation.defs#modEventUnmuteReporter',
              11 => 'lex:tools.ozone.moderation.defs#modEventEmail',
              12 => 'lex:tools.ozone.moderation.defs#modEventResolveAppeal',
              13 => 'lex:tools.ozone.moderation.defs#modEventDivert',
              14 => 'lex:tools.ozone.moderation.defs#modEventTag',
              15 => 'lex:tools.ozone.moderation.defs#accountEvent',
              16 => 'lex:tools.ozone.moderation.defs#identityEvent',
              17 => 'lex:tools.ozone.moderation.defs#recordEvent',
              18 => 'lex:tools.ozone.moderation.defs#modEventPriorityScore',
            ),
          ),
          'subject' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:com.atproto.admin.defs#repoRef',
              1 => 'lex:com.atproto.repo.strongRef',
              2 => 'lex:chat.bsky.convo.defs#messageRef',
            ),
          ),
          'subjectBlobCids' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'createdBy' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'creatorHandle' => 
          array (
            'type' => 'string',
          ),
          'subjectHandle' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'modEventViewDetail' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'id',
          1 => 'event',
          2 => 'subject',
          3 => 'subjectBlobs',
          4 => 'createdBy',
          5 => 'createdAt',
        ),
        'properties' => 
        array (
          'id' => 
          array (
            'type' => 'integer',
          ),
          'event' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:tools.ozone.moderation.defs#modEventTakedown',
              1 => 'lex:tools.ozone.moderation.defs#modEventReverseTakedown',
              2 => 'lex:tools.ozone.moderation.defs#modEventComment',
              3 => 'lex:tools.ozone.moderation.defs#modEventReport',
              4 => 'lex:tools.ozone.moderation.defs#modEventLabel',
              5 => 'lex:tools.ozone.moderation.defs#modEventAcknowledge',
              6 => 'lex:tools.ozone.moderation.defs#modEventEscalate',
              7 => 'lex:tools.ozone.moderation.defs#modEventMute',
              8 => 'lex:tools.ozone.moderation.defs#modEventUnmute',
              9 => 'lex:tools.ozone.moderation.defs#modEventMuteReporter',
              10 => 'lex:tools.ozone.moderation.defs#modEventUnmuteReporter',
              11 => 'lex:tools.ozone.moderation.defs#modEventEmail',
              12 => 'lex:tools.ozone.moderation.defs#modEventResolveAppeal',
              13 => 'lex:tools.ozone.moderation.defs#modEventDivert',
              14 => 'lex:tools.ozone.moderation.defs#modEventTag',
              15 => 'lex:tools.ozone.moderation.defs#accountEvent',
              16 => 'lex:tools.ozone.moderation.defs#identityEvent',
              17 => 'lex:tools.ozone.moderation.defs#recordEvent',
              18 => 'lex:tools.ozone.moderation.defs#modEventPriorityScore',
            ),
          ),
          'subject' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:tools.ozone.moderation.defs#repoView',
              1 => 'lex:tools.ozone.moderation.defs#repoViewNotFound',
              2 => 'lex:tools.ozone.moderation.defs#recordView',
              3 => 'lex:tools.ozone.moderation.defs#recordViewNotFound',
            ),
          ),
          'subjectBlobs' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:tools.ozone.moderation.defs#blobView',
            ),
          ),
          'createdBy' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'subjectStatusView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'id',
          1 => 'subject',
          2 => 'createdAt',
          3 => 'updatedAt',
          4 => 'reviewState',
        ),
        'properties' => 
        array (
          'id' => 
          array (
            'type' => 'integer',
          ),
          'subject' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:com.atproto.admin.defs#repoRef',
              1 => 'lex:com.atproto.repo.strongRef',
            ),
          ),
          'hosting' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:tools.ozone.moderation.defs#accountHosting',
              1 => 'lex:tools.ozone.moderation.defs#recordHosting',
            ),
          ),
          'subjectBlobCids' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'format' => 'cid',
            ),
          ),
          'subjectRepoHandle' => 
          array (
            'type' => 'string',
          ),
          'updatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
            'description' => 'Timestamp referencing when the last update was made to the moderation status of the subject',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
            'description' => 'Timestamp referencing the first moderation status impacting event was emitted on the subject',
          ),
          'reviewState' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#subjectReviewState',
          ),
          'comment' => 
          array (
            'type' => 'string',
            'description' => 'Sticky comment on the subject.',
          ),
          'priorityScore' => 
          array (
            'type' => 'integer',
            'description' => 'Numeric value representing the level of priority. Higher score means higher priority.',
            'minimum' => 0,
            'maximum' => 100,
          ),
          'muteUntil' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'muteReportingUntil' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'lastReviewedBy' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'lastReviewedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'lastReportedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'lastAppealedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
            'description' => 'Timestamp referencing when the author of the subject appealed a moderation action',
          ),
          'takendown' => 
          array (
            'type' => 'boolean',
          ),
          'appealed' => 
          array (
            'type' => 'boolean',
            'description' => 'True indicates that the a previously taken moderator action was appealed against, by the author of the content. False indicates last appeal was resolved by moderators.',
          ),
          'suspendUntil' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'tags' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'accountStats' => 
          array (
            'description' => 'Statistics related to the account subject',
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#accountStats',
          ),
          'recordsStats' => 
          array (
            'description' => 'Statistics related to the record subjects authored by the subject\'s account',
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#recordsStats',
          ),
        ),
      ),
      'accountStats' => 
      array (
        'description' => 'Statistics about a particular account subject',
        'type' => 'object',
        'properties' => 
        array (
          'reportCount' => 
          array (
            'description' => 'Total number of reports on the account',
            'type' => 'integer',
          ),
          'appealCount' => 
          array (
            'description' => 'Total number of appeals against a moderation action on the account',
            'type' => 'integer',
          ),
          'suspendCount' => 
          array (
            'description' => 'Number of times the account was suspended',
            'type' => 'integer',
          ),
          'escalateCount' => 
          array (
            'description' => 'Number of times the account was escalated',
            'type' => 'integer',
          ),
          'takedownCount' => 
          array (
            'description' => 'Number of times the account was taken down',
            'type' => 'integer',
          ),
        ),
      ),
      'recordsStats' => 
      array (
        'description' => 'Statistics about a set of record subject items',
        'type' => 'object',
        'properties' => 
        array (
          'totalReports' => 
          array (
            'description' => 'Cumulative sum of the number of reports on the items in the set',
            'type' => 'integer',
          ),
          'reportedCount' => 
          array (
            'description' => 'Number of items that were reported at least once',
            'type' => 'integer',
          ),
          'escalatedCount' => 
          array (
            'description' => 'Number of items that were escalated at least once',
            'type' => 'integer',
          ),
          'appealedCount' => 
          array (
            'description' => 'Number of items that were appealed at least once',
            'type' => 'integer',
          ),
          'subjectCount' => 
          array (
            'description' => 'Total number of item in the set',
            'type' => 'integer',
          ),
          'pendingCount' => 
          array (
            'description' => 'Number of item currently in "reviewOpen" or "reviewEscalated" state',
            'type' => 'integer',
          ),
          'processedCount' => 
          array (
            'description' => 'Number of item currently in "reviewNone" or "reviewClosed" state',
            'type' => 'integer',
          ),
          'takendownCount' => 
          array (
            'description' => 'Number of item currently taken down',
            'type' => 'integer',
          ),
        ),
      ),
      'subjectReviewState' => 
      array (
        'type' => 'string',
        'knownValues' => 
        array (
          0 => 'lex:tools.ozone.moderation.defs#reviewOpen',
          1 => 'lex:tools.ozone.moderation.defs#reviewEscalated',
          2 => 'lex:tools.ozone.moderation.defs#reviewClosed',
          3 => 'lex:tools.ozone.moderation.defs#reviewNone',
        ),
      ),
      'reviewOpen' => 
      array (
        'type' => 'token',
        'description' => 'Moderator review status of a subject: Open. Indicates that the subject needs to be reviewed by a moderator',
      ),
      'reviewEscalated' => 
      array (
        'type' => 'token',
        'description' => 'Moderator review status of a subject: Escalated. Indicates that the subject was escalated for review by a moderator',
      ),
      'reviewClosed' => 
      array (
        'type' => 'token',
        'description' => 'Moderator review status of a subject: Closed. Indicates that the subject was already reviewed and resolved by a moderator',
      ),
      'reviewNone' => 
      array (
        'type' => 'token',
        'description' => 'Moderator review status of a subject: Unnecessary. Indicates that the subject does not need a review at the moment but there is probably some moderation related metadata available for it',
      ),
      'modEventTakedown' => 
      array (
        'type' => 'object',
        'description' => 'Take down a subject permanently or temporarily',
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'durationInHours' => 
          array (
            'type' => 'integer',
            'description' => 'Indicates how long the takedown should be in effect before automatically expiring.',
          ),
          'acknowledgeAccountSubjects' => 
          array (
            'type' => 'boolean',
            'description' => 'If true, all other reports on content authored by this account will be resolved (acknowledged).',
          ),
          'policies' => 
          array (
            'type' => 'array',
            'maxLength' => 5,
            'items' => 
            array (
              'type' => 'string',
            ),
            'description' => 'Names/Keywords of the policies that drove the decision.',
          ),
        ),
      ),
      'modEventReverseTakedown' => 
      array (
        'type' => 'object',
        'description' => 'Revert take down action on a subject',
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
            'description' => 'Describe reasoning behind the reversal.',
          ),
        ),
      ),
      'modEventResolveAppeal' => 
      array (
        'type' => 'object',
        'description' => 'Resolve appeal on a subject',
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
            'description' => 'Describe resolution.',
          ),
        ),
      ),
      'modEventComment' => 
      array (
        'type' => 'object',
        'description' => 'Add a comment to a subject. An empty comment will clear any previously set sticky comment.',
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'sticky' => 
          array (
            'type' => 'boolean',
            'description' => 'Make the comment persistent on the subject',
          ),
        ),
      ),
      'modEventReport' => 
      array (
        'type' => 'object',
        'description' => 'Report a subject',
        'required' => 
        array (
          0 => 'reportType',
        ),
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'isReporterMuted' => 
          array (
            'type' => 'boolean',
            'description' => 'Set to true if the reporter was muted from reporting at the time of the event. These reports won\'t impact the reviewState of the subject.',
          ),
          'reportType' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.moderation.defs#reasonType',
          ),
        ),
      ),
      'modEventLabel' => 
      array (
        'type' => 'object',
        'description' => 'Apply/Negate labels on a subject',
        'required' => 
        array (
          0 => 'createLabelVals',
          1 => 'negateLabelVals',
        ),
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'createLabelVals' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'negateLabelVals' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'durationInHours' => 
          array (
            'type' => 'integer',
            'description' => 'Indicates how long the label will remain on the subject. Only applies on labels that are being added.',
          ),
        ),
      ),
      'modEventPriorityScore' => 
      array (
        'type' => 'object',
        'description' => 'Set priority score of the subject. Higher score means higher priority.',
        'required' => 
        array (
          0 => 'score',
        ),
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'score' => 
          array (
            'type' => 'integer',
            'minimum' => 0,
            'maximum' => 100,
          ),
        ),
      ),
      'modEventAcknowledge' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'acknowledgeAccountSubjects' => 
          array (
            'type' => 'boolean',
            'description' => 'If true, all other reports on content authored by this account will be resolved (acknowledged).',
          ),
        ),
      ),
      'modEventEscalate' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'modEventMute' => 
      array (
        'type' => 'object',
        'description' => 'Mute incoming reports on a subject',
        'required' => 
        array (
          0 => 'durationInHours',
        ),
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'durationInHours' => 
          array (
            'type' => 'integer',
            'description' => 'Indicates how long the subject should remain muted.',
          ),
        ),
      ),
      'modEventUnmute' => 
      array (
        'type' => 'object',
        'description' => 'Unmute action on a subject',
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
            'description' => 'Describe reasoning behind the reversal.',
          ),
        ),
      ),
      'modEventMuteReporter' => 
      array (
        'type' => 'object',
        'description' => 'Mute incoming reports from an account',
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'durationInHours' => 
          array (
            'type' => 'integer',
            'description' => 'Indicates how long the account should remain muted. Falsy value here means a permanent mute.',
          ),
        ),
      ),
      'modEventUnmuteReporter' => 
      array (
        'type' => 'object',
        'description' => 'Unmute incoming reports from an account',
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
            'description' => 'Describe reasoning behind the reversal.',
          ),
        ),
      ),
      'modEventEmail' => 
      array (
        'type' => 'object',
        'description' => 'Keep a log of outgoing email to a user',
        'required' => 
        array (
          0 => 'subjectLine',
        ),
        'properties' => 
        array (
          'subjectLine' => 
          array (
            'type' => 'string',
            'description' => 'The subject line of the email sent to the user.',
          ),
          'content' => 
          array (
            'type' => 'string',
            'description' => 'The content of the email sent to the user.',
          ),
          'comment' => 
          array (
            'type' => 'string',
            'description' => 'Additional comment about the outgoing comm.',
          ),
        ),
      ),
      'modEventDivert' => 
      array (
        'type' => 'object',
        'description' => 'Divert a record\'s blobs to a 3rd party service for further scanning/tagging',
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'modEventTag' => 
      array (
        'type' => 'object',
        'description' => 'Add/Remove a tag on a subject',
        'required' => 
        array (
          0 => 'add',
          1 => 'remove',
        ),
        'properties' => 
        array (
          'add' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'description' => 'Tags to be added to the subject. If already exists, won\'t be duplicated.',
          ),
          'remove' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'description' => 'Tags to be removed to the subject. Ignores a tag If it doesn\'t exist, won\'t be duplicated.',
          ),
          'comment' => 
          array (
            'type' => 'string',
            'description' => 'Additional comment about added/removed tags.',
          ),
        ),
      ),
      'accountEvent' => 
      array (
        'type' => 'object',
        'description' => 'Logs account status related events on a repo subject. Normally captured by automod from the firehose and emitted to ozone for historical tracking.',
        'required' => 
        array (
          0 => 'timestamp',
          1 => 'active',
        ),
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'active' => 
          array (
            'type' => 'boolean',
            'description' => 'Indicates that the account has a repository which can be fetched from the host that emitted this event.',
          ),
          'status' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'unknown',
              1 => 'deactivated',
              2 => 'deleted',
              3 => 'takendown',
              4 => 'suspended',
              5 => 'tombstoned',
            ),
          ),
          'timestamp' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'identityEvent' => 
      array (
        'type' => 'object',
        'description' => 'Logs identity related events on a repo subject. Normally captured by automod from the firehose and emitted to ozone for historical tracking.',
        'required' => 
        array (
          0 => 'timestamp',
        ),
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
          ),
          'pdsHost' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
          'tombstone' => 
          array (
            'type' => 'boolean',
          ),
          'timestamp' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'recordEvent' => 
      array (
        'type' => 'object',
        'description' => 'Logs lifecycle event on a record subject. Normally captured by automod from the firehose and emitted to ozone for historical tracking.',
        'required' => 
        array (
          0 => 'timestamp',
          1 => 'op',
        ),
        'properties' => 
        array (
          'comment' => 
          array (
            'type' => 'string',
          ),
          'op' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'create',
              1 => 'update',
              2 => 'delete',
            ),
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'timestamp' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'repoView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'handle',
          2 => 'relatedRecords',
          3 => 'indexedAt',
          4 => 'moderation',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
          ),
          'email' => 
          array (
            'type' => 'string',
          ),
          'relatedRecords' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'unknown',
            ),
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'moderation' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#moderation',
          ),
          'invitedBy' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.server.defs#inviteCode',
          ),
          'invitesDisabled' => 
          array (
            'type' => 'boolean',
          ),
          'inviteNote' => 
          array (
            'type' => 'string',
          ),
          'deactivatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'threatSignatures' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.admin.defs#threatSignature',
            ),
          ),
        ),
      ),
      'repoViewDetail' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'handle',
          2 => 'relatedRecords',
          3 => 'indexedAt',
          4 => 'moderation',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'handle' => 
          array (
            'type' => 'string',
            'format' => 'handle',
          ),
          'email' => 
          array (
            'type' => 'string',
          ),
          'relatedRecords' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'unknown',
            ),
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'moderation' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#moderationDetail',
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'invitedBy' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.server.defs#inviteCode',
          ),
          'invites' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.server.defs#inviteCode',
            ),
          ),
          'invitesDisabled' => 
          array (
            'type' => 'boolean',
          ),
          'inviteNote' => 
          array (
            'type' => 'string',
          ),
          'emailConfirmedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'deactivatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'threatSignatures' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.admin.defs#threatSignature',
            ),
          ),
        ),
      ),
      'repoViewNotFound' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
        ),
      ),
      'recordView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'value',
          3 => 'blobCids',
          4 => 'indexedAt',
          5 => 'moderation',
          6 => 'repo',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'value' => 
          array (
            'type' => 'unknown',
          ),
          'blobCids' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'format' => 'cid',
            ),
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'moderation' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#moderation',
          ),
          'repo' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#repoView',
          ),
        ),
      ),
      'recordViewDetail' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
          1 => 'cid',
          2 => 'value',
          3 => 'blobs',
          4 => 'indexedAt',
          5 => 'moderation',
          6 => 'repo',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'value' => 
          array (
            'type' => 'unknown',
          ),
          'blobs' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:tools.ozone.moderation.defs#blobView',
            ),
          ),
          'labels' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:com.atproto.label.defs#label',
            ),
          ),
          'indexedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'moderation' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#moderationDetail',
          ),
          'repo' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#repoView',
          ),
        ),
      ),
      'recordViewNotFound' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'uri',
        ),
        'properties' => 
        array (
          'uri' => 
          array (
            'type' => 'string',
            'format' => 'at-uri',
          ),
        ),
      ),
      'moderation' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'subjectStatus' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#subjectStatusView',
          ),
        ),
      ),
      'moderationDetail' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'subjectStatus' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#subjectStatusView',
          ),
        ),
      ),
      'blobView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'cid',
          1 => 'mimeType',
          2 => 'size',
          3 => 'createdAt',
        ),
        'properties' => 
        array (
          'cid' => 
          array (
            'type' => 'string',
            'format' => 'cid',
          ),
          'mimeType' => 
          array (
            'type' => 'string',
          ),
          'size' => 
          array (
            'type' => 'integer',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'details' => 
          array (
            'type' => 'union',
            'refs' => 
            array (
              0 => 'lex:tools.ozone.moderation.defs#imageDetails',
              1 => 'lex:tools.ozone.moderation.defs#videoDetails',
            ),
          ),
          'moderation' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#moderation',
          ),
        ),
      ),
      'imageDetails' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'width',
          1 => 'height',
        ),
        'properties' => 
        array (
          'width' => 
          array (
            'type' => 'integer',
          ),
          'height' => 
          array (
            'type' => 'integer',
          ),
        ),
      ),
      'videoDetails' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'width',
          1 => 'height',
          2 => 'length',
        ),
        'properties' => 
        array (
          'width' => 
          array (
            'type' => 'integer',
          ),
          'height' => 
          array (
            'type' => 'integer',
          ),
          'length' => 
          array (
            'type' => 'integer',
          ),
        ),
      ),
      'accountHosting' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'status',
        ),
        'properties' => 
        array (
          'status' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'takendown',
              1 => 'suspended',
              2 => 'deleted',
              3 => 'deactivated',
              4 => 'unknown',
            ),
          ),
          'updatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'deletedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'deactivatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'reactivatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'recordHosting' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'status',
        ),
        'properties' => 
        array (
          'status' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'deleted',
              1 => 'unknown',
            ),
          ),
          'updatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'deletedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
      'reporterStats' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'accountReportCount',
          2 => 'recordReportCount',
          3 => 'reportedAccountCount',
          4 => 'reportedRecordCount',
          5 => 'takendownAccountCount',
          6 => 'takendownRecordCount',
          7 => 'labeledAccountCount',
          8 => 'labeledRecordCount',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'accountReportCount' => 
          array (
            'type' => 'integer',
            'description' => 'The total number of reports made by the user on accounts.',
          ),
          'recordReportCount' => 
          array (
            'type' => 'integer',
            'description' => 'The total number of reports made by the user on records.',
          ),
          'reportedAccountCount' => 
          array (
            'type' => 'integer',
            'description' => 'The total number of accounts reported by the user.',
          ),
          'reportedRecordCount' => 
          array (
            'type' => 'integer',
            'description' => 'The total number of records reported by the user.',
          ),
          'takendownAccountCount' => 
          array (
            'type' => 'integer',
            'description' => 'The total number of accounts taken down as a result of the user\'s reports.',
          ),
          'takendownRecordCount' => 
          array (
            'type' => 'integer',
            'description' => 'The total number of records taken down as a result of the user\'s reports.',
          ),
          'labeledAccountCount' => 
          array (
            'type' => 'integer',
            'description' => 'The total number of accounts labeled as a result of the user\'s reports.',
          ),
          'labeledRecordCount' => 
          array (
            'type' => 'integer',
            'description' => 'The total number of records labeled as a result of the user\'s reports.',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.emitEvent' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.emitEvent',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Take a moderation action on an actor.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'event',
              1 => 'subject',
              2 => 'createdBy',
            ),
            'properties' => 
            array (
              'event' => 
              array (
                'type' => 'union',
                'refs' => 
                array (
                  0 => 'lex:tools.ozone.moderation.defs#modEventTakedown',
                  1 => 'lex:tools.ozone.moderation.defs#modEventAcknowledge',
                  2 => 'lex:tools.ozone.moderation.defs#modEventEscalate',
                  3 => 'lex:tools.ozone.moderation.defs#modEventComment',
                  4 => 'lex:tools.ozone.moderation.defs#modEventLabel',
                  5 => 'lex:tools.ozone.moderation.defs#modEventReport',
                  6 => 'lex:tools.ozone.moderation.defs#modEventMute',
                  7 => 'lex:tools.ozone.moderation.defs#modEventUnmute',
                  8 => 'lex:tools.ozone.moderation.defs#modEventMuteReporter',
                  9 => 'lex:tools.ozone.moderation.defs#modEventUnmuteReporter',
                  10 => 'lex:tools.ozone.moderation.defs#modEventReverseTakedown',
                  11 => 'lex:tools.ozone.moderation.defs#modEventResolveAppeal',
                  12 => 'lex:tools.ozone.moderation.defs#modEventEmail',
                  13 => 'lex:tools.ozone.moderation.defs#modEventDivert',
                  14 => 'lex:tools.ozone.moderation.defs#modEventTag',
                  15 => 'lex:tools.ozone.moderation.defs#accountEvent',
                  16 => 'lex:tools.ozone.moderation.defs#identityEvent',
                  17 => 'lex:tools.ozone.moderation.defs#recordEvent',
                  18 => 'lex:tools.ozone.moderation.defs#modEventPriorityScore',
                ),
              ),
              'subject' => 
              array (
                'type' => 'union',
                'refs' => 
                array (
                  0 => 'lex:com.atproto.admin.defs#repoRef',
                  1 => 'lex:com.atproto.repo.strongRef',
                ),
              ),
              'subjectBlobCids' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'format' => 'cid',
                ),
              ),
              'createdBy' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#modEventView',
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'SubjectHasAction',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.getEvent' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.getEvent',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get details about a moderation event.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'id',
          ),
          'properties' => 
          array (
            'id' => 
            array (
              'type' => 'integer',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#modEventViewDetail',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.getRecord' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.getRecord',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get details about a record.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'uri',
          ),
          'properties' => 
          array (
            'uri' => 
            array (
              'type' => 'string',
              'format' => 'at-uri',
            ),
            'cid' => 
            array (
              'type' => 'string',
              'format' => 'cid',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#recordViewDetail',
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'RecordNotFound',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.getRecords' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.getRecords',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get details about some records.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'uris',
          ),
          'properties' => 
          array (
            'uris' => 
            array (
              'type' => 'array',
              'maxLength' => 100,
              'items' => 
              array (
                'type' => 'string',
                'format' => 'at-uri',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'records',
            ),
            'properties' => 
            array (
              'records' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'union',
                  'refs' => 
                  array (
                    0 => 'lex:tools.ozone.moderation.defs#recordViewDetail',
                    1 => 'lex:tools.ozone.moderation.defs#recordViewNotFound',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.getRepo' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.getRepo',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get details about a repository.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.moderation.defs#repoViewDetail',
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'RepoNotFound',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.getReporterStats' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.getReporterStats',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get reporter stats for a list of users.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'dids',
          ),
          'properties' => 
          array (
            'dids' => 
            array (
              'type' => 'array',
              'maxLength' => 100,
              'items' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'stats',
            ),
            'properties' => 
            array (
              'stats' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:tools.ozone.moderation.defs#reporterStats',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.getRepos' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.getRepos',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get details about some repositories.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'dids',
          ),
          'properties' => 
          array (
            'dids' => 
            array (
              'type' => 'array',
              'maxLength' => 100,
              'items' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'repos',
            ),
            'properties' => 
            array (
              'repos' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'union',
                  'refs' => 
                  array (
                    0 => 'lex:tools.ozone.moderation.defs#repoViewDetail',
                    1 => 'lex:tools.ozone.moderation.defs#repoViewNotFound',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.queryEvents' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.queryEvents',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'List moderation events related to a subject.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'types' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
              'description' => 'The types of events (fully qualified string in the format of tools.ozone.moderation.defs#modEvent<name>) to filter by. If not specified, all events are returned.',
            ),
            'createdBy' => 
            array (
              'type' => 'string',
              'format' => 'did',
            ),
            'sortDirection' => 
            array (
              'type' => 'string',
              'default' => 'desc',
              'enum' => 
              array (
                0 => 'asc',
                1 => 'desc',
              ),
              'description' => 'Sort direction for the events. Defaults to descending order of created at timestamp.',
            ),
            'createdAfter' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Retrieve events created after a given timestamp',
            ),
            'createdBefore' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Retrieve events created before a given timestamp',
            ),
            'subject' => 
            array (
              'type' => 'string',
              'format' => 'uri',
            ),
            'collections' => 
            array (
              'type' => 'array',
              'maxLength' => 20,
              'description' => 'If specified, only events where the subject belongs to the given collections will be returned. When subjectType is set to \'account\', this will be ignored.',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'nsid',
              ),
            ),
            'subjectType' => 
            array (
              'type' => 'string',
              'description' => 'If specified, only events where the subject is of the given type (account or record) will be returned. When this is set to \'account\' the \'collections\' parameter will be ignored. When includeAllUserRecords or subject is set, this will be ignored.',
              'knownValues' => 
              array (
                0 => 'account',
                1 => 'record',
              ),
            ),
            'includeAllUserRecords' => 
            array (
              'type' => 'boolean',
              'default' => false,
              'description' => 'If true, events on all record types (posts, lists, profile etc.) or records from given \'collections\' param, owned by the did are returned.',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'hasComment' => 
            array (
              'type' => 'boolean',
              'description' => 'If true, only events with comments are returned',
            ),
            'comment' => 
            array (
              'type' => 'string',
              'description' => 'If specified, only events with comments containing the keyword are returned. Apply || separator to use multiple keywords and match using OR condition.',
            ),
            'addedLabels' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
              'description' => 'If specified, only events where all of these labels were added are returned',
            ),
            'removedLabels' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
              'description' => 'If specified, only events where all of these labels were removed are returned',
            ),
            'addedTags' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
              'description' => 'If specified, only events where all of these tags were added are returned',
            ),
            'removedTags' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
              'description' => 'If specified, only events where all of these tags were removed are returned',
            ),
            'reportTypes' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
            ),
            'policies' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'description' => 'If specified, only events where the action policies match any of the given policies are returned',
              ),
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'events',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'events' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:tools.ozone.moderation.defs#modEventView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.queryStatuses' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.queryStatuses',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'View moderation statuses of subjects (record or repo).',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'queueCount' => 
            array (
              'type' => 'integer',
              'description' => 'Number of queues being used by moderators. Subjects will be split among all queues.',
            ),
            'queueIndex' => 
            array (
              'type' => 'integer',
              'description' => 'Index of the queue to fetch subjects from. Works only when queueCount value is specified.',
            ),
            'queueSeed' => 
            array (
              'type' => 'string',
              'description' => 'A seeder to shuffle/balance the queue items.',
            ),
            'includeAllUserRecords' => 
            array (
              'type' => 'boolean',
              'description' => 'All subjects, or subjects from given \'collections\' param, belonging to the account specified in the \'subject\' param will be returned.',
            ),
            'subject' => 
            array (
              'type' => 'string',
              'format' => 'uri',
              'description' => 'The subject to get the status for.',
            ),
            'comment' => 
            array (
              'type' => 'string',
              'description' => 'Search subjects by keyword from comments',
            ),
            'reportedAfter' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Search subjects reported after a given timestamp',
            ),
            'reportedBefore' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Search subjects reported before a given timestamp',
            ),
            'reviewedAfter' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Search subjects reviewed after a given timestamp',
            ),
            'hostingDeletedAfter' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Search subjects where the associated record/account was deleted after a given timestamp',
            ),
            'hostingDeletedBefore' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Search subjects where the associated record/account was deleted before a given timestamp',
            ),
            'hostingUpdatedAfter' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Search subjects where the associated record/account was updated after a given timestamp',
            ),
            'hostingUpdatedBefore' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Search subjects where the associated record/account was updated before a given timestamp',
            ),
            'hostingStatuses' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
              'description' => 'Search subjects by the status of the associated record/account',
            ),
            'reviewedBefore' => 
            array (
              'type' => 'string',
              'format' => 'datetime',
              'description' => 'Search subjects reviewed before a given timestamp',
            ),
            'includeMuted' => 
            array (
              'type' => 'boolean',
              'description' => 'By default, we don\'t include muted subjects in the results. Set this to true to include them.',
            ),
            'onlyMuted' => 
            array (
              'type' => 'boolean',
              'description' => 'When set to true, only muted subjects and reporters will be returned.',
            ),
            'reviewState' => 
            array (
              'type' => 'string',
              'description' => 'Specify when fetching subjects in a certain state',
            ),
            'ignoreSubjects' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'uri',
              ),
            ),
            'lastReviewedBy' => 
            array (
              'type' => 'string',
              'format' => 'did',
              'description' => 'Get all subject statuses that were reviewed by a specific moderator',
            ),
            'sortField' => 
            array (
              'type' => 'string',
              'default' => 'lastReportedAt',
              'enum' => 
              array (
                0 => 'lastReviewedAt',
                1 => 'lastReportedAt',
                2 => 'reportedRecordsCount',
                3 => 'takendownRecordsCount',
                4 => 'priorityScore',
              ),
            ),
            'sortDirection' => 
            array (
              'type' => 'string',
              'default' => 'desc',
              'enum' => 
              array (
                0 => 'asc',
                1 => 'desc',
              ),
            ),
            'takendown' => 
            array (
              'type' => 'boolean',
              'description' => 'Get subjects that were taken down',
            ),
            'appealed' => 
            array (
              'type' => 'boolean',
              'description' => 'Get subjects in unresolved appealed status',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'tags' => 
            array (
              'type' => 'array',
              'maxLength' => 25,
              'items' => 
              array (
                'type' => 'string',
                'description' => 'Items in this array are applied with OR filters. To apply AND filter, put all tags in the same string and separate using && characters',
              ),
            ),
            'excludeTags' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'collections' => 
            array (
              'type' => 'array',
              'maxLength' => 20,
              'description' => 'If specified, subjects belonging to the given collections will be returned. When subjectType is set to \'account\', this will be ignored.',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'nsid',
              ),
            ),
            'subjectType' => 
            array (
              'type' => 'string',
              'description' => 'If specified, subjects of the given type (account or record) will be returned. When this is set to \'account\' the \'collections\' parameter will be ignored. When includeAllUserRecords or subject is set, this will be ignored.',
              'knownValues' => 
              array (
                0 => 'account',
                1 => 'record',
              ),
            ),
            'minAccountSuspendCount' => 
            array (
              'type' => 'integer',
              'description' => 'If specified, only subjects that belong to an account that has at least this many suspensions will be returned.',
            ),
            'minReportedRecordsCount' => 
            array (
              'type' => 'integer',
              'description' => 'If specified, only subjects that belong to an account that has at least this many reported records will be returned.',
            ),
            'minTakendownRecordsCount' => 
            array (
              'type' => 'integer',
              'description' => 'If specified, only subjects that belong to an account that has at least this many taken down records will be returned.',
            ),
            'minPriorityScore' => 
            array (
              'minimum' => 0,
              'maximum' => 100,
              'type' => 'integer',
              'description' => 'If specified, only subjects that have priority score value above the given value will be returned.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'subjectStatuses',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'subjectStatuses' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:tools.ozone.moderation.defs#subjectStatusView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.moderation.searchRepos' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.moderation.searchRepos',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Find repositories based on a search term.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'term' => 
            array (
              'type' => 'string',
              'description' => 'DEPRECATED: use \'q\' instead',
            ),
            'q' => 
            array (
              'type' => 'string',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'repos',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'repos' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:tools.ozone.moderation.defs#repoView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.server.getConfig' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.server.getConfig',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get details about ozone\'s server configuration.',
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'appview' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:tools.ozone.server.getConfig#serviceConfig',
              ),
              'pds' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:tools.ozone.server.getConfig#serviceConfig',
              ),
              'blobDivert' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:tools.ozone.server.getConfig#serviceConfig',
              ),
              'chat' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:tools.ozone.server.getConfig#serviceConfig',
              ),
              'viewer' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:tools.ozone.server.getConfig#viewerConfig',
              ),
            ),
          ),
        ),
      ),
      'serviceConfig' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'url' => 
          array (
            'type' => 'string',
            'format' => 'uri',
          ),
        ),
      ),
      'viewerConfig' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'role' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'tools.ozone.team.defs#roleAdmin',
              1 => 'tools.ozone.team.defs#roleModerator',
              2 => 'tools.ozone.team.defs#roleTriage',
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.set.addValues' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.set.addValues',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Add values to a specific set. Attempting to add values to a set that does not exist will result in an error.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'name',
              1 => 'values',
            ),
            'properties' => 
            array (
              'name' => 
              array (
                'type' => 'string',
                'description' => 'Name of the set to add values to',
              ),
              'values' => 
              array (
                'type' => 'array',
                'minLength' => 1,
                'maxLength' => 1000,
                'items' => 
                array (
                  'type' => 'string',
                ),
                'description' => 'Array of string values to add to the set',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.set.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.set.defs',
    'defs' => 
    array (
      'set' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'name',
        ),
        'properties' => 
        array (
          'name' => 
          array (
            'type' => 'string',
            'minLength' => 3,
            'maxLength' => 128,
          ),
          'description' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 1024,
            'maxLength' => 10240,
          ),
        ),
      ),
      'setView' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'name',
          1 => 'setSize',
          2 => 'createdAt',
          3 => 'updatedAt',
        ),
        'properties' => 
        array (
          'name' => 
          array (
            'type' => 'string',
            'minLength' => 3,
            'maxLength' => 128,
          ),
          'description' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 1024,
            'maxLength' => 10240,
          ),
          'setSize' => 
          array (
            'type' => 'integer',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'updatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.set.deleteSet' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.set.deleteSet',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Delete an entire set. Attempting to delete a set that does not exist will result in an error.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'name',
            ),
            'properties' => 
            array (
              'name' => 
              array (
                'type' => 'string',
                'description' => 'Name of the set to delete',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'SetNotFound',
            'description' => 'set with the given name does not exist',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.set.deleteValues' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.set.deleteValues',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Delete values from a specific set. Attempting to delete values that are not in the set will not result in an error',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'name',
              1 => 'values',
            ),
            'properties' => 
            array (
              'name' => 
              array (
                'type' => 'string',
                'description' => 'Name of the set to delete values from',
              ),
              'values' => 
              array (
                'type' => 'array',
                'minLength' => 1,
                'items' => 
                array (
                  'type' => 'string',
                ),
                'description' => 'Array of string values to delete from the set',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'SetNotFound',
            'description' => 'set with the given name does not exist',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.set.getValues' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.set.getValues',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get a specific set and its values',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'name',
          ),
          'properties' => 
          array (
            'name' => 
            array (
              'type' => 'string',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 1000,
              'default' => 100,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'set',
              1 => 'values',
            ),
            'properties' => 
            array (
              'set' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:tools.ozone.set.defs#setView',
              ),
              'values' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'cursor' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'SetNotFound',
            'description' => 'set with the given name does not exist',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.set.querySets' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.set.querySets',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Query available sets',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'namePrefix' => 
            array (
              'type' => 'string',
            ),
            'sortBy' => 
            array (
              'type' => 'string',
              'enum' => 
              array (
                0 => 'name',
                1 => 'createdAt',
                2 => 'updatedAt',
              ),
              'default' => 'name',
            ),
            'sortDirection' => 
            array (
              'type' => 'string',
              'default' => 'asc',
              'enum' => 
              array (
                0 => 'asc',
                1 => 'desc',
              ),
              'description' => 'Defaults to ascending order of name field.',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'sets',
            ),
            'properties' => 
            array (
              'sets' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:tools.ozone.set.defs#setView',
                ),
              ),
              'cursor' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.set.upsertSet' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.set.upsertSet',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Create or update set metadata',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.set.defs#set',
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.set.defs#setView',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.setting.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.setting.defs',
    'defs' => 
    array (
      'option' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'key',
          1 => 'value',
          2 => 'did',
          3 => 'scope',
          4 => 'createdBy',
          5 => 'lastUpdatedBy',
        ),
        'properties' => 
        array (
          'key' => 
          array (
            'type' => 'string',
            'format' => 'nsid',
          ),
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'value' => 
          array (
            'type' => 'unknown',
          ),
          'description' => 
          array (
            'type' => 'string',
            'maxGraphemes' => 1024,
            'maxLength' => 10240,
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'updatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'managerRole' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'tools.ozone.team.defs#roleModerator',
              1 => 'tools.ozone.team.defs#roleTriage',
              2 => 'tools.ozone.team.defs#roleAdmin',
            ),
          ),
          'scope' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'instance',
              1 => 'personal',
            ),
          ),
          'createdBy' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'lastUpdatedBy' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.setting.listOptions' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.setting.listOptions',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'List settings with optional filtering',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'scope' => 
            array (
              'type' => 'string',
              'knownValues' => 
              array (
                0 => 'instance',
                1 => 'personal',
              ),
              'default' => 'instance',
            ),
            'prefix' => 
            array (
              'type' => 'string',
              'description' => 'Filter keys by prefix',
            ),
            'keys' => 
            array (
              'type' => 'array',
              'maxLength' => 100,
              'items' => 
              array (
                'type' => 'string',
                'format' => 'nsid',
              ),
              'description' => 'Filter for only the specified keys. Ignored if prefix is provided',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'options',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'options' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:tools.ozone.setting.defs#option',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.setting.removeOptions' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.setting.removeOptions',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Delete settings by key',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'keys',
              1 => 'scope',
            ),
            'properties' => 
            array (
              'keys' => 
              array (
                'type' => 'array',
                'minLength' => 1,
                'maxLength' => 200,
                'items' => 
                array (
                  'type' => 'string',
                  'format' => 'nsid',
                ),
              ),
              'scope' => 
              array (
                'type' => 'string',
                'knownValues' => 
                array (
                  0 => 'instance',
                  1 => 'personal',
                ),
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.setting.upsertOption' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.setting.upsertOption',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Create or update setting option',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'key',
              1 => 'scope',
              2 => 'value',
            ),
            'properties' => 
            array (
              'key' => 
              array (
                'type' => 'string',
                'format' => 'nsid',
              ),
              'scope' => 
              array (
                'type' => 'string',
                'knownValues' => 
                array (
                  0 => 'instance',
                  1 => 'personal',
                ),
              ),
              'value' => 
              array (
                'type' => 'unknown',
              ),
              'description' => 
              array (
                'type' => 'string',
                'maxLength' => 2000,
              ),
              'managerRole' => 
              array (
                'type' => 'string',
                'knownValues' => 
                array (
                  0 => 'tools.ozone.team.defs#roleModerator',
                  1 => 'tools.ozone.team.defs#roleTriage',
                  2 => 'tools.ozone.team.defs#roleAdmin',
                ),
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'option',
            ),
            'properties' => 
            array (
              'option' => 
              array (
                'type' => 'ref',
                'ref' => 'lex:tools.ozone.setting.defs#option',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.signature.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.signature.defs',
    'defs' => 
    array (
      'sigDetail' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'property',
          1 => 'value',
        ),
        'properties' => 
        array (
          'property' => 
          array (
            'type' => 'string',
          ),
          'value' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.signature.findCorrelation' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.signature.findCorrelation',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Find all correlated threat signatures between 2 or more accounts.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'dids',
          ),
          'properties' => 
          array (
            'dids' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'details',
            ),
            'properties' => 
            array (
              'details' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:tools.ozone.signature.defs#sigDetail',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.signature.findRelatedAccounts' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.signature.findRelatedAccounts',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Get accounts that share some matching threat signatures with the root account.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'did',
          ),
          'properties' => 
          array (
            'did' => 
            array (
              'type' => 'string',
              'format' => 'did',
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'accounts',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'accounts' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:tools.ozone.signature.findRelatedAccounts#relatedAccount',
                ),
              ),
            ),
          ),
        ),
      ),
      'relatedAccount' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'account',
        ),
        'properties' => 
        array (
          'account' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:com.atproto.admin.defs#accountView',
          ),
          'similarities' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'ref',
              'ref' => 'lex:tools.ozone.signature.defs#sigDetail',
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.signature.searchAccounts' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.signature.searchAccounts',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'Search for accounts that match one or more threat signature values.',
        'parameters' => 
        array (
          'type' => 'params',
          'required' => 
          array (
            0 => 'values',
          ),
          'properties' => 
          array (
            'values' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'accounts',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'accounts' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:com.atproto.admin.defs#accountView',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.team.addMember' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.team.addMember',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Add a member to the ozone team. Requires admin role.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
              1 => 'role',
            ),
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'role' => 
              array (
                'type' => 'string',
                'knownValues' => 
                array (
                  0 => 'tools.ozone.team.defs#roleAdmin',
                  1 => 'tools.ozone.team.defs#roleModerator',
                  2 => 'tools.ozone.team.defs#roleTriage',
                ),
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.team.defs#member',
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'MemberAlreadyExists',
            'description' => 'Member already exists in the team.',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.team.defs' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.team.defs',
    'defs' => 
    array (
      'member' => 
      array (
        'type' => 'object',
        'required' => 
        array (
          0 => 'did',
          1 => 'role',
        ),
        'properties' => 
        array (
          'did' => 
          array (
            'type' => 'string',
            'format' => 'did',
          ),
          'disabled' => 
          array (
            'type' => 'boolean',
          ),
          'profile' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:app.bsky.actor.defs#profileViewDetailed',
          ),
          'createdAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'updatedAt' => 
          array (
            'type' => 'string',
            'format' => 'datetime',
          ),
          'lastUpdatedBy' => 
          array (
            'type' => 'string',
          ),
          'role' => 
          array (
            'type' => 'string',
            'knownValues' => 
            array (
              0 => 'lex:tools.ozone.team.defs#roleAdmin',
              1 => 'lex:tools.ozone.team.defs#roleModerator',
              2 => 'lex:tools.ozone.team.defs#roleTriage',
            ),
          ),
        ),
      ),
      'roleAdmin' => 
      array (
        'type' => 'token',
        'description' => 'Admin role. Highest level of access, can perform all actions.',
      ),
      'roleModerator' => 
      array (
        'type' => 'token',
        'description' => 'Moderator role. Can perform most actions.',
      ),
      'roleTriage' => 
      array (
        'type' => 'token',
        'description' => 'Triage role. Mostly intended for monitoring and escalating issues.',
      ),
    ),
  ),
  'tools.ozone.team.deleteMember' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.team.deleteMember',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Delete a member from ozone team. Requires admin role.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
            ),
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
            ),
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'MemberNotFound',
            'description' => 'The member being deleted does not exist',
          ),
          1 => 
          array (
            'name' => 'CannotDeleteSelf',
            'description' => 'You can not delete yourself from the team',
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.team.listMembers' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.team.listMembers',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'query',
        'description' => 'List all members with access to the ozone service.',
        'parameters' => 
        array (
          'type' => 'params',
          'properties' => 
          array (
            'disabled' => 
            array (
              'type' => 'boolean',
            ),
            'roles' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                'type' => 'string',
              ),
            ),
            'limit' => 
            array (
              'type' => 'integer',
              'minimum' => 1,
              'maximum' => 100,
              'default' => 50,
            ),
            'cursor' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'members',
            ),
            'properties' => 
            array (
              'cursor' => 
              array (
                'type' => 'string',
              ),
              'members' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'ref',
                  'ref' => 'lex:tools.ozone.team.defs#member',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'tools.ozone.team.updateMember' => 
  array (
    'lexicon' => 1,
    'id' => 'tools.ozone.team.updateMember',
    'defs' => 
    array (
      'main' => 
      array (
        'type' => 'procedure',
        'description' => 'Update a member in the ozone service. Requires admin role.',
        'input' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => 
            array (
              0 => 'did',
            ),
            'properties' => 
            array (
              'did' => 
              array (
                'type' => 'string',
                'format' => 'did',
              ),
              'disabled' => 
              array (
                'type' => 'boolean',
              ),
              'role' => 
              array (
                'type' => 'string',
                'knownValues' => 
                array (
                  0 => 'tools.ozone.team.defs#roleAdmin',
                  1 => 'tools.ozone.team.defs#roleModerator',
                  2 => 'tools.ozone.team.defs#roleTriage',
                ),
              ),
            ),
          ),
        ),
        'output' => 
        array (
          'encoding' => 'application/json',
          'schema' => 
          array (
            'type' => 'ref',
            'ref' => 'lex:tools.ozone.team.defs#member',
          ),
        ),
        'errors' => 
        array (
          0 => 
          array (
            'name' => 'MemberNotFound',
            'description' => 'The member being updated does not exist in the team',
          ),
        ),
      ),
    ),
  ),
);
