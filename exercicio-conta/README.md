# 💰 Exercício — Classe Conta Bancária

Este exercício tem como objetivo praticar os fundamentos da **Programação Orientada a Objetos (POO)** em PHP, por meio da criação de uma classe `ContaBancaria` que simula as funcionalidades básicas de uma conta bancária, como depósito, saque e pagamento de mensalidade, associando um **cliente** a cada conta.

---

## 📌 Descrição

Neste exercício, foram criadas duas classes principais:

### 🧑‍💼 Classe `Cliente`

A classe `Cliente` possui os seguintes atributos:

- `nome`
- `cpf`
- `telefone`

Ela também contém **getters e setters** para acessar e modificar esses atributos, permitindo o controle dos dados pessoais de um cliente.

### 💳 Classe `ContaBancaria`

A classe `ContaBancaria` possui os seguintes atributos:

- `numConta` — número da conta bancária  
- `tipo` — tipo da conta (corrente ou poupança)  
- `dono` — objeto da classe `Cliente` que representa o titular  
- `saldo` — valor atual disponível  
- `status` — indica se a conta está ativa ou encerrada  

Além disso, inclui métodos para:

- **Abrir conta** — define o tipo da conta e saldo inicial (R$50 para CC, R$150 para CP)  
- **Fechar conta** — permite encerrar apenas contas com saldo zerado  
- **Depositar** — adiciona um valor ao saldo  
- **Sacar** — retira um valor do saldo, se houver fundos  
- **Pagar mensalidade** — desconto mensal conforme o tipo de conta  

---

## 🧠 O que foi aprendido

✔️ Criação de classes e objetos em PHP  
✔️ Uso de visibilidade (`public`, `private`, `protected`)  
✔️ Getters e setters para acesso controlado  
✔️ Métodos construtores e manipulação de atributos  
✔️ Encapsulamento e interação entre objetos  

---

## 📁 Estrutura de Arquivos

exercicio-conta/  
├── index.php # Arquivo principal para execução do exercício  
├── ContaBancaria.php # Classe que define a conta bancária e suas operações  
├── Cliente.php # Classe que representa o cliente da conta  
├── style.css # Estilo escuro e moderno para apresentação

---

## ▶️ Como executar

1. Certifique-se de ter o PHP instalado em sua máquina.
Digite no terminal:
```bash
php -v
```

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