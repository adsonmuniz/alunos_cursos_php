# Diretórios
## Pequeno projeto web para criação de diretórios virtuais

### Rodar o programa
Necessário instalar os programas:
- MySQL
- Xampp
1) Após instalar o Xampp e o MySQL, desligar o serviço MySQL80 no services.msc, abrir na pasta do Xampp o executável xampp-control.exe. Executar o Apache e o MySQL.
2) Baixe o phpMyAdmin4 (https://www.phpmyadmin.net/). Extrair o conteúdo e colocar na pasta do Xampp (../xampp/). Para facilitar ao extrair o conteúdo deixe a pasta com o nome phpMyAdmin.
3) Na pasta do phpMyAdmin, procure o arquivo config.sample.inc.php e renomear para config.inc.php. Abrir o arquivo com editor de texto e modificar o valor da linha $cfg['Servers'][$i]['AllowNoPassword'] para true.
4) Fazer o download do ZIP do projeto em "https://github.com/adsonmuniz/alunos_cursos_php". Na pasta "../xampp/htdocs/" colar o conteúdo do download, renomeando a pasta de "alunos_cursos_php-master" para "alunos_cursos_php".
5) No terminal do navegador, digitar e abrir o caminho "localhost/phpMyAdmin", inserir o usuário root e Executar. No menu superior, clicar na guiar SQL, copiar e colar o conteúdo do arquivo "../alunos_cursos_php/scripts/scripts_create.sql" do projeto. Por fim, execute o código SQL.
6) Pronto, agora no navegador digite "localhost/alunos_cursos_php".
7) Para acessar o sistema use o login 'admin' e senha '12345'.
