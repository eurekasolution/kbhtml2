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

    1. 삽입  

    INSERT INTO 테이블명 ( 필드나열순서무관 ) VALUES (  값들을순서에맞게나열)

    insert into my_test (id, birth, regist) values ('test', '2000-01-03', now());
    insert into my_test (name, id, age, birth, memo, regist) 
        values ('홍길동', 'kdhong', '33', '1999-12-31', '메모 테스트', now());


    2. 검색(SELECT)

    SELECT 필드들의나열 FROM 테이블명 
                [ WHERE 조건 ]
                [ ORDER BY 필드 증감조건]
                [ LIMIT [시작인덱스,] 갯수]

    SELECT * FROM 테이블명;

    SELECT * FROM my_test;
    SELECT name, age from my_test;
    SELECT * FROM kb_customer where job='자영업';
    SELECT * FROM kb_customer where local='서울' and birth>='2000-01-01' ;

    SELECT count(*) FROM kb_customer where gender='1';
    SELECT count(*)  as mynick FROM kb_customer where gender='1';

    select * from kb_customer where name like '김%' ;
    select * from kb_customer where name like '김%' order by local asc ;
    select * from kb_customer where name like '김%' order by local asc, name desc ;
    select * from kb_customer ;
    select * from kb_customer limit 10;
    select * from kb_customer limit 5, 3;


    1. 남자이면서 장애인인 김씨를 모두 검색
    2. 여성이면서, 2000년 이후 출생자, 전문인력은 모두 몇명인가
    3. 서울에 사는 김씨는 모두 몇명인가?
    4. 서울에 사는 장애인중 2번째로 나이가 많은 사람은 누구인가? 12935

    // dept

    create table dept (
        idx     int(10) auto_increment,    
        name    char(20),
        major   char(20),
        age     int(3) default '20',
        primary key(idx)
    );


    insert into dept (name, major, age) values('홍길동', '컴퓨터', '21');


    select major from dept;

    select dept.major from dept;

    select distinct major from dept order by major asc;

    select sum(age) from dept;
    select avg(age) from dept;

    3. 갱신 (Update)

    UPDATE 테이블명 SET 필드1='새값1', 필드2='새값2' [ WHERE 조건 ];

    update dept set age='23' where idx<10; 
    update dept set age=age+1 where idx>0;


    4. 삭제 (Delete)

    DELETE FROM 테이블명 [ where 조건 ];


create table birth_table (
        idx     int(10) auto_increment,
        name	char(20),
        birth	date, -- input type="date"
        city		char(20),
        primary key(idx)	
);

drop table 테이블명;



SELECT 옵션 : WHERE, ORDER BY, LIMIT

    GROUP BY, Having

    SELECT major, count(*) as total FROM dept  
        GROUP BY major 
        HAVING  total >=2 ORDER BY total DESC;

    SELECT major, count(*) as total FROM dept  
        GROUP BY major 
        HAVING  total >=2 ORDER BY major DESC;

    SELECT major, count(*) as total , avg(age) as avgage  FROM dept  
        GROUP BY major 
        HAVING  total >=2 ORDER BY major DESC;

    Q: kb_customer 에서 통계를 내려고 한다.
        지역별 인원분포, 지역 평균 나이를 효과적으로 시각화하시오.
        63statistics.php 


    SELECT  avg(left(now(),4) -  left(birth, 4)) as age from kb_customer

    SUB Query : SELECT 속에 SELECT

    SELECT name, major, age from dept 
        WHERE
            major in ( SELECT major FROM dept where name='데이터' );

    날짜관련 함수.

    select now();
    select date_add(now(), interval 10 day);

            // day, month, year, hour, minute, second
    SELECT DATEDIFF('2000-01-01', '2022-03-31') --  as mydiff;
    SELECT dayofweek('2022-03-31');
    SELECT dayofweek('2022-03-01');
    SELECT dayofyear(now());
    SELECT week(now());


    // ROUND()
    // ROUND(1.23456, 3)
    select ceil(1.23);
    select floor(degree);
    

    IoT 시각화

    // idx, branch(id), temperature(float), humidity(float), time

    create table iot (
        idx     int(10) auto_increment,
        branch  int(3) default '1',
        temperature float,
        humidity    float,
        time        datetime,
        primary key(idx)
    );

    // temp, tmp
    insert into iot (branch, temperature, humidity, time )
            values('1', '12.3', '45.6', now());

    create table bank (
        idx     int(10) auto_increment,
        branch  int(3) default '1',
        temperature float,
        humidity    float,
        time        datetime,
        primary key(idx)
    );

    //title
    alter table bank add title char(20) after branch;
    desc bank;
    alter table bank change title name char(30);
    alter table bank drop name;

    alter table bank change temperature floor int(3) default '1';
    alter table bank change humidity person int(5) default '0';

    create table bank (
        idx     int(10) auto_increment,
        branch  int(3) default '1',
        f1   int(3) default '0',
        f2   int(3) default '0',
        f3   int(3) default '0',
        time        datetime,
        primary key(idx)
    );

    cacti

    // 220,230,240,250,260
    create table models (
        idx     int(10) auto_increment,
        models  char(30) default 'no title',
        size    char(50) default '220,230,240,250,260',
        color   char(50) default '빨강,파랑,노랑',
        price   int(10) default '10000', 
        primary key(idx)
    );

    insert into models (models, price) values('나이키 러닝화', '12000');

    create table cart (
        idx     int(10) auto_increment,
        id      char(20),
        midx    int(10) default '0',
        size    char(50),
        color   char(50) ,
        count   int(3) default '0',
        price   int(10) default '0',
        time    char(20), -- session time 
        
        primary key(idx)
    );


    alter table cart add price int(10) default '0' after count;



    create table users (
        idx int(10) auto_increment,  -- 37
        name    char(30), -- 홍길동 
        id      char(20), -- kdhong
        -- 나머지 생략

        primary key(idx)
    );

    create table orders (
        idx int(10) auto_increment,   -- 123
        uidx    int(10), -- 37
        address char(100),
        mobile  char(20),

        -- 나머지 생략, 금액, ...

        primary key(idx)
    );

    create table items (
        idx int(10) auto_increment,   -- 3456
        oidx    int(10), -- 123
        color char(100),
        size  char(20),
        price int(10),

        -- 나머지 생략, 금액, ...

        primary key(idx)
    );


View : 가상 테이블명

create or replace view v_customer as
    select * from kb_customer
    where name like '김%';


 select @@autocommit;

 set autocommit = false;
 select @@autocommit;

/Application/XAMPP/mysql/bin



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
