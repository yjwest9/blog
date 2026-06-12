<?php
/**
 * index.php — 블로그 메인 (최소 버전).
 *
 * 지금 단계: 로그인했는지 확인 + 환영 화면 + include 구조 검증.
 * 다음 단계: 공개글 피드 + 검색 + 카테고리 + 페이징 (기능정의서 기준).
 */

session_start();

// 로그인 안 했으면 로그인 페이지로 보냄.
// (header.php 가 HTML 을 출력하기 "전에" 검사 — 그래야 header() 리다이렉트가 동작)
if (!isset($_SESSION['user_id'])) {
    header('Location: auth.php');
    exit;
}

$pageTitle = '블로그 메인 · MyBlog';
require_once __DIR__ . '/header.php';
?>

<section class="welcome">
  <h1><?= htmlspecialchars($_SESSION['nickname']) ?>님, 환영합니다 👋</h1>
  <p>로그인에 성공했어요.<br>블로그 메인 피드(공개글 목록·검색·카테고리)는 다음 단계에서 만들 예정입니다.</p>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>
