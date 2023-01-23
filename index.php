<?php
$name = "Botan";
$profession = "cat";
$city = "Danzel";
$e_mail = "cat@dogs.com";
$phone_number = "+9489478439487";

$skills = [
  [
    'name' => 'фотошоп',
    'persent' => 30,
  ],
  [
    'name' => 'Иллюстратор',
    'persent' => 70,
  ],
  [
    'name' => 'Медиа',
    'persent' => 40,
  ],
  [
    'name' => 'Доставать Хозяев',
    'persent' => 100,
  ],
];

$work_experience = [
  [
    'specialization' => 'Студент',
    'start_work' => 'Okt. 2022',
    'end_work' => 'Current',
    'description' => 'Являюсь студентом ',
  ],
  [
    'specialization' => 'Монтажник',
    'start_work' => 'Nov. 2017',
    'end_work' => 'Mart  2019',
    'description' => 'Монтажник оконных систем',
  ],
  [
    'specialization' => 'Студент',
    'start_work' => 'Sept. 2012',
    'end_work' => 'June 2017',
    'description' => 'Заочное обучение в МГСУ',
  ],
  [
    'specialization' => 'Моляр-отделочник',
    'start_work' => 'Apr. 2004',
    'end_work' => 'Oct. 2010',
    'description' => 'Декоративная покраска стен и фасадов',
  ],
];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>

<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2>
                <?php echo $name; ?>
              </h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?= $profession; ?>
            </p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $city; ?>
            </p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?= $e_mail; ?>
            </p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $phone_number; ?>
            </p>

            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count($skills); $i++): ?>
              <p>
                <?= $skills[$i]["name"]; ?>
              </p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[$i]["persent"]; ?>%">
                  <?= $skills[$i]["persent"]; ?>%</div>
              </div>
            <?php endfor; ?>
            <br>

            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Русский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p><i><b>Русский ,,народный,,</b></i></p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>АйТишный :-)</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          <?php for ($i = 0; $i < count($work_experience); $i++): ?>
            <!--<p><?= $work_experience[$i]["specialization"]; ?></p>-->
            <div class="w3-container">
              <h5 class="w3-opacity"><b>
                  <?= $work_experience[$i]["specialization"]; ?>
                </b></h5>
              <h6 class="w3-text-teal">
                <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                <?= $work_experience[$i]["start_work"]; ?> -
                <?php if ($i == 0): ?>
                  <span class="w3-tag w3-teal w3-round">
                    <?= $work_experience[$i]["end_work"]; ?>
                  </span>
                <?php else: ?>
                  <?= $work_experience[$i]["end_work"]; ?>
                <?php endif ?>
              </h6>
              <p><i><b>
                    <?= $work_experience[$i]["description"]; ?>
                  </b></i></p>
              <hr>
            </div>
          <?php endfor; ?>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>

</html>