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

```json
{
    "name": "cta/wufoo",
    "type": "vcs",
    "url": "https://github.com/cta-int/wufoo.git"
}
```

The require section should contain the following line:

```json
    "cta/wufoo": "1.0.*",
```

Afterward, just run `composer update` from the root of your Joomla project. Please make sure that the Moyo components described above are to be added as well.

### jsymlinker

Another option, currently only available for Moyo developers, is by using the jsymlink script from the [Moyo Git
Tools](https://github.com/derjoachim/moyo-git-tools).

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
