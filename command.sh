git init

git config core.fileMode false
git config core.autocrlf false

git add .
git commit -m "'$1'"

git rm -r --cached .
git add .
git commit -m "'$1'"

git pull origin master

chmod -R 777 ../keeraanakaro.com/
chown -R www-data:www-data ../keeraanakaro.com/

git push origin HEAD:master
