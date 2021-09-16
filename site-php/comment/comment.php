<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글</title>

    <!-- //style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

        <main id="contents">
            <section id="mainCont">
                <h2 class="ir_so">메인 컨텐츠</h2>
                <article class="content-article">
                    <section class="cardType">
                        <div class="cardType01">
                            <h2>한국의 지역별 역사 안내</h2>
                            <p>한국의 역사를 지역별로 알려주는 사이트입니다. 내가 위치한 지역 또는 원하는 지역을 선택하면 이해하기 쉽
                                도록 사진과 함께 설명이 나옵니다.</p>
                            <div class="card-wrap">
                                <div class="card">
                                    <a href="#">
                                        <img src="../assets/img/card01.jpg" alt="서울의 문화재 관련 이미지입니다." class="card-img">
                                        <strong class="card-title">서울의 문화재</strong>
                                        <span class="card-desc">서울의 문화재로는 숭례문, 금동탑, 경복궁, 종묘 정전 등이 있습니다...</span>
                                        <span class="card-keyword">
                                            <span>#한국</span>
                                            <span>#서울</span>
                                            <span>#문화재</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="../assets/img/card02.jpg" alt="서울의 역사 관련 이미지입니다." class="card-img">
                                        <strong class="card-title">서울의 역사</strong>
                                        <span class="card-desc">서울은 대한민국의 수도이며 과거 백제, 조선의 수도로 시대에 따라 위례...</span>
                                        <span class="card-keyword">
                                            <span>#한국</span>
                                            <span>#서울</span>
                                            <span>#역사</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="../assets/img/card03.jpg" alt="현대의 서울 관련 이미지입니다." class="card-img">
                                        <strong class="card-title">현대의 서울</strong>
                                        <span class="card-desc">현대의 서울은 국제도시의 면모를 갖추었다 판단되는 바, 21세기에는...</span>
                                        <span class="card-keyword">
                                            <span>#한국</span>
                                            <span>#서울</span>
                                            <span>#현대</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--//CardType01-->
                </article>
                <article class="flow-article">
                    <h3 class="ir_so">역사 알아보기</h3>
                    <section id="comment" class="section-comment">
                        <h4>서울 역사 알아보기</h4>
                        <p>서울 역사에 대해 자세히 알아보고 싶은 분들은 댓글로 참여 신청을 남겨주세요!</p>
                        <div class="comment-form">
                            <form action="commentSave.php" method="post" name="comment">
                                <fieldset>
                                    <legend class="ir_so">댓글 영역</legend>
                                    <div class="comment-wrap">
                                        <div>
                                            <label for="youName" class="ir_so">이름</label>
                                            <input type="text" name="youName" id="youName" class="input_write2" placeHolder="이름" autocomplete="off" maxlength="10" required>
                                        </div>
                                        <div>
                                            <label for="youText" class="ir_so">신청하기</label>
                                            <input type="text" name="youText" id="youText" class="input_write2 w100" placeHolder="신청날짜를 적어주세요!" autocomplete="off" required>
                                        </div>
                                        <button class="btn_submit2" type="submit" value="신청하기">go</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="comment-list">
                            <?php
                                include "../connect/connect.php";

                                $sql = "SELECT * FROM myComment LIMIT 10";
                                $result = $connect -> query($sql);

                                // echo "<pre>";
                                // var_dump(mysqli_fetch_array($result));
                                // echo "</pre>";

                                while($info = mysqli_fetch_array($result)){
                            ?>
                                <div>
                                    <p><?=$info['youText']?></p>
                                    <div>
                                        <img src="https://coop97.github.io/dothome21/class/img/img11.jpg" alt="순두부 아이스크림">
                                        <span><?=$info['youName']?></span>
                                        <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>

                            <!-- <div>
                                <p>저 신청하겠습니다!</p>
                                <div>
                                    <img src="https://coop97.github.io/dothome21/class/img/img11.jpg" alt="순두부 아이스크림">
                                    <span>황기우</span>
                                    <span>2021-09-16</span>
                                </div>
                            </div> -->
                        </div>
                    </section>
                </article>
            </section>
        </main>
        <!-- //contents -->

        <footer id="footer">
            footer
        </footer>
        <!-- //footer -->
</body>
</html>