<div class="bg-cinza h-100 w-100">
    <div class="d-flex align-items-center">
        <div class="title mr-4">
            <h4>Conheça a <?= the_title(); ?></h4>
        </div>
        <span class="metros"><?php isset($data_page['metros_casa'][0]) ? print_r($data_page['metros_casa'][0]) : ''; ?></span>
    </div>
    <h6>A partir de R$<?= isset($data_page['valor_casa'][0]) ? $data_page['valor_casa'][0] : ''; ?></h6>
    <div class="side-right1">
        <h6>Disponibilidade da casa de acordo com o lote</h6>
        <b><?= isset($data_page['lote_minimo'][0]) ? $data_page['lote_minimo'][0] : ''; ?></b>
    </div>

    <div class="side-right1">
        <h4><b>Nesta planta</b></h4>
        <?php if ($data_page['checkbox_suite'][0] === 'yes'): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/camas.png" alt="" srcset="">
                <span><?= $data_page['suites_casa'][0] ?></span>
            </div>
        <?php endif; ?>
        <?php if ($data_page['checkbox_banheiro'][0] === 'yes'): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/banheiro.png" alt="" srcset="">
                <span>Banheiro social</span>
            </div>
        <?php endif; ?>
        <?php if ($data_page['checkbox_lavabo'][0] === 'yes'): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/lavabo.png" alt="" srcset="">
                <span>Lavabo</span>
            </div>
        <?php endif; ?>
        <?php if ($data_page['checkbox_sala'][0] === 'yes'): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/sala_estar.png" alt="" srcset="">
                <span>Sala de estar</span>
            </div>
        <?php endif; ?>
        <?php if ($data_page['checkbox_jantar'][0] === 'yes'): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/sala_jantar.png" alt="" srcset="">
                <span>Sala de Jantar</span>
            </div>
        <?php endif; ?>
        <?php if ($data_page['checkbox_cozinha_integrada'][0] === 'yes'): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/cozinha.png" alt="" srcset="">
                <span>Cozinha integrada</span>
            </div>
        <?php endif; ?>
        <?php if ($data_page['checkbox_lavanderia'][0] === 'yes'): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/lavanderia.png" alt="" srcset="">
                <span>Lavanderia</span>
            </div>
        <?php endif; ?>
        <?php if ($data_page['checkbox_vaga'][0] === 'yes'): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/vaga_coberta.png" alt="" srcset="">
                <span>Vaga coberta</span>
            </div>
        <?php endif; ?>
    </div>

    <div class="side-right1 borda-bottom">
        <h4 style="margin-top: 25px;"><b>Opcionais</b></h4>
        <?php if (isset($data_page['muro_casa'])): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/muro.png" alt="" srcset="">
                <span><?= $data_page['muro_casa'][0] ?></span>
            </div>
        <?php endif; ?>
        <?php if (isset($data_page['area_gourmet_casa'])): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/gourmet.png" alt="" srcset="">
                <span><?= $data_page['area_gourmet_casa'][0] ?></span>
            </div>
        <?php endif; ?>
        <?php if (isset($data_page['quartos_casa'])): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/camas.png" alt="" srcset="">
                <span><?= $data_page['quartos_casa'][0] ?></span>
            </div>
        <?php endif; ?>
        <?php if (isset($data_page['smart_kit_casa'])): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/smart.png" alt="" srcset="">
                <span><?= $data_page['smart_kit_casa'][0] ?></span>
            </div>
        <?php endif; ?>
        <?php if (isset($data_page['cozinha_casa'])): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/cozinha.png" alt="" srcset="">
                <span><?= $data_page['cozinha_casa'][0] ?></span>
            </div>
        <?php endif; ?>
        <?php if (isset($data_page['grama_casa'])): ?>
            <div class="plantas">
                <img src="<?= $icons; ?>/grama.png" alt="" srcset="">
                <span><?= $data_page['grama_casa'][0] ?></span>
            </div>
        <?php endif; ?>
    </div>


</div>