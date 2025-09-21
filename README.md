# Force Pagetemplate Item Plugin

Selects Item as default page template when adding a page via the admin plugin.

The **Force Pagetemplate Item** Plugin is an extension for [Grav CMS](https://github.com/getgrav/grav). Selects Item as default page template when adding a new page

## Installation

Installing the Force Pagetemplate Item plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](https://learn.getgrav.org/cli-console/grav-cli-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install force-pagetemplate-item

This will install the Force Pagetemplate Item plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/force-pagetemplate-item`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `force-pagetemplate-item`. You can find these files on [GitHub](https://github.com/geraetefreund/grav-plugin-force-pagetemplate-item) or via [GetGrav.org](https://getgrav.org/downloads/plugins).

You should now have all the plugin files under

    /your/site/grav/user/plugins/force-pagetemplate-item
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/geraetefreund/grav-plugin-force-pagetemplate-item/blob/main/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/force-pagetemplate-item/force-pagetemplate-item.yaml` to `user/config/plugins/force-pagetemplate-item.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named force-pagetemplate-item.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

When adding a page via the admin panel, the default page template for select from inside the modal defaulted to the first item in the alphabetical list of page templates, i.e. Blog. This plugin pre-selects Item instead, simply for convenience.

## To Do

- Make plugin available via gpm?  

