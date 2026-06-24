# 🐾 Sistema PetShop MVC

Projeto web desenvolvido com PHP seguindo o padrão MVC, com CRUDs locais para clientes, pets e produtos, integração com API externa (ViaCEP) e MockAPI para feedbacks.

---

## 📋 Características

- ✅ CRUD completo de Clientes com banco PostgreSQL  
- ✅ CRUD completo de Pets com banco PostgreSQL  
- ✅ CRUD completo de Produtos com banco PostgreSQL  
- ✅ CRUD parcial de Feedbacks via MockAPI  
- ✅ Integração com API ViaCEP para preenchimento automático de endereço  
- ✅ Arquivo `.env` para configuração segura do banco de dados  
- ✅ Estrutura organizada em MVC (Model, View, Controller, DAO)  
- ✅ Interface moderna com CSS profissional e responsivo  
- ✅ Menu inicial (Dashboard) com navegação centralizada  

---

## 📁 Estrutura do Projeto

```text
PetShopWEB/
├── index.php
│
├── config/
│   ├── Database.php
│   └── .env.example
│
├── assets/
│   └── style.css
│
├── controller/
│   ├── ClienteController.php
│   ├── PetController.php
│   ├── ProdutoController.php
│   ├── ServicoController.php
│   └── FeedbackController.php
│
├── dao/
│   ├── ClienteDao.php
│   ├── PetDao.php
│   ├── ProdutoDao.php
│   └── ServicoDao.php
│
├── model/
│   ├── Cliente.php
│   ├── Pet.php
│   ├── Produto.php
│   └── Servico.php
│
├── sql/
│   └── creates.sql
│
└── view/
    ├── Clientes/
    │   ├── CadastraCliente.php
    │   ├── ListaCliente.php
    │   ├── EditaCliente.php
    │   └── DeletaCliente.php
    │
    ├── Pets/
    │   ├── CadastraPet.php
    │   ├── ListaPet.php
    │   ├── EditaPet.php
    │   └── DeletaPet.php
    │
    ├── Produtos/
    │   ├── CadastraProduto.php
    │   ├── ListaProduto.php
    │   ├── EditaProduto.php
    │   └── DeletaProduto.php
    │
    ├── Servicos/
    │   ├── CadastraServico.php
    │   ├── ListaServico.php
    │   ├── EditaServico.php
    │   └── DeletaServico.php
    │
    └── Feedbacks/
        ├── FeedbackCadastrar.php
        └── FeedbackLista.php
```

---

## 🛠️ Requisitos

- PHP 8+
- PostgreSQL
- Apache (XAMPP, Laragon ou VM da disciplina)
- Navegador moderno

---

## 📦 Instalação

### 1. Configurar ambiente

Copie:

```
.env.example → .env
```

Configure:

```env
DB_DRIVER=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_NAME=petshop
DB_USER=postgres
DB_PASS=sua_senha
```

---

### 2. Criar banco de dados

Execute:

```
sql/creates.sql
```

---

### 3. Rodar localmente

```
http://localhost/PetShopMVC/
```

---

### 4. VM da disciplina

```
/home/seu_usuario/public_html
```

Acesse:

```
http://177.44.248.29/seu_usuario/
```

---

## 🔐 Segurança

- Uso de `.env` para credenciais
- Arquivo `.env` NÃO deve ir para GitHub
- `.env.example` deve ser enviado

---

## 🌐 Funcionalidades

### 👤 Clientes
- CRUD completo + ViaCEP

### 🐶 Pets
- CRUD completo

### 📦 Produtos
- CRUD completo

### 💬 Feedbacks
- Cadastro e listagem via MockAPI

---

## ⚠️ Observação

Projeto desenvolvido para fins acadêmicos utilizando arquitetura MVC.

---

## 👨‍💻 Autor

Projeto desenvolvido para disciplina de Desenvolvimento Web.

---

## 📌 Status

✔ MVC estruturado  
✔ 3 CRUDs completos  
✔ 1 CRUD parcial (API)  
✔ Integração ViaCEP  
✔ Interface profissional  