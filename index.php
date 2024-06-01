<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFINITY ENERGY</title>
    <!-- favicon -->
    <link rel="icon" href="./img/favicon.ico">
    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- header -->
    <?php include('header.php'); ?>

    <!-- contents -->
    <main class="mainContents">
        <!-- first view -->
        <?php
            $firstViewText = '「Infinity Energy」は、無限の活力を提供し、限界を超える力を引き出す高エネルギードリンクです。あなたの日常を活性化しましょう！';
        ?>
        <section class="firstViewSection">
            <div class="firstViewSectionInner">
                <div>
                    <img src="./img/top_copy2_2x.png" alt="Infinity Energy">
                    <p class="firstViewText"><?php echo $firstViewText; ?></p>
                </div>
                <div class="modelViewerWrap">
                    <model-viewer
                        src="./img/can_kv.gltf"
                        alt="Infinity Energy Can"
                        camera-controls
                        class="modelViewer"
                        camera-target = "0m 1.2m 0m"
                        camera-orbit = "90deg 60deg auto"
                    >
                    </model-viewer>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php include('footer.php'); ?>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- model-viewer -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <!-- script -->
    <script src="./js/index.js"></script>
</body>
</html>