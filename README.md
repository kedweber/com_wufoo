# com_wufoo

## Description

This is a wrapper component for [Wufoo](http://wufoo.com). Wufoo is an online application for building online forms. The
submitted content is saved in a remote database. When applicable, form contents will be sent to the user by mail.

One of our clients has a number of wufoo forms that are shared among their websites. Instead of doing the upkeep for each
website, he only has to edit the Wufoo form.

The `com_wufoo` component creates a wufoo form within a Joomla! page and does the message handling after the end user is
done filling in the form.

## Requirements

* Joomla 3.X . Untested in Joomla 2.5.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Composer
* Moyo Components
    * com_cck
    * com_moyo
    * com_eventbrite

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories section:

from this repository;

```json
{
    "name": "moyo/wufoo",
    "type": "vcs",
    "url": "https://github.com/kedweber/com_wufoo.git"
}
```

or alternatively here;

```json
{
    "name": "moyo/wufoo",
    "type": "vcs",
    "url": "https://github.com/moyoweb/com_wufoo.git"
}
```

The require section should contain the following line:

```json
    "moyo/com_wufoo": "1.0.*",
```

Afterwards, one just needs to run the command `composer update` from the root of your Joomla project. This will 
effectively create a `composer.lock` file which will contain the collected dependencies and the hash codes for 
each latest release \(depending on the require section's format\) for each particular repo. Should installations 
problems occur due to a bad ordering of the dependencies, one may need to go into the lock file and manualy change 
the order of the components. Running `composer update` again will again cause a reordering of the lock file, beware of 
this factor when running an update. Thereafter, you can run the command `composer install`. 

If you have not setup an alias to use the command composer, then you will need to replace the word composer in the previous commands with the 
commands with `php composer.phar` followed by the desired action \(eg. update or install\).

### jsymlinker

Another option is to run the [jsymlink script](https://github.com/derjoachim/moyo-git-tools) in the root folder, available via the original Moyo developer, Joachim van de Haterd's repository, under 
the [Moyo Git Tools](https://github.com/derjoachim/moyo-git-tools).

#### License jsymlinker

The joomlatools/installer plugin is free and open-source software licensed under the [GPLv3 license](https://github.com/derjoachim/joomla-composer/blob/develop/gplv3-license).

## Usage

The content manager can reach the Wufoo management tool by opening the Wufoo component from the backend menu
'Components >> Wufoo'. The Wufoo form items are displayed.

A wufoo form needs the following fields:

* **Title** Self-explanatory
* **Slug** Auto-generated
* **Form** Listbox that contains all Wufoo forms by account holder
* **Show Titles** Lists all titles in Wufoo form
* **Submit Button** Text to be displayed on submit button
* **Success Message** HTML to be shown upon successful submit
* **Error Message** HTML to be shown upon error.

### Adding a Wufoo form

A Wufoo form can be added to the menu by creating a menu item with type 'Wufoo form'. In the 'Details' tab, the user
can select the form te be displayed. 

## TODO

* Make `com_wufoo` more configurable by adding an accounts / APIs view. As yet, the wufoo account data are hardcoded.
