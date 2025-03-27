<?php

/**
 * GENERATED CODE.
 */

declare(strict_types=1);

namespace Revolution\AtProto\Lexicon\Contracts\Tools\Ozone;

use Revolution\AtProto\Lexicon\Attributes\Format;
use Revolution\AtProto\Lexicon\Attributes\Get;
use Revolution\AtProto\Lexicon\Attributes\NSID;
use Revolution\AtProto\Lexicon\Attributes\Output;
use Revolution\AtProto\Lexicon\Attributes\Post;

interface Communication
{
    public const createTemplate = 'tools.ozone.communication.createTemplate';
    public const deleteTemplate = 'tools.ozone.communication.deleteTemplate';
    public const listTemplates = 'tools.ozone.communication.listTemplates';
    public const updateTemplate = 'tools.ozone.communication.updateTemplate';

    public const createTemplateResponse = ['id' => 'string', 'name' => 'string', 'subject' => 'string', 'contentMarkdown' => 'string', 'disabled' => 'bool', 'lang' => 'string', 'lastUpdatedBy' => 'string', 'createdAt' => 'string', 'updatedAt' => 'string'];
    public const listTemplatesResponse = ['communicationTemplates' => [['id' => 'string', 'name' => 'string', 'subject' => 'string', 'contentMarkdown' => 'string', 'disabled' => 'bool', 'lang' => 'string', 'lastUpdatedBy' => 'string', 'createdAt' => 'string', 'updatedAt' => 'string']]];
    public const updateTemplateResponse = ['id' => 'string', 'name' => 'string', 'subject' => 'string', 'contentMarkdown' => 'string', 'disabled' => 'bool', 'lang' => 'string', 'lastUpdatedBy' => 'string', 'createdAt' => 'string', 'updatedAt' => 'string'];

    /**
     * Administrative action to create a new, re-usable communication (email for now) template.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-communication-create-template
     */
    #[Post, NSID(self::createTemplate)]
    #[Output(self::createTemplateResponse)]
    public function createTemplate(string $name, string $contentMarkdown, string $subject, #[Format('language')] ?string $lang = null, #[Format('did')] ?string $createdBy = null);

    /**
     * Delete a communication template.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-communication-delete-template
     */
    #[Post, NSID(self::deleteTemplate)]
    public function deleteTemplate(string $id);

    /**
     * Get list of all communication templates.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-communication-list-templates
     */
    #[Get, NSID(self::listTemplates)]
    #[Output(self::listTemplatesResponse)]
    public function listTemplates();

    /**
     * Administrative action to update an existing communication template. Allows passing partial fields to patch specific fields only.
     *
     * @link https://docs.bsky.app/docs/api/tools-ozone-communication-update-template
     */
    #[Post, NSID(self::updateTemplate)]
    #[Output(self::updateTemplateResponse)]
    public function updateTemplate(string $id, ?string $name = null, #[Format('language')] ?string $lang = null, ?string $contentMarkdown = null, ?string $subject = null, #[Format('did')] ?string $updatedBy = null, ?bool $disabled = null);
}
