# Negaça Website

## For administrators

Pending

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
    php56 bin/composer.phar install

This will create the `vendor` directory with all php dependencies

You may also have to run

    bin/grav install


#### Adding external css

You can use `bower` in the custom theme to add external css to the site. Add you dependency in

    user/themes/bootgrav-custom/bower.json

and then do

    bower install

You can use the installed css in your twig templates as, e.g.

    {% do assets.add('theme://bower/bootstrap-social/bootstrap-social.css',100) %}

