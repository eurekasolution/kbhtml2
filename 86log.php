최근 1시간동안 접속페이지별, ip갯수를 그래프로 그리고 싶습니다
top 10만 그래프로 표시하시오

최근 한시간...

$sql = "SELECT ADDDATE(now(), INTERVAL -60 MINUTE) as checktime";

select distinct cmd from log_table 