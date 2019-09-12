# SilverStripe TreeDropdownField Bug

`TreeDropdownField` fails to load items when `TreeBaseID` is set.

## Setup

1. `vagrant up`
2. `sudo php-switch 7.1`
3. `composer install`
4. `sspak load testcase.sspak`

## Steps to reproduce the issue

1. Login to the CMS with `admin` / `admin`
2. Navigate to the "Example" model admin
3. Edit the "My Example" item
4. Expand the "Place" dropdown
5. Show the child items for "Te Aro" by clicking the right arrow button

### Expected behaviour

Child items are loaded.

### Actual behaviour

Child items fail to load and no options are selectable.
