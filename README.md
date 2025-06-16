# TYPO3 Mautic Form Extension

Seamlessly integrate Mautic forms into your TYPO3 installation.

## 🚀 Features
* Adds a new content element: **Mautic Form**
* Easy configuration via TYPO3 backend
* Direct rendering of Mautic forms by specifying:
    * **Mautic Server URL**
    * **Mautic Form ID**
* No TypoScript inclusion required
* Fully compatible with TYPO3 v12 (1.x branch)
* Composer-ready

## 📦 Installation
### Composer (recommended)
For TYPO3 installations using Composer, simply run:

- composer require leuchtfeuer/typo3-mautic-form

### Post-Installation
1. Apply database schema updates in the **Maintenance module** (TYPO3 backend).
2. The extension works out-of-the-box — no TypoScript setup needed.

## ⚙️ Requirements
* TYPO3 v12.x
* Mautic instance with accessible forms

## 📝 Usage
1. In the TYPO3 backend, create a new content element.
2. Select the **Mautic Form** element type.
3. Enter:
    * The full URL of your Mautic server (e.g., `https://mautic.example.com`)
    * The Form ID you want to embed.
4. Save — the form will render directly on your TYPO3 page.

## 🐞 Issues
If you encounter any issues, feel free to open an issue:

- [GitHub Issues](https://github.com/Leuchtfeuer/typo3-mautic-form/issues)

## 🙏 Credits
Developed and maintained by Leuchtfeuer Digital Marketing  
Inspired by the need for simple Mautic integration into TYPO3.