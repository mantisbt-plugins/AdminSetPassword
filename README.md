# AdminSetPassword for MantisBT

This plugin for MantisBT allows administrators to set a new password directly
on the Edit User page.

## Requirements
Works with MantisBT 2.*.
Tested with MantisBT 2.22.0

### Unsupported Legacy Releases

- MantisBT 1.2.x - use version [0.1.2](https://github.com/mantisbt-plugins/AdminSetPassword/releases/tag/v0.1.2)
- MantisBT 1.3.x - no available compatible version

## Description

If you installed this plugin, you get a password input field on `manage_user_edit_page.php`
and a button to set the new password - that's all.

No configuration options, no config page. And nothing to patch in your mantis installation.

### Screenshot
![AdminSetPassword Field](./assets/screenshot.png)

## Support

File a bug report or ask questions on [GitHub](http://github.com/mantisbt-plugins/AdminSetPassword/issues).

## Changelog
### 1.0.0
* Ready for MantisBT Version 2.*

### 0.1.2
- Removed trailing `1` caused by return value of include function

### 0.1.1
* Initial release by [Heiko Schneider-Lange](https://github.com/langerheiko)
