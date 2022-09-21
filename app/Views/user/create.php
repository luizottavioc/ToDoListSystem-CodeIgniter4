<div class="content-modal">
    <form action="/users/insert_user" method="post" autocomplete="off" class="create-user-form h100" data-confirm-title="Criar Usuário" data-confirm-text="Você realmente deseja criar este usuário?" data-confirm-success-text="Usuário criado com sucesso!" data-url-refresh="/users" data-close-modal="true">
        <div class="aloc-input">
            <input class="input" name="name" type="text" placeholder=" " value="" required>
            <label class="plch">Nome:</label>
        </div>
        <div class="aloc-input">
            <input class="input" name="lastname" type="text" placeholder=" " value="" required>
            <label class="plch">Sobrenome:</label>
        </div>
        <div class="aloc-input">
            <select class="select" name="fk_nivel" required>
                <?php foreach ($niveis as $nivel): ?>
                    <option value="<?=$nivel['id_nivel']?>"><?=$nivel['tipo_nivel']?></option>
                <?php endforeach; ?>
            </select>
            <i class="arrow-down fa-solid fa-angles-down"></i>
            <label class="plch">Nível:</label>
        </div>
        <div class="aloc-input">
            <input class="input" name="login" type="text" placeholder=" " value="" required>
            <label class="plch">Login:</label>
        </div>
        <div class="aloc-input">
            <input class="input" name="email" type="email" placeholder=" " value="" required>
            <label class="plch">E-mail:</label>
        </div>
        <div class="aloc-input pass">
            <input class="input password-check" name="password_hash" type="password" placeholder=" " required>
            <label class="plch">Senha:</label>
        </div>
        <div class="aloc-input pass">
            <input class="input password-confirm-check" type="password" placeholder=" " required>
            <label class="plch">Confirmar senha:</label>
        </div>
        <?php if(permissoes_helper('edit_permiss')): ?>
            <input type="hidden" name="change_permiss" value="1">
            <?php foreach($permissoes as $permissao): ?>
                <div class="column-toggle-user">
                    <label for="toggle-permiss-<?=$permissao['id_permiss']?>"><?=$permissao['name_permiss']?></label>
                    <div class="aloc-user-toggle">
                        <input id="toggle-permiss-<?=$permissao['id_permiss']?>" type="checkbox" class="toggle-input" name="permiss_user[]" value="<?=$permissao['id_permiss']?>">
                        <label for="toggle-permiss-<?=$permissao['id_permiss']?>" class="toggle small">
                            <span class="toggle-circle"></span>
                        </label>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <button id="sbm-edit-user" type="submit" class="d-none"></button>
    </form>
  
    <div id="footer-data-user" class="default-modal-footer">
        <label for="sbm-edit-user" class="submit-form">
            <label class="text-btn">Criar Usuário</label>
            <span class="bg-btn"></span>
        </label>
    </div>
</div>
