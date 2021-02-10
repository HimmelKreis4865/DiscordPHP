<?php

namespace phpcord\utils;

use function define;

abstract class PermissionIds {
	public const CREATE_INSTANT_INVITE = 0x00000001;
	public const KICK_MEMBERS  = 0x00000002;
	public const BAN_MEMBERS  = 0x00000004;
	public const ADMINISTRATOR  = 0x00000008;
	public const MANAGE_CHANNELS  = 0x00000010;
	public const MANAGE_GUILD  = 	0x00000020;
	public const ADD_REACTIONS = 0x00000040;
	public const VIEW_AUDIT_LOG = 0x00000080;
	public const PRIORITY_SPEAKER = 0x00000100;
	public const STREAM = 0x00000200;
	public const VIEW_CHANNEL = 0x00000400;
	public const SEND_MESSAGES = 0x00000800;
	public const SEND_TTS_MESSAGES = 0x000001000;
	public const MANAGE_MESSAGES = 0x00002000;
	public const EMBED_LINKS = 0x00004000;
	public const ATTACH_FILES = 0x00008000;
	public const READ_MESSAGE_HISTORY = 0x00010000;
	public const MENTION_EVERYONE = 0x00020000;
	public const USE_EXTERNAL_EMOJIS = 0x00040000;
	public const VIEW_GUILD_INSIGHTS = 0x00080000;
	public const CONNECT = 0x00100000;
	public const SPEAK = 0x00200000;
	public const MUTE_MEMBERS = 0x00400000;
	public const DEAFEN_MEMBERS = 0x00800000;
	public const MOVE_MEMBERS = 0x01000000;
	public const USE_VAD = 0x02000000;
	public const CHANGE_NICKNAME = 0x04000000;
	public const MANAGE_NICKNAMES = 0x08000000;
	public const MANAGE_ROLES  = 0x10000000;
	public const MANAGE_WEBHOOKS  = 0x20000000;
	public const MANAGE_EMOJIS  = 0x40000000;

	public const PERMISSIONS = [
		"CREATE_INSTANT_INVITE" => self::CREATE_INSTANT_INVITE,
		"KICK_MEMBERS" => self::KICK_MEMBERS,
		"BAN_MEMBERS" => self::BAN_MEMBERS,
		"ADMINISTRATOR" => self::ADMINISTRATOR,
		"MANAGE_CHANNELS" => self::MANAGE_CHANNELS,
		"MANAGE_GUILD" => self::MANAGE_GUILD,
		"ADD_REACTIONS" => self::ADD_REACTIONS,
		"VIEW_AUDIT_LOG" => self::VIEW_AUDIT_LOG,
		"PRIORITY_SPEAKER" => self::PRIORITY_SPEAKER,
		"STREAM" => self::STREAM,
		"VIEW_CHANNEL" => self::VIEW_CHANNEL,
		"SEND_MESSAGES" => self::SEND_MESSAGES,
		"SEND_TTS_MESSAGES" => self::SEND_TTS_MESSAGES,
		"MANAGE_MESSAGES" => self::MANAGE_MESSAGES,
		"EMBED_LINKS" => self::EMBED_LINKS,
		"ATTACH_FILES" => self::ATTACH_FILES,
		"READ_MESSAGE_HISTORY" => self::READ_MESSAGE_HISTORY,
		"MENTION_EVERYONE" => self::MENTION_EVERYONE,
		"USE_EXTERNAL_EMOJIS" => self::USE_EXTERNAL_EMOJIS,
		"VIEW_GUILD_INSIGHTS" => self::VIEW_GUILD_INSIGHTS,
		"CONNECT" => self::CONNECT,
		"SPEAK" => self::SPEAK,
		"MUTE_MEMBERS" => self::MUTE_MEMBERS,
		"DEAFEN_MEMBERS" => self::DEAFEN_MEMBERS,
		"MOVE_MEMBERS" => self::MOVE_MEMBERS,
		"USE_VAD" => self::USE_VAD,
		"CHANGE_NICKNAME" => self::CHANGE_NICKNAME,
		"MANAGE_NICKNAMES" => self::MANAGE_NICKNAMES,
		"MANAGE_ROLES" => self::MANAGE_ROLES,
		"MANAGE_WEBHOOKS" => self::MANAGE_WEBHOOKS,
		"MANAGE_EMOJIS" => self::MANAGE_EMOJIS
	];

	public static function initDefinitions() {
		// doing the stuff hardcoded here to simplify calculations for IDEs :D
		define("CREATE_INSTANT_INVITE", self::CREATE_INSTANT_INVITE);
		define("KICK_MEMBERS", self::KICK_MEMBERS);
		define("BAN_MEMBERS", self::BAN_MEMBERS);
		define("ADMINISTRATOR", self::ADMINISTRATOR);
		define("MANAGE_CHANNELS", self::MANAGE_CHANNELS);
		define("MANAGE_GUILD", self::MANAGE_GUILD);
		define("ADD_REACTIONS", self::ADD_REACTIONS);
		define("VIEW_AUDIT_LOG", self::VIEW_AUDIT_LOG);
		define("PRIORITY_SPEAKER", self::PRIORITY_SPEAKER);
		define("STREAM", self::STREAM);
		define("VIEW_CHANNEL", self::VIEW_CHANNEL);
		define("SEND_MESSAGES", self::SEND_MESSAGES);
		define("SEND_TTS_MESSAGES", self::SEND_TTS_MESSAGES);
		define("MANAGE_MESSAGES", self::MANAGE_MESSAGES);
		define("EMBED_LINKS", self::EMBED_LINKS);
		define("ATTACH_FILES", self::ATTACH_FILES);
		define("READ_MESSAGE_HISTORY", self::READ_MESSAGE_HISTORY);
		define("MENTION_EVERYONE", self::MENTION_EVERYONE);
		define("USE_EXTERNAL_EMOJIS", self::USE_EXTERNAL_EMOJIS);
		define("VIEW_GUILD_INSIGHTS", self::VIEW_GUILD_INSIGHTS);
		define("CONNECT", self::CONNECT);
		define("SPEAK", self::SPEAK);
		define("MUTE_MEMBERS", self::MUTE_MEMBERS);
		define("DEAFEN_MEMBERS", self::DEAFEN_MEMBERS);
		define("MOVE_MEMBERS", self::MOVE_MEMBERS);
		define("USE_VAD", self::USE_VAD);
		define("CHANGE_NICKNAME", self::CHANGE_NICKNAME);
		define("MANAGE_NICKNAMES", self::MANAGE_NICKNAMES);
		define("MANAGE_ROLES", self::MANAGE_ROLES);
		define("MANAGE_WEBHOOKS", self::MANAGE_WEBHOOKS);
		define("MANAGE_EMOJIS", self::MANAGE_EMOJIS);
	}
}