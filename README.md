# baseApiPhp
Base para api simples. "Posso melhora-la ao longo do tempo"

# Requisitos do sistema após clone!
->Php instalado href="https://www.php.net/downloads.php"
->Composer instalado href="https://getcomposer.org/doc/00-intro.md"

# Inicialização do sistema!
->composer dumpauto.
->Possuir um htacces redirecionando direto para o index, dependendo do projeto.
# Exemplo Xampp
.htaccess localizado em => C:\xampp\htdocs\

Options -Indexes
RewriteEngine on
RewriteRule ^(.*)?$ basePhp/public/index.php [L]

**Trocar credenciais.**

{
    "name" : "clayton/base-api",
    "autoload": {
        "psr-4": {
            "App\\" : "app/"
        }
    },
    "authors": [
        {
            "name": "Clayton Charles Silva Neres",
            "email": "claydevfull@gmail.com"
        }
    ]
}

-> Altere acima para seus dados, localizado em composer.json.
