Banco de Dados
- [Banco de dados do Desafio](https://drive.google.com/file/d/1YsStFYIctBCBQemS9i2V8vyKNkQRpBnq/view?usp=sharing).

Login ADMIN:
- email: admin@gmail.com
- senha: senha

Rotas da API:
[ POST ]   /api/login
------------> Requer os campos email e password
[ POST ]   /api/register
------------> Requer os campos name, email, password e c_password (confirmação de senha). Disponível apenas para usuários autorizados.
[ GET ]    /api/users
------------> Só possível para usuários autenticados e autorizados
[ GET ]    /api/users/{id}
------------> Só possível para usuários autenticados e autorizados
[ PUT ]    /api/users/{id}
------------> Só possível para usuários autenticados e autorizados
[ DELETE ] /api/users/{id}
------------> Só possível para usuários autenticados e autorizados
[ PUT ]    /users/{id}/reset_password
------------> Requer o campo password. Só possível para usuários autenticados e autorizados
