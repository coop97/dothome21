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
    <title>메인</title>

    <!-- //style -->
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/var.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                    <!-- ?php
                        // echo "<pre>";
                        // var_dump($_SESSION);
                        // echo "</pre>";
                    ? -->
                    <h3>KIM EUN CHAE</h3>
                    <p>김은채의 포트폴리오 사이트입니다.</p>
                    <section class="section-card">
                        <h4 class="ir_so">카드 컨텐츠</h4>
                        <ul class="card-list">
                            <li>
                                <a href="https://coop97.github.io/dothome21/layout/index.html">
                                    <img src="assets/img/layout.jpg" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>Layout</strong>
                                    <span>본격적인 사이트를 제작하기 전, 웹사이트의 기본 레이아웃에 대해 숙지하였습니다. </span>
                                    <span class="keyword">
                                        <span>#기본</span><span>#레이아웃</span><span>#연습</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="https://coop97.github.io/dothome21/Site/index.html">
                                    <img src="assets/img/site.jpg" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>Site</strong>
                                    <span>다양한 유형의 사이트를 따라 만들며 사이트의 형태와 기능을 배웠습니다.</span>
                                    <span class="keyword">
                                        <span>#php</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="http://dshareadmin.dothome.co.kr/">
                                    <img src="assets/img/PHP.jpg" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>PHP</strong>
                                    <span>지금까지 연습한 내용을 토대로 PHP를 사용하여 직접 사이트를 제작하였습니다.</span>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </section>
                </article>
            </section>
        </main>
        <!-- //contents -->
        <article class="flow-article">
                <h3 class="ir_so">D-SHARE의 UI/UX Prototype</h3>
                <section class="section-intro container">
                    <h4 class="ir_so">D-SHARE의 UI/UX Prototype 소개</h4>
                    <div class="youtube-intro">
                        <div>
                            <iframe src="https://www.youtube.com/embed/D9BFkcdD1ww" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5>D-SHARE의 UI/UX Prototype</h5>
                            <p>드라이브 코스 공유 사이트 'D-SHARE'의 UI/UX 프로토타입 영상입니다. 디자인부터 PHP작업까지 조원분들과 협력하여 제작하였습니다.
                            </p>
                            <div class="interview">
                                <div class="icon">
                                    <a href="https://github.com/coop97/project/tree/main/html" target="_blank">
                                        <img src="assets/img/svg-pizza.svg" alt="소스">
                                        <span>#Source</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="https://www.figma.com/file/kvavlZikk1BmOqcaYL0ROG/D-share?node-id=0%3A3" target="_blank">
                                        <img src="assets/img/svg-vanilla-cupcake.svg" alt="피그마">
                                        <span>#Figma</span>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <article class="content-article content-sub">
                <h3>스크립트</h3>
                <p>제이쿼리와 자바스크립트를 배우고, 응용하여 다양한 이펙트를 구현했습니다.</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list2">
                        <li>
                            <a href="#">
                                <img src="assets/img/php01.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>자바스크립트 레퍼런스입니다.</strong>
                                <span class="keyword">
                                    <span>#Javascript</span><span>#레퍼런스</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/php02.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>제이쿼리 레퍼런스입니다.</strong>
                                <span class="keyword">
                                    <span>#jQuery</span><span>#레퍼런스</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="https://coop97.github.io/dothome21/refer-effect/menuEffect/index.html">
                                <img src="assets/img/php03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>메뉴 이펙트입니다.</strong>
                                <span class="keyword">
                                    <span>#Javascript</span><span>#jQuery</span><span>#effect</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="https://coop97.github.io/dothome21/refer-effect/mouseEffect/index.html">
                                <img src="assets/img/php04.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>마우스 이펙트입니다.</strong>
                                <span class="keyword">
                                    <span>#Javascript</span><span>#jQuery</span><span>#effect</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="https://coop97.github.io/dothome21/refer-effect/parallaxEffect/index.html">
                                <img src="assets/img/php05.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>패럴랙스 이펙트입니다.</strong>
                                <span class="keyword">
                                    <span>#Javascript</span><span>#jQuery</span><span>#effect</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="https://coop97.github.io/dothome21/refer-effect/sliderEffect/index.html">
                                <img src="assets/img/php06.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>슬라이더 이펙트입니다.</strong>
                                <span class="keyword">
                                    <span>#Javascript</span><span>#jQuery</span><span>#effect</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="https://coop97.github.io/dothome21/refer-effect/gameEffect/index.html">
                                <img src="assets/img/php07.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>게임 이펙트입니다.</strong>
                                <span class="keyword">
                                    <span>#Javascript</span><span>#jQuery</span><span>#effect</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="https://coop97.github.io/dothome21/">
                                <img src="assets/img/php08.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>그 외 다양한 작업을 볼 수 있는 포트폴리오 사이트입니다.</strong>
                                <span class="keyword">
                                    <span>#portpolio</span><span>#dothome</span><span>#site</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article content-sub">
                <h3>최신 소식</h3>
                <p>최신 소식을 바로 확인 할 수 있습니다.</p>
                <section class="section-news container">
                    <div class="news">
                        <h4>게시판 업데이트</h4>
                        <!-- <ul>
                            <li><a href="#">스크립트 강의 업데이트 예정입니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">유튜브에 강의 업데이트할 예정입니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">스터디 참여에 대해서 자세히 알려드립니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">스터디 강의와 면접 잘 보는 법에 대해서 알려드릴께요~</a><span>2021.02.02</span></li>
                        </ul> -->
                        <ul>
                            <?php
                                $numView = 4;
                                $sql = "SELECT b.myBoardID, b.boardTitle, b.regTime FROM myBoard b JOIN myMember m ON (m.myMemberID = b.myMemberID) ORDER BY myBoardID DESC LIMIT {$numView}";

                                $result = $connect -> query($sql);

                                if($result){
                                    $count = $result -> num_rows;

                                    if($count > 0){
                                        for($i=1; $i<=$count; $i++){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<li><a href='http://coop97.dothome.co.kr/site-php/board/boardView.php?boardID={$info['myBoardID']}'>".$info['boardTitle']."</a><span>".date('Y-m-d', $info['regTime'])."</span></li>";
                                        }
                                    }
                                }
                            ?>
                        </ul>
                        <a href="http://coop97.dothome.co.kr/site-php/board/board.php" title="더보기" class="more">더보기</a>
                    </div>
                    <div class="news">
                        <h4>댓글 업데이트</h4>
                        <ul>
                            <!-- <li><a href="#">감사합니다. 잘 보고 있어요^^</a><span>2021.02.02</span></li>
                            <li><a href="#">앞으로도 좋은 영상 부탁드령요~</a><span>2021.02.02</span></li>
                            <li><a href="#">여기가 짱인듯.. 너무 좋아요~~ 너무 필요한 거였어요~ 여기가 짱인듯.. 너무 좋아요~~ </a><span>2021.02.02</span></li>
                            <li><a href="#">앞으로도 좋은 영상 부탁드령요~</a><span>2021.02.02</span></li> -->

                            <?php
                                $numView = 4;
                                $sql = "SELECT * FROM myComment ORDER BY myCommentID DESC LIMIT {$numView}";

                                $result = $connect -> query($sql);

                                if($result){
                                    $count = $result -> num_rows;

                                    if($count > 0){
                                        for($i=1; $i<=$count; $i++){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<li><a href='http://coop97.dothome.co.kr/site-php/comment/comment.php?boardID={$info['youName']}'>".$info['youText']."</a><span>".date('Y-m-d', $info['regTime'])."</span></li>";
                                        }
                                    }
                                }
                            ?>
                        </ul>
                        <a href="http://coop97.dothome.co.kr/site-php/comment/comment.php" title="더보기" class="more">더보기</a>
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //main -->

    <footer id="footer">
        <div class="container">
            <section class="section-service">
                <h2 class="ir_so">바로가기 링크</h2>
                <div class="link">
                    <div>
                        <strong>페이지</strong>
                        <ul>
                            <li><a href="main.html">main.html</a></li>
                            <li><a href="comment.html">comment.html</a></li>
                            <li><a href="contact.html">contact.html</a></li>
                        </ul>
                    </div>
                    <div>
                        <strong>로그인</strong>
                        <ul>
                            <li><a href="join.html">join.html</a></li>
                            <li><a href="joinSave.html">joinSave.html</a></li>
                            <li><a href="login.html">login.html</a></li>
                        </ul>
                    </div>
                    <div>
                        <strong>게시판</strong>
                        <ul>
                            <li><a href="board.html">board.html</a></li>
                            <li><a href="boardView.html">boardView.html</a></li>
                            <li><a href="boardWrite.html">boardWrite.html</a></li>
                            <li><a href="boardModify.html">boardModify.html</a></li>
                            <li><a href="boardSearch.html">boardSearch.html</a></li>
                        </ul>
                    </div>
                    <div>
                        <strong>SNS</strong>
                        <ul>
                            <li><a href="#">인플러언서</a></li>
                            <li><a href="#">인스타그램</a></li>
                            <li><a href="#">트위터</a></li>
                            <li><a href="#">페이스북</a></li>
                            <li><a href="#">블로그</a></li>
                        </ul>
                    </div>
                    <div>
                        <strong>사이트</strong>
                        <ul>
                            <li><a href="https://webzz.tistory.com/" target="_blank">레퍼런스</a></li>
                            <li><a href="https://wtss.tistory.com/" target="_blank">튜토리얼</a></li>
                            <li><a href="https://wess.tistory.com/" target="_blank">웹 폰트</a></li>
                            <li><a href="https://wsss.tistory.com/" target="_blank">애니메이션</a></li>
                            <li><a href="https://cafe.naver.com/crossbrowsing" target="_blank">스터디 신청</a></li>
                        </ul>
                    </div>
                </div>
                <div class="info">
                    <ul>
                        <li>Contact</li>
                        <li>cookcoop97@gmail.com</li>
                        <li>KaKao</li>
                        <li>dmsco414</li>
                        <li>Phone</li>
                        <li>010-8561-3192</li>
                    </ul>
                </div>
            </section>
            <section class="section-info">
                <h2 class="ir_so">서비스 이용정도</h2>
                <address>&copy;webstoryboy. All rights reserved.</address>
            </section>
        </div>
        <a href="#" class="link_top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="ico_top">
                <g fill="none" fill-rule="evenodd">
                    <circle cx="25" cy="25" r="25" fill="black"></circle> 
                    <path stroke-width="1.5" class="stroke" stroke="white" d="M8.467 16.933L0 8.467 8.467 0M.085 8.467L19.918 8.534" transform="rotate(90 9.5 24)"></path>
                </g>
            </svg>
        </a>
    </footer>
    <!-- //footer -->
</body>
</html>