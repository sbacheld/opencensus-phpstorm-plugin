PLUGIN_ID=14175

build:
	@echo "Building plugin"
	cd plugin; zip -r ../opencensus-phpstorm-plugin.jar *

deploy:
	@echo "Deploying plugin"
	curl -i --header "Authorization: Bearer $(PLUGIN_UPLOAD_TOKEN)" -F pluginId=$(PLUGIN_ID) -F file=@opencensus-phpstorm-plugin.jar https://plugins.jetbrains.com/plugin/uploadPlugin
