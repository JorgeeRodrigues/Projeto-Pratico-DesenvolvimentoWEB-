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

📁 PetShopWEB/
│
├── 📄 index.php
│
├── 📁 config/
│   ├── 📄 Database.php
│   └── 📄 .env.example
│
├── 📁 assets/
│   └── 📄 style.css
│
├── 📁 controller/
│   ├── 📄 ClienteController.php
│   ├── 📄 PetController.php
│   ├── 📄 ProdutoController.php
│   ├── 📄 ServicoController.php
│   └── 📄 FeedbackController.php
│
├── 📁 dao/
│   ├── 📄 ClienteDao.php
│   ├── 📄 PetDao.php
│   ├── 📄 ProdutoDao.php
│   └── 📄 ServicoDao.php
│
├── 📁 model/
│   ├── 📄 Cliente.php
│   ├── 📄 Pet.php
│   ├── 📄 Produto.php
│   └── 📄 Servico.php
│
├── 📁 sql/
│   └── 📄 creates.sql
│
└── 📁 view/
    │
    ├── 📁 Clientes/
    │   ├── 📄 CadastraCliente.php
    │   ├── 📄 ListaCliente.php
    │   ├── 📄 EditaCliente.php
    │   └── 📄 DeletaCliente.php
    │
    ├── 📁 Pets/
    │   ├── 📄 CadastraPet.php
    │   ├── 📄 ListaPet.php
    │   ├── 📄 EditaPet.php
    │   └── 📄 DeletaPet.php
    │
    ├── 📁 Produtos/
    │   ├── 📄 CadastraProduto.php
    │   ├── 📄 ListaProduto.php
    │   ├── 📄 EditaProduto.php
    │   └── 📄 DeletaProduto.php
    │
    ├── 📁 Servicos/
    │   ├── 📄 CadastraServico.php
    │   ├── 📄 ListaServico.php
    │   ├── 📄 EditaServico.php
    │   └── 📄 DeletaServico.php
    │
    └── 📁 Feedbacks/
        ├── 📄 FeedbackCadastrar.php
        └── 📄 FeedbackLista.php


---

## 🛠️ Requisitos

- PHP 8+
- PostgreSQL
- Apache (XAMPP, Laragon ou VM da disciplina)
- Navegador moderno

---

## 📦 Instalação

### 1. Configurar ambiente
Copie o arquivo:


.env.example → .env


E configure as credenciais do banco:


DB_DRIVER=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_NAME=petshop
DB_USER=postgres
DB_PASS=sua_senha


---

### 2. Criar banco de dados
Execute o script:


sql/creates.sql


no PostgreSQL.

---

### 3. Rodar o sistema localmente

Se estiver usando XAMPP:


http://localhost/PetShopMVC/


---

### 4. Publicação na VM (se aplicável)

Coloque o projeto na pasta:


/home/seu_usuario/public_html


Acesse via:


http://177.44.248.29/seu_usuario/


---

## 🔐 Variáveis de Ambiente

O projeto utiliza `.env` para segurança:

- DB_DRIVER  
- DB_HOST  
- DB_PORT  
- DB_NAME  
- DB_USER  
- DB_PASS  

⚠️ O arquivo `.env` NÃO deve ser enviado ao GitHub.

---

## 🌐 Funcionalidades

### 👤 Clientes
- Cadastro
- Listagem
- Edição
- Exclusão
- Integração com ViaCEP

---

### 🐶 Pets
- Cadastro
- Listagem
- Edição
- Exclusão

---

### 📦 Produtos
- Cadastro
- Listagem
- Edição
- Exclusão

---

### 💬 Feedbacks (MockAPI)
- Cadastro via API externa
- Listagem via API externa

---

### 📍 API ViaCEP
Utilizada para preenchimento automático de endereço:


https://viacep.com.br/ws/{cep}/json/


---

### ☁️ MockAPI
Utilizada para armazenamento de feedbacks sem banco de dados local.

---

## ⚠️ Observação

- O projeto segue padrão MVC
- O banco de dados é PostgreSQL
- APIs externas são utilizadas para enriquecer funcionalidades
- O sistema foi desenvolvido para fins acadêmicos

---

## 👨‍💻 Autor

Projeto desenvolvido para disciplina de Desenvolvimento Web MVC.

---

## 📌 Status do Projeto

✔ MVC estruturado corretamente  
✔ CRUD Clientes completo  
✔ CRUD Pets completo  
✔ CRUD Produtos completo  
✔ Feedback via MockAPI  
✔ Integração com APIs externas  
✔ Interface profissional  