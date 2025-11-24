<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="./css/register.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <section class="formWrapper">
      <form class="formLogin" method='post' action="index.php?action=register">
        <fieldset>
          <div class="img-container">
            <!-- <a href="https://avati.com.br/" target="_blank">
              <img src="./assets/svg/logo.svg" alt="AVATI Logotipo" />
            </a> -->
          </div>
          <h1>Cadastro de Usuário</h1>

          <div class="input-wrapper">
            <div class="input-container">
              <label for="nome">Nome</label>
              
              <input
                type="text"
                id="nome"
                name="nome"
                autofocus
                placeholder="Digite o nome do usuário "
                required
              />

            </div>

            <div class="input-container">
              <label for="email">Email</label>
              
              <input
                type="text"
                id="email"
                name="email"
                autofocus
                placeholder="Digite o email "
                required
              />

            </div>

            <div class="input-container">
              <label for="senha">Senha</label>
              <input
                type="password"
                id="senha"
                name="senha"
                data-rules="required|min=6"
                placeholder="Digite sua senha"
                required
              />
            </div>

            <div class="input-container">
              <label for="senha">Perfil</label>
              <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
            </div>
          </div>

          <input type="submit" value="Cadastrar" class="btn" />

          <a href="index.php?action=login" class="register-link">Voltar para o login</a>
        </fieldset>
      </form>

    </section>

    <script>
      feather.replace();
    </script>

  </body>
</html>