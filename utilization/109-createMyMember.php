<?php
  include './108-2-connectDB.php';

  $sql = "CREATE TABLE Member(";
  $sql .= "memberUID int unsigned auto_increment comment '멤버 UID',";
  $sql .= "memberID varchar(20) not null comment '멤버 아이디',";
  $sql .= "name varchar(12) not null comment '이름',";
  $sql .= "password varchar(20) not null comment '패스워드',";
  $sql .= "phone varchar(13) not null comment '전화번호',";
  $sql .= "email varchar(30) not null comment '이메일',";
  $sql .= "birthDay char(6) not null comment '생일6자리',";
  $sql .= "gender enum('m', 'w', 'x') default 'x' comment '성별',";
  $sql .= "regTime datetime not null comment '회원가입 시간',";
  $sql .= "primary key(memberUID))";
  $sql .= "charset=utf8 comment='멤버 정보 테이블';";

  $result = $dbConnect->query($sql);

  if($result) {
    echo "테이블 생성 완료";
  }
  else {
    echo $sql;
  }
?>
