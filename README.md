# Negaça Website

## For administrators

### Making a new page

You can either add a simple page with information, links and images (`Default`) or a page made up of snippets (`Modular`).

There are several types of modular sections:

* Section - just a titled section with a blank background
* Panels - a section showing up as panels on a brown background
* Jumbo - when you drop an image to this page, it will become a nice background (recommended size: 1440x960)
* People - images (recommended size: 200x200) become circular sepia portraits and the name is used as a title

NOTE: the first modular needs to be called `top` for the menu to work correctly

### The menu

A page has a `title` and a `menu` title which can be different, e.g.:

    title: 'About Negaça'
    menu: about

#### Scrollspy

If your page contains sections you would like to appear on the menu, you need to define them in the page header as such, e.g.:

    title: Home
    menu: Home
    spy_items: 'classes children info'

### Hiding a page

You can hide a page from the menu without deleting it. Click on the page, got to the Advanced tab, under Overrides, check the Visible box and turn the switch to Disabled. You can still visit the page by typing its url, you just won't see it in the menu.

## For developers

### Making changes to the code

This website works with [Grav](https://getgrav.org/). The following instructions will guide you through making a proper versioned copy of this repository on your computer, making and viewing changes locally and suggesting them back to the original repository.

* If you don't have a GitHub account, [create one](https://github.com/join) first
* Click on "Fork" on the top right. This will add a copy of the repository to your account for you to make changes.
* Download [GitHub Desktop](https://desktop.github.com/)
* Install and add GitHub Desktop to your Applications
* Open GitHub Desktop and click on the GitHub Desktop menu > Preferences > Accounts > login to your github.com account
* Click on the `+` button, click on the "Clone" tab and select "stathisforeva" (your forked version of this repository)
* You now have a versioned copy of the website on your local computer! To start playing around, open Documents > workspace > negaca\_grav in your favourite editor and make changes
* To see your changes, you need to install a local web server (e.g. Apache with PHP 5.5+). See [Grav's requirements](https://learn.getgrav.org/basics/requirements)
* When you're happy with your changes, go back to GitHub Desktop, review your changes, write a summary of what you've done and click on "Commit to master"

### To suggest changes back

To contribute your changes back to the main repository:

* In GitHub Desktop click on "Pull Request" on the top right
* Make a Pull Request with your commits

### Installing resources

    curl -sS https://getcomposer.org/installer | php56
    php56 bin/composer.phar install --no-dev -o

This will create the `vendor` directory with all php dependencies

You may also have to run

    git clean -xfd
    php56 bin/grav install

To update GRAV and plugins run:

    php56 bin/gpm selfupgrade -f
    php56 bin/grav install

#### Adding external css

You can use `bower` in the custom theme to add external css to the site. Add you dependency in

    user/themes/bootgrav-custom/bower.json

and then do

    bower install

You can use the installed css in your twig templates as, e.g.

    {% do assets.add('theme://bower/bootstrap-social/bootstrap-social.css',100) %}

### Snippets used

* [social icons](http://bootsnipp.com/snippets/3kQrB)
* [fancybox](http://bootsnipp.com/snippets/featured/image-gallery-with-fancybox)

### User management

Make a new user:

    php56 ./bin/plugin login newuser

Change a password:

    php56 ./bin/plugin login newpass

### Making the batizado page

1. In the Admin, go to a previous batizado page tree and click Copy
2. Go back to Pages. You'll see the new batizado page tree. Edit the subpages with the new info
3. To add a new background image, go to the "top" subpage and drop a new 1440x960 image in the page media. Delete the previous background image.
4. In the "special guests" subpage, edit the list and add 200x200 images in the page media. Those will be shown as thumbnails. You can also re-order the images by dragging and dropping in the page media.
5. To edit the paypal payment, make changes in the "capoeira festival" page. This code is in html. You need to make the same changes in the paypal account (username: negaca@capoeiracambridge.co.uk). Login and go to Tools -> PayPal Buttons. Copy a previous button to make a new one.
6. Edit the student payment page including the paypal html. Same as above.

