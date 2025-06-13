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

## Onboarding Guidance for New Contributors

**Initial Setup:**
1. Clone the repository: `git clone https://github.com/invokable/atproto-lexicon-contracts.git`
2. Initialize submodules: `git submodule update --init --recursive`
3. Install Laravel dependencies: `cd command && composer install`
4. Verify commands are available: `cd command && php artisan list | grep lexicon`

**Code Generation Process:**
1. Update schemas: `git submodule update --remote` 
2. Generate contracts: `cd command && php artisan bluesky:lexicon-contracts`
3. Generate enums: `cd command && php artisan bluesky:lexicon-enum`
4. Generate records: `cd command && php artisan bluesky:lexicon-record` 
5. Generate definitions: `cd command && php artisan bluesky:lexicon-defs`
6. Generate unions: `cd command && php artisan bluesky:lexicon-union`
7. Or run all at once: `cd command && composer run lexicon`

**Understanding Generated Code:**
- All code in `src/` is auto-generated - never edit manually
- Templates in `command/app/Console/Commands/stubs/` control output format
- JSON schemas in `atproto/lexicons/` are the source of truth
- Each NSID (e.g., `app.bsky.feed.post`) becomes a PHP class or interface

**Development Workflow:**
- Make changes only to generation commands or templates
- Test generation with: `cd command && composer run lexicon`
- Verify output structure matches expected patterns
- Use `git diff` to review generated changes before committing

## Project Organization

### Core Directory Structure

```
├── src/                          # Generated PHP code (output)
│   ├── Attributes/               # PHP attribute classes for schema validation
│   ├── Contracts/                # Service interface contracts
│   ├── Record/                   # Abstract data record classes  
│   ├── Union/                    # Union type classes
│   ├── Enum/                     # Enumeration classes
│   ├── Types/                    # Base type classes (AbstractBlob, AbstractUnion)
│   └── Lexicons/                 # Consolidated definitions and abstractions
│       ├── defs.php              # All lexicon definitions array
│       └── AbstractLexicons.php  # Base lexicon handling
├── command/                      # Laravel-based generation commands
│   ├── app/Console/Commands/     # Code generation commands
│   │   ├── stubs/                # Template files for generation
│   │   ├── LexiconContractsCommand.php
│   │   ├── LexiconRecordCommand.php
│   │   ├── LexiconUnionCommand.php
│   │   ├── LexiconEnumCommand.php
│   │   └── LexiconDefsCommand.php
│   └── composer.json             # Laravel app dependencies and scripts
├── atproto/lexicons/             # Input JSON schemas (git submodule)
│   ├── app/                      # Bluesky app schemas
│   ├── chat/                     # Chat/messaging schemas  
│   ├── com/                      # Core AT Protocol schemas
│   └── tools/                    # Moderation and admin tool schemas
├── example/                      # Usage examples and client implementations
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
    - `App/Bsky/` - Bluesky social features (Actor, Feed, Graph, Notification, Video, Labeler, Unspecced)
    - `Com/Atproto/` - Core protocol services (Admin, Identity, Label, Moderation, Repo, Server, Sync, Temp)
    - `Tools/Ozone/` - Moderation and administrative tools (Communication, Hosting, Moderation, Server, Set, Setting, Signature, Team, Verification)
    - `Chat/Bsky/` - Real-time messaging functionality (Actor, Convo, Moderation)

3. **Data Models** (`src/Record/`)
    - Post records, profile records, relationship records
    - Social graph structures (follows, blocks, lists, starter packs)
    - Content control records (threadgates, postgates)
    - Embed types (images, video, external links, quote posts)

4. **Type System** (`src/`)
    - `Attributes/` - PHP attributes for schema validation (Format, Union, Ref, Required, etc.)
    - `Types/` - Base type abstractions (AbstractBlob, AbstractUnion)
    - `Enum/` - Generated enumeration classes
    - `Union/` - Generated union type classes

5. **Template System** (`command/app/Console/Commands/stubs/`)
    - `lexicon-interface.stub` - Service interface template
    - `lexicon-record.stub` - Record class template
    - `lexicon-union.stub` - Union type template
    - `lexicon-enum.stub` - Enumeration template
    - `lexicon-defs.stub` - Definitions consolidation template

### Key Workflows

**Development Workflow:**
```bash
# Update lexicon schemas
git submodule update --remote

# Install Laravel dependencies (required for generation)
cd command && composer install

# Generate all PHP code (from command directory)
cd command && composer run lexicon

# Individual generation commands (from command directory)
cd command && php artisan bluesky:lexicon-contracts
cd command && php artisan bluesky:lexicon-enum  
cd command && php artisan bluesky:lexicon-record
cd command && php artisan bluesky:lexicon-defs
cd command && php artisan bluesky:lexicon-union

# Or run from project root using relative paths
php command/artisan bluesky:lexicon-contracts
```

**CI/CD Workflows:**
- **Automated Updates** (`lexicon.yml`) - Daily cron job and pushes to main that update lexicon schemas and create PRs
- **Code Generation** - Runs all generation commands in sequence: contracts → enum → record → defs → union  
- **Versioning** (`version.yml`) - Semantic versioning with patch-level increments when PRs modify `src/**` paths
- **Linting** (`lint.yml`) - Code style validation using Laravel Pint

## Glossary of Codebase-Specific Terms

**Actor** - A user account/profile in AT Protocol. Core entity for identity management.
- *Location:* `src/Contracts/App/Bsky/Actor.php`, `src/Record/App/Bsky/Actor/`

**AppView** - Service component that aggregates and presents feed data to clients.
- *Usage:* Referenced in feed operations, implements hydration logic

**AT-URI** - Authenticated Transfer URI format for identifying AT Protocol records.
- *Format:* `at://did:plc:example/app.bsky.feed.post/recordkey`

**Blob** - Binary large object for media content (images, videos, documents).
- *Location:* `src/Attributes/Blob.php`, `src/Types/AbstractBlob.php`

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

**Labeler** - Service that provides content labels for moderation and filtering.
- *Location:* `src/Contracts/App/Bsky/Labeler.php`

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
- *Location:* `src/Union/` directory, `src/Attributes/Union.php`, `src/Types/AbstractUnion.php`
- *Usage:* `#[Union]` attributes on properties and parameters

**Video** - Video content handling within AT Protocol posts and embeds.
- *Location:* `src/Contracts/App/Bsky/Video.php`, `app.bsky.embed.video` records

**xRPC** - AT Protocol's RPC framework for service communication.
- *Usage:* Base URI `https://public.api.bsky.app/xrpc/` in client examples
