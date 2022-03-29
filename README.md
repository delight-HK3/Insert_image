# Insert notice

>사용한 프레임워크 : codeIgniter 3, bootstrap 4<br>
>사용한 언어 : php5, css3, javascript, SQL<br>
>사용한 DB : MariaDB<br>
>사용한 DBMS : phpMyAdmin<br>
>사용한 서버 : apache server<br>
>사용한 Tool : Visual Studio Code<br>
<br>

### 주의사항
<ul>
   <li>codeIgniter3 에서 Index 죽이기 작업을 하고 진행했습니다. 위의 코드를 실행시키려면 먼저 Index 죽이기 작업을 하셔야 합니다.</li>
   <li><a href="https://gold9ine.tistory.com/entry/CodeIgniter-%EC%BD%94%EB%93%9C%EC%9D%B4%EA%B7%B8%EB%82%98%EC%9D%B4%ED%84%B0-indexphp-%EC%A3%BD%EC%9D%B4%EA%B8%B0-Not-Found-error">index.php remove 방법 블로그 글</a></li>
</ul>
<br>

### DB 설계
<kbd>
  <img src="https://user-images.githubusercontent.com/74585673/157579934-351a942a-52d7-4eb0-a87c-79248f4cf361.png">
</kbd>
<br><br><br>

<b>제작한 목적</b> : 파일 업로드 관련하여 코드를 제작하던 중 문득 파일의 이름이 중복되면 어떻게 해야 하나 생각했습니다, 그래서 여러 가지 방법을 시도해보았지만 빈 테이블 행을 하나 만든 후 그 안에 나중에 값을 넣는 방식으로 해보니 다행히 이미지이름의 중복성도 사라지고 서버의 공간도 어느 정도 절약할 수 있었습니다.

<br>

<a href="https://juniorprogram.tistory.com/57">Insert_notice_Repositories 설명 포스트</a>
