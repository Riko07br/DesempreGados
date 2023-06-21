## Projeto DesempreGados

Um app para que bovinos possam ser desempregados, criado a partir de uma piada, este projeto realizado para aprender o framework Laravel seguindo o tutorial "[Laravel From Scratch 2022](https://www.youtube.com/watch?v=MYyJ4PuL4pY)"

O repositório com o projeto original pode ser encontrado [aqui](https://github.com/bradtraversy/laragigs)

## Como usar

### Banco de dados
O projeto usa MySQL. Caso queria usar outro banco de dados, altere o config/Database.php alterando o default.
```
'default' => env('DB_CONNECTION', 'mysql'),
```
Para usar o MySQL, basta ter ele instalado e colocar as credenciais (user e password) no arquivo .env.example e renomeá-lo para .env

### Migrations
Para criar as tabelas e colunas basta executar o comando no terminal
```
php artisan migrate
```

### Seeding The Database
Esse comando gera dados e preenche as tabelas com dados aleatórios
```
php artisan db:seed
```

## License

The DesempreGados app is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
