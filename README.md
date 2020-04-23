# opencensus-phpstorm-plugin

[![Build Status](https://travis-ci.org/sbacheld/opencensus-phpstorm-plugin.svg?branch=master)](https://travis-ci.org/sbacheld/opencensus-phpstorm-plugin.svg?branch=master)

A PhpStorm plugin that provides function signatures for the [OpenCensus PHP extension](https://github.com/census-instrumentation/opencensus-php).
The plugin can be downloaded from the [JetBrains Plugins Repository](https://plugins.jetbrains.com/plugin/14175-opencensus-php-extension-support).

## Building

Run the following command to generate a JAR file.
```bash
make build
```

## Installing

The plugin plugin can be installed from disk by following instructions here:
https://www.jetbrains.com/help/phpstorm/managing-plugins.html#install_plugin_from_disk.

## Deploying

Run the following command to deploy the JAR file to the Jetbrains plugin repository. You will need the
PLUGIN_UPLOAD_TOKEN environment variable set.

```bash
make deploy
```
