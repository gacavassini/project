# Libellus

Este é o projeto designado ao TCC de Ana Paula e Gabrielly.

## Dependências
Se você está no windows, precisa apenas instalar o xampp e seguir as configurações padrão e, um editor de texto de sua preferência. Também vai precissar do git instalado na máquina para clonar o projeto, subir alterações e pegar as que forem enviadas para a master.

## Clonagem do repositório

1. Usando um cmd/terminal, entre na pasta que deseja clonar o projeto (se seguiu a instalação padrão), normalmente nesse caminho:
```bash
windows: C:\xampp\htdocs\
linux: /var/www/html/
```
2. Clone o projeto com:
```bash
git clone https://github.com/dgodiegocarvalho/Libellus.git
```

## Trabalhando com branches
Para criar uma nova branch
```bash
git checkout -b NOME_DA_BRANCH
```
Para subir a sua branch para a master e criar uma merge request
```bash
git push --set-upstream origin NOME_DA_BRANCH
```
Quando sua change request for aprovada, volte para a master e atualize ela
```bash
git checkout master
git pull
```