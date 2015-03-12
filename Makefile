# Description: Makefile
APP_PATH="/home/work/users/wangbo09/odp/app/app/zhidahao"
CONF_PATH="/home/work/users/wangbo09/odp/app/conf/app/zhidahao"
WEBROOT_PATH="/home/work/users/wangbo09/odp/app/webroot/zhidahao"
API_PATH="/home/work/users/wangbo09/odp/app/php/phplib/dpp/api/zhidahao"
LOG_PATH = "/home/work/users/wangbo09/odp/app/log/zhidahao"
DATA_PATH = "/home/work/users/wangbo09/odp/app/data/app/zhidahao"
DEV_PC="wangbo09@cp01-rdqa-dev138.cp01"
APP_SRC_FILE=actions Bootstrap.php controllers library models script test

dev_pc:
	@ssh $(DEV_PC) "rm -rf $(APP_PATH).bak $(CONF_PATH).bak $(WEBROOT_PATH).bak $(API_PATH).bak; mv $(APP_PATH) $(APP_PATH).bak; mkdir -p $(APP_PATH); mv $(CONF_PATH) $(CONF_PATH).bak; mkdir -p $(CONF_PATH); mv $(WEBROOT_PATH) $(WEBROOT_PATH).bak; mkdir -p $(WEBROOT_PATH); mv $(API_PATH) $(API_PATH).bak; mkdir -p $(API_PATH); mkdir -p $(LOG_PATH);mkdir -p $(DATA_PATH);"
	scp -r $(APP_SRC_FILE) $(DEV_PC):$(APP_PATH)
	scp -r conf/zhidahao/* $(DEV_PC):$(CONF_PATH)
	scp -r index.php $(DEV_PC):$(WEBROOT_PATH)
	scp -r api/* $(DEV_PC):$(API_PATH)
	@ssh $(DEV_PC) "cd $(CONF_PATH); find ./ -type d -name .svn|xargs -i rm -rf {};"
	@ssh $(DEV_PC) "cd $(APP_PATH); find ./ -type d -name .svn|xargs -i rm -rf {};"
	@ssh $(DEV_PC) "cd $(API_PATH); find ./ -type d -name .svn|xargs -i rm -rf {};"
	