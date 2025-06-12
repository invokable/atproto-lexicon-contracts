# AT Protocol Lexicon Contracts - Onboarding Guide

## Overview

This project is a **PHP code generation system** for the **AT Protocol** (Authenticated Transfer Protocol), which powers decentralized social networks like Bluesky. The system transforms JSON-based Lexicon schema definitions into type-safe PHP interfaces, classes, and enums that developers can use to interact with AT Protocol services.

**Primary Users:**
- PHP developers building AT Protocol clients
- Applications integrating with Bluesky or other AT Protocol networks
- Service providers implementing AT Protocol standards

**What it enables:**
- Type-safe PHP interactions with AT Protocol APIs
- Auto-generated contracts that stay in sync with protocol changes
- Structured data models for posts, profiles, social graphs, and moderation
- Support for all major AT Protocol services (core protocol, Bluesky social features, moderation tools)

The project follows a **generate-don't-write** philosophy where all client code is automatically generated from authoritative JSON schema definitions, ensuring consistency and reducing manual maintenance.

## Project Organization

### Core Directory Structure

```
├── src/                          # Generated PHP code (output)
│   ├── Contracts/                # Service interface contracts
│   ├── Record/                   # Abstract data record classes  
│   ├── Union/                    # Union type classes
│   ├── Enum/                     # Enumeration classes
│   └── Lexicons/defs.php         # Consolidated definitions
├── command/                      # Laravel-based generation commands
│   ├── app/Console/Commands/     # Code generation commands
│   └── stubs/                    # Template files for generation
├── atproto/lexicons/             # Input JSON schemas (git submodule)
├── example/                      # Usage examples
└── .github/workflows/            # CI/CD automation
```

### Core Systems

1. **Code Generation Pipeline** (`command/app/Console/Commands/`)
    - `LexiconContractsCommand` - Generates service interfaces
    - `LexiconRecordCommand` - Generates abstract record classes
    - `LexiconUnionCommand` - Generates union type classes
    - `LexiconEnumCommand` - Generates enumeration classes
    - `LexiconDefsCommand` - Consolidates all definitions

2. **Generated Contracts** (`src/Contracts/`)
    - `App/Bsky/` - Bluesky social features (Actor, Feed, Graph, Notification)
    - `Com/Atproto/` - Core protocol services (Admin, Server, Sync, Repo)
    - `Tools/Ozone/` - Moderation and administrative tools
    - `Chat/Bsky/` - Real-time messaging functionality

3. **Data Models** (`src/Record/`)
    - Post records, profile records, relationship records
    - Social graph structures (follows, blocks, lists)
    - Content control records (threadgates, postgates)

4. **Template System** (`command/app/Console/Commands/stubs/`)
    - `lexicon-interface.stub` - Service interface template
    - `lexicon-record.stub` - Record class template
    - `lexicon-union.stub` - Union type template
    - `lexicon-enum.stub` - Enumeration template

### Key Workflows

**Development Workflow:**
```bash
# Update lexicon schemas
git submodule update --remote

# Generate all PHP code
composer run lexicon

# Individual generation commands
php artisan bluesky:lexicon-contracts
php artisan bluesky:lexicon-record
php artisan bluesky:lexicon-union
php artisan bluesky:lexicon-enum
php artisan bluesky:lexicon-defs
```

**CI/CD:** Automated versioning triggers on merged PRs that modify `src/` directory, using semantic versioning with patch-level increments.

## Glossary of Codebase-Specific Terms

**Actor** - A user account/profile in AT Protocol. Core entity for identity management.
- *Location:* `src/Contracts/App/Bsky/Actor.php`, `src/Record/App/Bsky/Actor/`

**AppView** - Service component that aggregates and presents feed data to clients.
- *Usage:* Referenced in feed operations, implements hydration logic

**AT-URI** - Authenticated Transfer URI format for identifying AT Protocol records.
- *Format:* `at://did:plc:example/app.bsky.feed.post/recordkey`

**Blob** - Binary large object for media content (images, videos, documents).
- *Location:* `Revolution\AtProto\Lexicon\Attributes\Blob`

**CID** - Content Identifier, cryptographic hash for content addressing.
- *Usage:* Used with AT-URIs for immutable content references

**DID** - Decentralized Identifier for AT Protocol accounts.
- *Format:* `did:plc:abcd1234` or `did:web:example.com`

**Embed** - Content embedded within posts (images, video, external links, quote posts).
- *Location:* `src/Record/App/Bsky/Embed/`, union types in posts

**Facets** - Rich text annotations for mentions, hashtags, and links in text content.
- *Location:* `app.bsky.richtext.facet` references in post records

**Feed Generator** - Service that creates custom algorithmic feeds for users.
- *Location:* `src/Contracts/App/Bsky/Feed.php` operations

**Graph** - Social connection system (follows, blocks, mutes, lists).
- *Location:* `src/Contracts/App/Bsky/Graph.php`, `src/Record/App/Bsky/Graph/`

**Hydration** - Process of converting minimal data (skeletons) into full objects.
- *Usage:* `getPosts()` hydrates post URIs into complete post views

**Lexicon** - AT Protocol's schema definition language for APIs and data structures.
- *Location:* Source JSONs in `atproto/lexicons/`, processed by generation commands

**Moderation Events** - Actions taken on content or accounts (takedown, label, mute).
- *Location:* `tools.ozone.moderation.emitEvent` operations

**NSID** - Namespace Identifier uniquely identifying Lexicon definitions.
- *Format:* `app.bsky.feed.post`, `com.atproto.sync.getRepo`
- *Usage:* Constants and attributes throughout generated code

**Ozone** - AT Protocol's moderation and administrative toolset.
- *Location:* `src/Contracts/Tools/Ozone/`, `tools.ozone.*` NSIDs

**PDS** - Personal Data Server storing user's AT Protocol data.
- *Usage:* Implements repository and sync operations

**Postgate** - Record controlling post embedding permissions and detached embeds.
- *Location:* `src/Record/App/Bsky/Feed/AbstractPostgate.php`

**Record** - Fundamental data unit in AT Protocol repositories.
- *Location:* `src/Record/` directory, abstract base classes

**Relay** - AT Protocol service for data synchronization and discovery.
- *Usage:* Implements sync operations like `listRepos`

**Skeleton** - Minimal data representation requiring hydration for full content.
- *Usage:* `getFeedSkeleton()` returns post URIs, `getFeed()` returns full posts

**Starter Pack** - Curated collection of users and feeds for new user onboarding.
- *Location:* `src/Record/App/Bsky/Graph/AbstractStarterpack.php`

**Strong Ref** - Immutable reference to a specific record version.
- *Type:* `com.atproto.repo.strongRef` with URI and CID

**Threadgate** - Record controlling who can reply to posts and hiding replies.
- *Location:* `src/Record/App/Bsky/Feed/AbstractThreadgate.php`

**Union** - Type that can be one of several specified alternatives.
- *Location:* `src/Union/` directory, `#[Union]` attributes

**xRPC** - AT Protocol's RPC framework for service communication.
- *Usage:* Base URI `https://public.api.bsky.app/xrpc/` in client examples
