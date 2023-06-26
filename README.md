# Projeto DesempreGados

<p>
    <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" />
    <img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white" />
    <img src="https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white" />
</p>

## App de listagem de empregos desenvolvido no framework Laravel

Um app para que bovinos possam ser desempregados, criado a partir de uma piada, este projeto realizado para aprender o framework Laravel seguindo o tutorial "[Laravel From Scratch 2022](https://www.youtube.com/watch?v=MYyJ4PuL4pY)"

<p  align="center"><a>
    <img align="center" src="/public/images/tela1.png" width="400" />
</a>
<a>
    <img align="center" src="/public/images/tela3.png" width="400" />
</a></p>

O repositório com o projeto original pode ser encontrado [aqui](https://github.com/bradtraversy/laragigs)

## Funcionalidades

O app possui funcionalidades básicas (CRUD) para as listagens de emprego:

-   Criação da listagem de emprego;
-   Visualização da página com a listagem;
-   Página para gerenciar as listagens criadas (modificar e excluir)

Também foi implementada a criação de usuários e autenticação com e-mail e senha.

Este é o mapa do app, onde as páginas são os retângulos e os hexágonos são ações que podem ser realizadas.
<img width="400" src="https://github.com/Riko07br/DesempreGados/assets/65051970/0d373486-3d8b-481f-b832-a16a1a7d4147" />

## Como usar

O projeto usa MySQL. Caso queria usar outro banco de dados, altere o config/Database.php alterando o default.

```
'default' => env('DB_CONNECTION', 'mysql'),
```

-   Para usar o MySQL, basta ter ele instalado e colocar as credenciais (user e password) no arquivo .env.example e renomeá-lo para .env
-   Para criar as tabelas e colunas basta executar `php artisan migrate` no terminal
-   Para gerar dados e preenche as tabelas com dados aleatórios `php artisan db:seed`

## License

The DesempreGados app is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
