=== Lazy Responsive Video Embed with Google Analytics and Piwik Tracking ===
Contributors: MarcDK
Tags: marctv, youtube, vimeo, jquery, google analytics, responsive, oembed, tracking, lazy, loop, piwik,
Requires at least: 3.8
Tested up to: 4.8
Stable tag: 4.9

== Description ==

Embeds youtube and vimeo videos responsive friendly. Features google analytics events and oEmbed compatibility.
Loads embeded player after user interaction with the power of jQuery. Won't load the preview only if in viewport to
save bandwith.

= Features =

* Responsive player preview
* Lazy loads the preview player with high quality preview image if available.
* Loads the real embeded player after user interaction
* Tracks clicks with Google Analytics (Universal) and Piwik events
* Keeps your content clean by using just link to youtube url

= HTML Embed =

Use this in your article while the wysiwyg editor is set to HTML mode:

`<a class="embedvideo" href="http://www.youtube.com/watch?v=TJHX52TXgm4">My Title</a>`

== looping ==

Just add the class "loop" to the link. Use this in your article while the wysiwyg editor is set to HTML mode:

`<a class="embedvideo loop" href="http://www.youtube.com/watch?v=TJHX52TXgm4">My Title</a>`

= oEmbed =

Activate "Auto-embeds" under settings -> media.

Use this in your article while the wysiwyg editor is set to HTML mode:

`http://www.youtube.com/watch?v=atVFr_RbQUI`

or specify a title:

`[embed title="My favourite Minecraft Video"]http://www.youtube.com/watch?v=vvNtvThPqKE[/embed]`

= What makes this plugin so special =

Loads an image with play icon instead of an embed code which is only embedded after the image has been clicked. This way it saves loading time and bandwidth. And it has build in google analytic tracking events and is responsive, too!

Degrades gracefully. The biggest advantage of this plugin is that it does not alter your original markup in any way. If you (or youtube) decides that flash is not the best way to embed video you won't be stuck with embed codes in your article. I will update this plugin to keep track with this development. And if you decide to use another plugin because this plugin does not suit your requirements then you can still switch because you did just add classes to html tags. So if everything breaks you still have working links to video ressources in your content.


Feel free to contact me if you have any questions. Please use the wordpress forums and name a tag of your post after the plugin's name. Thank you.

== Installation ==

* Install plugin
* Activate it

= player size =

Both the preview image and the embedded player iframe are automatically resized.

= specify a start time =

It is also possible to link to a specific start time for youtube videos. This script converts links like

`<a class="embedvideo" href="http://www.youtube.com/watch?v=TJHX52TXgm4&t=1m20s">My Title</a>`

to the appropriate time format and starts the video at that position.

= Google Analytics =

Events are being tracked automatically as "vimeo" and "youtube" with the video title as label.

= Credits =

Player icon by Font Awesome: http://fortawesome.github.com/Font-Awesome/#icon/icon-play-circle

== Changelog ==

= 4.9 =

* References to Piwik support.

= 4.8 =

* Piwik support

= 4.7.3 =

* compatible with Monster Insights.

= 4.7 =

* removed caption on oembed
* fixed compatibility with twenty seventen (float play icon)

= 4.5 =

* fixed white shadow bug on retina displays.

= 4.4 =

* fixed aspect ratio bug in old youtube videos without high res thumbnails

= 4.3 =

* Added https support for all embeds. No more mixed content warnings. \o/

= 4.2 =

* Added support for loop playback. Just add the class "loop" to the link.

= 4.1 =

* Added support for youtu.be links.
