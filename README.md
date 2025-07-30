# 🚀 Desafio Web Developer Jr — Site Blog

Este projeto foi desenvolvido como parte de um desafio técnico para desenvolvedores web nível júnior. Criado com **CodeIgniter 4**, o sistema simula um blog funcional com operações completas de CRUD e um feed público de visualização.

---

## 🧰 Funcionalidades

- ✅ Listagem pública dos posts em formato de feed  
- ✏️ Cadastro, edição e exclusão de posts  
- 🔒 Área administrativa protegida por autenticação  
- 📁 Estrutura organizada seguindo o padrão MVC com CodeIgniter  
- ⚙️ Integração do Eloquent ORM (via Laravel Components)  
- 💄 Interface responsiva utilizando Bootstrap e jQuery  

---

## 🛠️ Tecnologias Utilizadas

- [CodeIgniter 4](https://codeigniter.com/) — Framework principal  
- [Eloquent ORM](https://laravel.com/docs/eloquent) — Mapeamento objeto-relacional  
- [Bootstrap](https://getbootstrap.com/) — Estilização responsiva  
- [jQuery](https://jquery.com/) — Interatividade no front-end  
- [MySQL](https://www.mysql.com/) — Banco de dados relacional  
- [Git](https://git-scm.com/) & GitHub — Controle de versão  

---

## ▶️ Como testar

1. Clone o repositório:

   ```bash
   git clone https://github.com/XPZz30/DesafioWebDeveloper.git
   ```

2. Copie o projeto para a pasta `htdocs` do XAMPP:

   ```bash
   xampp/htdocs/DesafioWebDeveloper
   ```

3. Configure o ambiente:

   - Copie o arquivo `.env.example` para `.env` e edite com suas credenciais do banco de dados.
   - Crie o banco de dados no MySQL com o mesmo nome definido no `.env`.

4. Rode as migrations pelo terminal:

   ```bash
   php spark migrate
   ```

5. Crie um usuário para login com o comando:

   ```bash
   php spark db:seed UsuarioSeeder
   ```

6. Inicie o Apache e MySQL pelo XAMPP.

7. Acesse o sistema no navegador:

   ```
   http://localhost/DesafioWebDeveloper/public
   ```

8. Faça login com as seguintes credenciais:

   - **E-mail:** `user@teste.com`  
   - **Senha:** `user`

---

## 👨‍💻 Autor

**Samuel Leal — Desenvolvedor Web Júnior**

- 💼 [LinkedIn](https://www.linkedin.com/in/samuel-leal-33763a372)  
- 📧 samuleal007@gmail.com
