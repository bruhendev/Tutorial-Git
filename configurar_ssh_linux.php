<?php 


echo 'CONFIGURAR USUÁRIO

git config --global user.name "nome do usuário"
git config --global user.email "emaildousuario@teste.com"

GERANDO CHAVE SSH
ssh-keygen -t rsa -b 4096 -C "emaildousuario@teste.com"

CLONANDO UM REPOSITÓRIO JÁ CRIADO NO SERVIDOR REMOTO

git clone origin git@gitlab (seu endereço ssh remoto)

CRIANDO REPOSITÓRIO LOCAL PARA DEPOIS SUBIR NO REMOTO

git init
git remote add origin git@gitlab (seu endereço ssh remoto)

PRA EMPACOTAR AS ALTERAÇÕES
git add . (para todos os arquivos alterados)
git add nome-do-arquivo (se quiser empacotar só um arquivo na alteração)

git commit -m "Mensagem do commit, o que foi alterado"

git push origin master (joga suas alterações no servidor remoto)


BUSCA AS INFORMAÇÕES DO SERVIDOR REMOTO

git pull origin master ';