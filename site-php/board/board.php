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
    <title>게시판</title>

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
                    <div class="boardType">
                        <h3>게시판</h3>
                        <p>가장 빠른 새소식 업데이트</p>
                        <div class="board">
                            <div class="board-search">
                                <form action="boardSearch.php" name="boardSearch" method="get">
                                    <fieldset>
                                        <legend class="ir_so">게시판 검색 영역</legend>
                                        <input type="search" name="searchKeyword" class="form-search" placeholder="검색어를 입력하세요" aria-label="search">
                                        <select name="searchOption" id="searchOption" class="form-select">
                                            <option value="title">제목</option>
                                            <option value="content">내용</option>
                                            <option value="name">등록자</option>
                                        </select>
                                        <button type="submit" class="form-btn">검색</button>
                                        <a href="boardWrite.php" class="form-btn black">글쓰기</a>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="board-table">
                                <table>
                                    <colgroup>
                                        <col style="width: 5%" />
                                        <col />
                                        <col style="width: 10%" />
                                        <col style="width: 12%" />
                                        <col style="width: 7%" />
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>번호</th>
                                            <th>제목</th>
                                            <th>등록자</th>
                                            <th>등록일</th>
                                            <th>조회수</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="board-page">
                                <ul>
                                    <li><a href="#">처음으로</a></li>
                                    <li><a href="#">이전</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#">다음</a></li>
                                    <li><a href="#">마지막으로</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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