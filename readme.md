# Teste Programador PHP - SegPartners Brasil

## Objetivo

Desenvolver a classe `Calculo` dentro do Namespace `SegPartners`

A classe `Calculo` deve receber no construtor uma `string` no formato `R$ 1.234,56` e implementar os métodos abaixo:

- `valor()`
- `somar($valor)`
- `formatar()`

### Construtor(string $valor)
Deve receber uma string representando um valor monetário no formato `R$ 1.234,56`

### `Valor()`
Deve retornar o valor recebido no construtor em formato `float` Ex: `1234.56`

### `somar(float $valor)`
Deve receber um valor em `float` e somar ao valor inicial recebido no construtor, o metódo `valor()` deve passar a retonar o valor somado. Ex: executar o método `somar(1.07)` deve retornar `1235.63` no método `valor()`

### `formatar()`
Deve retornar uma string formatada do valor armazenado no formato `R$ 1.234,56`, Ex: executar o método `formatar()` após o construtor deve retornar `R$ 1.234,56`, após executar o método `somar(1.07)` o método `formatar()` deve retornar o valor `R$ 1.235,63`.

## Ferramentas necessárias

- php 8.0+
- Git
- Composer
