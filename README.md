# [Atomic Sage 8.5.1](https://github.com/mike-source/sage)
'Atomic Sage' is a fork of the Sage Wordpress theme (from the Roots project) which takes on board 'Atomic Design' principles. The fork is currently synced to Sage 8.5.1 and is maintained by the [Unbranded](https://unbrandedmanchester.com) development team for use with our client projects. The main differences from the original Sage are as follows:

* No Bootstrap! - Twitter Bootstrap has been completely removed in place of a custom SCSS based framework (why? because Bootstrap's grid system is stupidly bloated and in practice, no serious designer ever seems to want to use any of Bootstrap's default component styles anyway).
* Template system has been rebuilt inline with [Atomic Design](http://bradfrost.com/blog/post/atomic-web-design/) inspired 'layouts' and 'components'. Additional integration with [Advanced Custom Fields](https://www.advancedcustomfields.com/) has been incorporated to allow a layout builder, based on our design system to be integrated within the Wordpress admin area. This means **ACF Pro version 5+ is required**.
* Removed Wordpress Emoji Support.
* Added [PocketGrid](http://arnaudleray.github.io/pocketgrid/) (a much more elegant grid system based loosely on Chris Coyier's '[don't overthink it grids](https://css-tricks.com/dont-overthink-it-grids/)')
* Added [FontAwesome](http://fontawesome.io/)
* Added [Normalize.css](https://necolas.github.io/normalize.css/)
* Added [HTML5Shiv](https://github.com/aFarkas/html5shiv)
* Added [Respond JS](https://github.com/scottjehl/Respond)
* Added [imagesLoaded](https://imagesloaded.desandro.com/)
* Added [Owl Carousel](https://owlcarousel2.github.io/OwlCarousel2/)

Additional documentation for the custom framework and layout builder can be found [here](#).

Most of the original Sage 8 documentation regarding installation and development using the gulp workflow still applies and is found below. At time of writing, Sage 9 is in it's 3rd beta and when it is released, the documentation on the Roots/Sage website and github will almost certainly change. The documentation below is for Sage 8 and will remain here as a reference.

# [Sage](https://roots.io/sage/)
[![Build Status](https://travis-ci.org/roots/sage.svg)](https://travis-ci.org/roots/sage)
[![devDependency Status](https://david-dm.org/roots/sage/dev-status.svg)](https://david-dm.org/roots/sage#info=devDependencies)

Sage is a WordPress starter theme based on HTML5 Boilerplate, gulp, Bower, and Bootstrap Sass, that will help you make better themes.

* Source: [https://github.com/roots/sage](https://github.com/roots/sage)
* Homepage: [https://roots.io/sage/](https://roots.io/sage/)
* Documentation: [https://roots.io/sage/docs/](https://roots.io/sage/docs/)
* Twitter: [@rootswp](https://twitter.com/rootswp)
* Newsletter: [Subscribe](http://roots.io/subscribe/)
* Forum: [https://discourse.roots.io/](https://discourse.roots.io/)

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js >= 4.5  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |

For more installation notes, refer to the [Install gulp and Bower](#install-gulp-and-bower) section in this document.

## Features

* [gulp](http://gulpjs.com/) build script that compiles both Sass and Less, checks for JavaScript errors, optimizes images, and concatenates and minifies files
* [BrowserSync](http://www.browsersync.io/) for keeping multiple browsers and devices synchronized while testing, along with injecting updated CSS and JS into your browser while you're developing
* [Bower](http://bower.io/) for front-end package management
* [asset-builder](https://github.com/austinpray/asset-builder) for the JSON file based asset pipeline
* [Bootstrap](http://getbootstrap.com/)
* [Theme wrapper](https://roots.io/sage/docs/theme-wrapper/)
* ARIA roles and microformats
* Posts use the [hNews](http://microformats.org/wiki/hnews) microformat
* [Multilingual ready](https://roots.io/wpml/) and over 30 available [community translations](https://github.com/roots/sage-translations)

Install the [Soil](https://github.com/roots/soil) plugin to enable additional features:

* Cleaner output of `wp_head` and enqueued assets
* Cleaner HTML output of navigation menus
* Root relative URLs
* Nice search (`/search/query/`)
* Google CDN jQuery snippet from [HTML5 Boilerplate](http://html5boilerplate.com/)
* Google Analytics snippet from [HTML5 Boilerplate](http://html5boilerplate.com/)

See a complete working example in the [roots-example-project.com repo](https://github.com/roots/roots-example-project.com).

## Theme installation

Install Sage by copying the project into a new folder within your WordPress themes directory.

Make sure [Composer](https://getcomposer.org/download/) has been installed before moving on.

Install Sage using Composer from your WordPress themes directory (replace `your-theme-name` below with the name of your theme):

```shell
# @ example.com/site/web/app/themes/
$ composer create-project roots/sage your-theme-name 8.5.1
```

## Theme setup

Edit `lib/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, post formats, and sidebars.

## Theme development

Sage uses [gulp](http://gulpjs.com/) as its build system and [Bower](http://bower.io/) to manage front-end packages.

### Install gulp and Bower

Building the theme requires [node.js](http://nodejs.org/download/). We recommend you update to the latest version of npm: `npm install -g npm@latest`.

From the command line:

1. Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
2. Navigate to the theme directory, then run `npm install`
3. Run `bower install`

You now have all the necessary dependencies to run the build process.

### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

### Using BrowserSync

To use BrowserSync during `gulp watch` you need to update `devUrl` at the bottom of `assets/manifest.json` to reflect your local development hostname.

For example, if your local development URL is `http://project-name.dev` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://project-name.dev"
  }
...
```
If your local development URL looks like `http://localhost:8888/project-name/` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://localhost:8888/project-name/"
  }
...
```

## Documentation

Sage documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).

## Contributing

Contributions are welcome from everyone. We have [contributing guidelines](https://github.com/roots/guidelines/blob/master/CONTRIBUTING.md) to help you get started.

## Community

Keep track of development and community news.

* Participate on the [Roots Discourse](https://discourse.roots.io/)
* Follow [@rootswp on Twitter](https://twitter.com/rootswp)
* Read and subscribe to the [Roots Blog](https://roots.io/blog/)
* Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)
* Listen to the [Roots Radio podcast](https://roots.io/podcast/)
