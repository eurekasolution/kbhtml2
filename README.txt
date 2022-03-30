Fake Data : http://naver.me/5okJP3J4

1. DATABASE 접속..

   mysql -u 사용자명 데이터베이스명 -p

   mysql -u mykb mykb -p 


2. 공통명령

    show databases;
    use mykb;
    show tables;

3. tables

    create table my_test (
        idx     int(10) auto_increment,
        name    varchar(20) default 'noname',
        id      varchar(20) UNIQUE,
        age     int(3) default '10',
        birth   date,  -- comment
        memo    blob,
        regist  datetime ,

        primary key(idx) 
    );

    테이블의 구조 확인 (describe)

    show tables;

    desc my_table;

    명령이 딱 4개.. (삽입, 갱신, 검색, 삭제)
                    insert, update, search, delete

    1. 삽입  name,id,  

    INSERT INTO 테이블명 ( 필드나열순서무관 ) VALUES (  값들을순서에맞게나열)

    insert into my_test (id, birth, regist) values ('test', '2000-01-03', now());
    insert into my_test (name, id, age, birth, memo, regist) 
        values ('홍길동', 'kdhong', '33', '1999-12-31', '메모 테스트', now());






http://naver.me/FwkKZweA


2022-03-11

    선택의 폭은 두 가지가 있습니다.
    첫째, 무료 호스팅 업체를 통해 내가 만든 페이지를 확인한다.
    둘째, 수강생의 집 컴퓨터를 서버로 만들고, 외부에서 접속할 수 있는
        서버로 만들어 확인한다.

    만약 첫번째를 원하는 경우는 다음의 절차를 따라야 하고,
    둘째 방법을 원하는 경우는 별도로 설명합니다.

    어떤 방법이 좋을까요? 
    1. 무료호스팅 (이걸로 결정)
    2. 우리집 컴퓨터를 서버로
    3. 둘 다

    eureka.re.kr 공지게시판에 무료 호스팅관련 링크를
    만들어놓았습니다.(아래를 직접 타이핑 하셔도 됩니다.)
    http://naver.me/5thH1JEI

    자료를 보면서 가입을 해 주시면,
    강의한 내용을 호스팅에 올려놓고 확인해 볼 수 있습니다.

    1. 우리나라
    2. 우리 나라


2022-03-10 

GitHub : https://github.com/eurekasolution/kbhtml
뒤에 kbhtml2 -> kbhtml 로 변경하였습니다.

집에 있는 컴퓨터의 환경을 맞추기 위해서는 다음의 절차를 따라 주시면 됩니다. 
온라인 강의는 집중력을 위해
시작: 매시 정각
종료: 미시 45분
원칙으로 진행하겠습니다.
