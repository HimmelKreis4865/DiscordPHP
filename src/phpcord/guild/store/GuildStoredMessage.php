<?php

namespace phpcord\guild\store;

use phpcord\guild\GuildMessage;
use phpcord\guild\GuildReceivedEmbed;
use phpcord\user\User;

class GuildStoredMessage extends GuildMessage {
	/** @var User $author */
	protected $author;

	public function __construct(string $guildId, string $id, string $channelId, string $content, User $author, ?GuildReceivedEmbed $embed = null, string $timestamp = "", bool $tts = false, bool $pinned = false, ?array $referenced_message = null, array $attachments = [], ?string $edited_timestamp = null, int $type = 0, int $flags = 0, bool $mention_everyone = false, array $mentions = [], array $mention_roles = []) {
		$this->author = $author;
		parent::__construct($guildId, $id, $channelId, $content, null, $embed, $timestamp, $tts, $pinned, $referenced_message, $attachments, $edited_timestamp, $type, $flags, $mention_everyone, $mentions, $mention_roles);
	}
}

