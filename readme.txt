=== Inline Spoilers ===
Contributors: iCON
Tags: shortcode, spoiler
Requires at least: 4.0.0
Tested up to: 5.2.2
Stable tag: 1.0.0
License: Public Domain

Creates a shortcode for spoiler tags. It uses the HTML <details> and <summary> tags, so it works without JavaScript! It's not supported in Edge (EdgeHTML) and Internet Explorer though.

== Description ==
`Example: [spoiler title="Expand Me"]Spoiler content[/spoiler]`

== Installation ==
1. Upload folder `wiidatabase-spoilers` to the `/wp-content/plugins/` directory;
1. Activate the plugin through the 'Plugins' menu in WordPress;
1. Place shortcode (*Example:* `[spoiler title="Expand Me"]Spoiler content[/spoiler]`) in your content;

== Frequently Asked Questions ==
= How to expand the spoiler by default? =
Use `initial_state="expanded"`
`
[spoiler title="&nbsp;"]
...
[/spoiler]
`

= How to remove the title? =
To remove the default title you can use
`
[spoiler title="&nbsp;"]
...
[/spoiler]
`

== Changelog ==
= 1.0.0 =
* Initial Release