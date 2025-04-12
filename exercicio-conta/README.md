# 💰 Exercício — Classe Conta Bancária

Este exercício tem como objetivo praticar os fundamentos da **Programação Orientada a Objetos (POO)** em PHP, por meio da criação de uma classe `ContaBanco` que simula as funcionalidades básicas de uma conta bancária, como depósito, saque e pagamento de mensalidade, associando um **cliente** a cada conta.

---

## 📌 Descrição

Neste exercício, foram criadas duas classes principais: 

### 🧑‍💼 **Classe Cliente**
A **classe `Cliente`** tem como atributos:

- `nome`
- `cpf`
- `telefone`

Ela também contém **getters e setters** para acessar e modificar esses atributos, permitindo o controle de dados pessoais de um cliente.

### 💳 **Classe ContaBancaria**
A **classe `ContaBancaria`** possui os seguintes atributos:

- `numConta` (número da conta bancária)
- `tipo` (tipo da conta: corrente ou poupança)
- `dono` (objeto da classe `Cliente` que representa o titular da conta)
- `saldo` (saldo da conta)
- `status` (indica se a conta está ativa ou fechada)

Além disso, a classe `ContaBancaria` contém métodos para:

- **Abrir Conta**: Define o tipo da conta (CC ou CP), o saldo inicial (50 para contas correntes, 150 para poupanças) e o status da conta.
- **Fechar Conta**: Permite o fechamento da conta, desde que o saldo seja zero.
- **Depositar**: Adiciona valor ao saldo da conta.
- **Sacar**: Retira valor do saldo, se houver saldo suficiente.
- **Pagar Mensalidade**: Deduz o valor da mensalidade, dependendo do tipo da conta.

---

## 🧠 O que foi aprendido

✔️ Como declarar classes em PHP  
✔️ Atributos e métodos, incluindo **getters** e **setters**  
✔️ Visibilidade de atributos e métodos (`public`, `private`, `protected`)  
✔️ Como instanciar objetos e interagir entre classes  
✔️ Lógica de controle de saldo e operações bancárias  

---

## 📂 Estrutura

exercicio-conta/  
├── index.php # Arquivo principal para execução do exercício  
├── ContaBancaria.php # Classe que define a conta bancária e suas operações  
├── Cliente.php # Classe que representa o cliente da conta

---

## ▶️ Como executar

1. Certifique-se de ter o PHP instalado em sua máquina.
2. Navegue até a pasta do exercício:

```bash
cd phpPOO/exercicio-conta
```

3. Execute o script:

```bash
php index.php
```

O script simula as operações bancárias com as contas e clientes criados, exibindo a evolução do saldo e o status das contas.

---

## 🧪 Exemplo de Saída

```text
Conta de CC aberta com sucesso para João!
Depósito de R$ 1000 realizado com sucesso!
Saque de R$ 500 realizado com sucesso!
Mensalidade de R$ 12 paga com sucesso!
Conta de João fechada com sucesso!
```

---

## 💡 Curiosidade
Este exercício simula o comportamento de uma conta bancária utilizando os conceitos da Programação Orientada a Objetos. Ele permite praticar o encapsulamento, controle de estado de objetos e interações entre classes, como a associação entre a classe ContaBancaria e a classe Cliente.

---

## 👨‍💻 Autor
Desenvolvido por João Victor — baseado nos exercícios do C[Curso em Vídeo - PHP](https://www.cursoemvideo.com/curso/php-poo/)