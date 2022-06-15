<?php
include ("include/header.php");

// Buscando os ultimos 6 produtos cadastrados
$produtos = $db->query("SELECT * FROM produto ORDER BY id DESC LIMIT 6");
$produtos = $produtos->fetchAll(PDO::FETCH_ASSOC);

?>
    <!-- Banner site -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/img/banner.jpg" style="width: 100%;" class="banner-img" />
                </div>
            </div>
        </div>
    </section>

    <!-- Listagem de produtos --->
    <section class="lista-produtos">
        <div class="container">
            <div class="row">
                <h2>Nossos Lançamentos</h2>
            </div>

            <?php if(empty($produtos) == false): ?>
                <div class="row">
                    <?php foreach ($produtos as $produto):
                        $imagem = $db->query("SELECT * FROM imagem WHERE id_produto = " . $produto["id"]);
                        $imagem = $imagem->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <div class="col-md-4">
                            <!-- Card de produto -->
                            <div class="card-produto">
                                <?php if(empty($imagem) == false): ?>
                                    <div style="background-image: url('<?= $imagem["imagem"]; ?>')" class="imagem"></div>
                                <?php else: ?>
                                    <div style="background-image: url('assets/img/produto.webp')" class="imagem"></div>
                                <?php endif; ?>

                                <div class="texto">
                                    <h4><?= $produto["titulo"]; ?></h4>
                                    <h3>R$ <?= number_format($produto["valor"], 2, ',','.'); ?></h3>
                                    <a href="#" class="botao-comprar">Mais Detalhes</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-md-12">
                        <p>Não possui produtos cadastrados.</p>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </section>

<?php
include ("include/footer.php");
