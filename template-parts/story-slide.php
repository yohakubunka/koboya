<?php
// 説明文
$letters_title = array(
  'フルーツショップ弘法屋の開店',
  '名駅に出店',
  '流行',
  'フルーツの新しい形',
  '遠方へも美味しさを',
  '新しい時代に',
);
$letter = array();
$letters = array(
  '昭和20年代、戦後間も無く祖父、片岡庄司、父、片岡康男がフルーツ専門店として覚王山に弘法屋を創業。<br class="pc">当時、フルーツはどちらかというとハイカラな食べ物で、日本の経済力とともにその需要を伸ばしていきました。',
  '昭和38年、名古屋駅で開業したばかりの名鉄百貨店地下構内ストア（日本で最初の本格的地下商店街サンロード）に（資）弘法屋西店として出店。',
  '当時は輸入のフルーツが日本人には真新らしく房の台湾バナナが贈答として喜ばれ、ハワイからパイナップルが空輸されたりしていました。',
  '昭和60年代頃、従来の顧客が世代を変え、世帯の形質が変わり、食の消費単位も小さくなったので、個食向けのフルーツを加工という形で実現。それがデリフル（商標登録済）です。スプーン1本で食べられるフルーツの新しい形というコンセプトは、発売以来３０年以上経った今でも大きな支持を受けています。',
  '平成８年代、遠方まで送りたいという要望にこたえるため、クール便が出るタイミングに、デリフルのパッケージを変えました。遠くまで送れるように、中身が崩れないように試行錯誤のうえ、パッケージの改良を重ねました。そのタイミングで百貨店からの依頼もあり、お中元などのギフトのラインナップを増やしました。多くの方に自慢の果物をお届けすることができました。',
  'フルーツの役割は時代と共に、贅沢品から嗜好品、そして健康や美容に欠かせない生活必需品に広がりました。
    消費者に最も近い立場として今後もその魅力を育みながら丁寧にお客様に伝えていきたいと考えています。',
);
?>

<section class="section">
  <h2 class="inner-title">思い出</h2>
  <div class="memory">
    <div class="memory-slide">
      <ul class="memories">
        <li>
          <img data-index="0" src="<?php echo get_template_directory_uri() ?>/images/about/story/story-gallery_01.jpg">
          <div class="commentary">
            <h3 class="commentary-title"><?= $letters_title[0]; ?></h3>
            <p><?= $letters[0]; ?></p>
          </div>
        </li>
        <li>
          <img data-index="1" src="<?php echo get_template_directory_uri() ?>/images/about/story/story-gallery_02.jpg">
          <div class="commentary">
            <h3 class="commentary-title"><?= $letters_title[1]; ?></h3>
            <p><?= $letters[1]; ?></p>
          </div>
        </li>
        <li>
          <img data-index="2" src="<?php echo get_template_directory_uri() ?>/images/about/story/story-gallery_03.jpg">
          <div class="commentary">
            <h3 class="commentary-title"><?= $letters_title[2]; ?></h3>
            <p><?= $letters[2]; ?></p>
          </div>
        </li>
        <li>
          <img data-index="3" src="<?php echo get_template_directory_uri() ?>/images/about/story/story-gallery_04.jpg">
          <div class="commentary">
            <h3 class="commentary-title"><?= $letters_title[3]; ?></h3>
            <p><?= $letters[3]; ?></p>
          </div>
        </li>
        <li>
          <img data-index="4" src="<?php echo get_template_directory_uri() ?>/images/about/story/story-gallery_05.jpg">
          <div class="commentary">
            <h3 class="commentary-title"><?= $letters_title[4]; ?></h3>
            <p><?= $letters[4]; ?></p>
          </div>
        </li>
        <li>
          <img data-index="5" src="<?php echo get_template_directory_uri() ?>/images/about/story/story-gallery_06.jpg">
          <div class="commentary">
            <h3 class="commentary-title"><?= $letters_title[5]; ?></h3>
            <p><?= $letters[5]; ?></p>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="memory-letter">
    <ul>
      <?php foreach ($letters as $key => $letter): ?>
        <li>
          <h3 class="commentary-title"><?= $letters_title[$key] ?></h3>
          <p><?= $letter ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

</section>
