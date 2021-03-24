php gerar.php
clear
git status
echo "Commit..."
git add -A
echo "Escreva a mensagem do commit:"
read mensagem
if [ -z "$mensagem" ]
    then
        clear
        echo "commit: $mensagem"
        git commit -m "$(git status --porcelain)"
    else
        clear
        echo "commit: $mensagem"
        git commit -m "$mensagem"
fi
git push origin master
