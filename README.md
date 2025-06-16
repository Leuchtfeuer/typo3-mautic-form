# EXT:typo3_mautic_form – TYPO3 v12 Compatibility

This TYPO3 extension integrates Mautic forms into TYPO3 installations. <br>
Compatible with TYPO3 v12 (version 1.x), it allows editors to create a content element called Mautic Form. <br>
By specifying a Mautic Form ID and the Mautic Server URL, the content element renders the corresponding Mautic form directly within TYPO3 pages.

## Quickstart

### Checkout

First, place the typo3-mautic-form extension into the /packages directory:

- `cd /packages`
- `cd typo3-mautic-form`

### Install

Start the DDEV project and install the extension via Composer::

- `composer require leuchtfeuer/typo3-mautic-formular:@dev`


### After Installing

- Make sure to apply the database schema changes in the Maintenance module.
- TypoScript inclusion is not required.



