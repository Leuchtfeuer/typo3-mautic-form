# Lightweight TYPO3 Mautic Form Plugin by Leuchtfeuer

* Seamlessly integrates forms generated in [Mautic](https://mautic.org) Open Source Marketing Automation. 
* Does not require API / OAuth setup, mtc.js tracking code, cookies or anything else.
* Avoids the need for using the "Plain HTML" content element (= avoids security concerns).



## Installation
### Composer (recommended)
For TYPO3 installations using Composer, simply run:

- composer require leuchtfeuer/typo3-mautic-form

### Post-Installation
1. **Apply database schema updates** in the Maintenance module (TYPO3 backend).

That's it. No TypoScript setup needed.

## Requirements
* TYPO3 v12.x
* Mautic with your prepared form. You need to know the desired form by ID!

## Usage
1. In the TYPO3 backend, go to the intended page and create a new content element of type **Mautic Form** (plugin)
2. Enter:
    * The hostname of your Mautic server (e.g. `mautic.example.com`) - maybe followed by a path segment (e.g. `www.example.com/mautic`)
    * The Form ID you want to embed.
3. Save


## Known Limitations, Future Directions
Known Limitations

* none

Ideas / Future Directions

* Allow configuration of a default Mautic Server 
* Allow configuration of multiple Mautic Servers, with dropdown to select from in the plugin
* pre-fetching or caching of Form HTML by TYPO3 (but there would be limitations where JS is still needed, e.g. Captchas)


## Reporting Issues and Ideas
If you encounter any issues or have other requests, feel free to open an issue:

- [GitHub Issues](https://github.com/Leuchtfeuer/typo3-mautic-form/issues)

## Author and Credits
Developed and maintained by [Leuchtfeuer Digital Marketing](https://Leuchtfeuer.com/typo3-cms), Hannover, Germany