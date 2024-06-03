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

        <!-- present campaign -->
        <?php
            $presentCampaignTitle = 'プレゼントキャンペーン開催中';
            $presentCampaignDescription = 'エナジーを無限に感じる、インフィニティエナジーが贈る、<br>スペシャルなキャンペーンがやってきました！<br>このチャンスを逃さず、素晴らしいプレゼントを手に入れましょう！';
            $presentCampaignBodyText = 'インフィニティエナジーの無料引換券や特別エディションボトルなどの素敵な賞品が当たるチャンス！数量限定なのでお早めに応募してください。';
            $startYear = '2023';
            $startMonth = '10';
            $startDay = '1';
            $endYear = '2024';
            $endMonth = '1';
            $endDay = '31';
            $formSubmitNote = '[送信] ボタンをクリックして応募を完了します。当選者にはメールでお知らせいたします。';
            $presentCampaignNote = '注意: このフォームで提供された情報は、キャンペーンの運営および当選者への連絡にのみ使用されます。プライバシーに関する詳細については、Infinity Energy のプライバシーポリシーをご参照ください。';
        ?>
        <section class="presentCampaignSection">
            <h1 class="presentCampaignTitle"><?php echo $presentCampaignTitle; ?></h1>
            <p class="presentCampaignDescription"><?php echo $presentCampaignDescription; ?></p>
            <div class="presentCampaignSectionPresent">
                <img src="./img/campaign_img_2x.png" alt="Present Campaign">
                <div class="presentCampaignBodyWrap">
                    <div class="presentCampaignBody">
                        <h2>▶ プレゼント内容</h2>
                        <p><?php echo $presentCampaignBodyText; ?></p>
                    </div>
                    <div class="presentCampaignPeriod">
                        <h2>▶ キャンペーン期間</h2>
                        <p><?php echo $startYear; ?>年<span><?php echo $startMonth; ?></span>月<span><?php echo $startDay; ?></span>日〜<?php echo $endYear; ?>年<span><?php echo $endMonth; ?></span>月<span><?php echo $endDay; ?></span>日</p>
                    </div>
                </div>
            </div>
            <!-- form -->
            <div class="presentCampaignSectionForm">
                <h2>応募フォーム</h2>
                <form>
                    <div class="formGroup">
                        <label for="nameFull">お名前<sup>*</sup><br><span>※フルネーム</span></label>
                        <input id="nameFull" type="text" name="nameFull" required>
                    </div>
                    <div class="formGroup">
                        <label for="nameKana">お名前<sup>*</sup><br><span>※ふりがな</span></label>
                        <input id="nameKana" type="text" name="nameKana" required>
                    </div>
                    <div class="formGroup">
                        <label for="email">メールアドレス<sup>*</sup></label>
                        <input id="email" type="email" name="email" required>
                    </div>
                    <div class="formGroup">
                        <label for="tel">電話番号<sup>*</sup></label>
                        <div class="telWrap">
                            <input id="tel" type="tel" name="tel" required>
                        </div>
                    </div>
                    <div class="formGroup">
                        <label for="postalCode">郵便番号<sup>*</sup></label>
                        <div class="postalCodeWrap">
                            <input id="postalCode" type="tel" name="postalCode" required>
                        </div>
                    </div>
                    <div class="formGroup endFormGroup">
                        <label for="address">住所<sup>*</sup></label>
                        <input id="address" type="tel" name="address" required>
                    </div>
                    <div class="agreementWrap">
                        <input type="checkbox" name="agreement" id="agreement" required>
                        <label for="agreement">プライバシーポリシーに同意します。</label>
                    </div>
                    <p class="formSubmitNote"><?php echo $formSubmitNote; ?></p>
                    <div class="formSubmitButtonWrap">
                        <input class="formSubmitButton" type="submit" value="送信する">
                    </div>
                    <p class="presentCampaignNote"><?php echo $presentCampaignNote; ?></p>
                </form>
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