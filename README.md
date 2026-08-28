# EXERCICIOSPHP
Criado apenas para fins de traqueamento dos meus exercícios em PHP 8
#falta exercicios 28/08/2026

Crie um enum StatusPedido (backed, tipo string) com pelo menos 3 casos e um
método que devolve um rótulo legível pra cada caso usando match($this) . Teste from() ,
tryFrom() com valor inválido, e cases() .

Crie SaldoInsuficienteException extends RuntimeException . Escreva
sacar(float $saldo, float $valor) que lança essa exceção quando o valor pedido é maior
que o saldo, e capture com um catch especíﬁco pra ela e um catch (Throwable $e)
genérico por baixo.

Crie um form.php com formulário HTML (POST, um campo) e um processa.php que
lê com $_POST , valida com filter_input , e imprime o resultado. Rode com php -S
localhost:8000 .

Simule receber um corpo JSON: leia com file_get_contents('php://input') , teste
com curl -X POST -d '{"nome":"Ana"}' localhost:8000/script.php -H "Content-Type:
application/json" , e valide com json_decode + json_last_error() .

Use SQLite (não precisa de servidor — DSN sqlite:banco.db ) ou MySQL local, crie
uma tabela usuarios (id, nome, email), e escreva um script PHP que conecta via PDO e faz
um INSERT com prepared statement, pegando o lastInsertId() .

No mesmo banco, escreva um SELECT com fetchAll() e um UPDATE com
rowCount() ; depois envolva os dois numa transação ( beginTransaction , commit , rollBack
no catch )
