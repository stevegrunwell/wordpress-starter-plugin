# Steve Grunwell's WordPress Starter Plugin

This repository contains the bare-bones structure for a WordPress plugin. This is meant to complement my [WordPress Starter Theme](https://github.com/stevegrunwell/wordpress-starter-theme). Out of the box it's set up to store your [Advanced Custom Fields](http://www.advancedcustomfields.com) exports, though you certainly don't have to use the feature (I've done a [write up of ACF exports](http://stevegrunwell.com/blog/exploring-the-wordpress-advanced-custom-fields-export-feature/) on my blog).

## How to use the template

There really isn't much to it (at this point, anyway). Rename starter-plugin.php to match whatever you name the cloned directory, then fill out the information at the top of that file:

* Plugin Name
* Plugin URI
* Description
* Version
* Author
* Author URI
* License

Fill out this meta information, then, if you're using Advanced Custom Fields, export your configuration to advanced-custom-fields.php. It's also a good idea to generate XML exports of your configuration so future developers can import them for editing. I like to keep these in advanced-custom-fields.xml.

Of course, feel free to delete this README when you're done with it.

## Why use a plugin along with the theme?

Far too often agencies will build a WordPress theme full of all sorts of neat functionality - custom post types, taxonomies, and the likes. This is all well and good until a few years pass and the client wants a fresh look for the site. You can either a) start from scratch or b) attempt to separate out all the persistent functionality and put it into the new theme. What a silly waste of time!

Use this plugin template to do things like register post types, taxonomies, and custom fields. Help yourself separate functionality from presentational templates and make the next build of the site an easier process.

## License

This theme starter is dual-licensed under both the [Don't Be a Dick](http://www.dbad-license.org/) and [WTF](http://www.wtfpl.net/) Public Licenses, which are GPLv2, MIT, and pretty much every-other-license-ever compatible.

Please have fun and build something awesome!