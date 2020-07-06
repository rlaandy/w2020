var id,password;
id=prompt("아이디입력");

// if(조건문){실행문}
//if(id=="admin"){document.write("관리자입니다.");}
//else{document.write("나가세요")}

if(id=="admin"){
	alert("관리자입니다.");
	password = prompt("비밀번호입력")
	if(password == "1234"){
		// location.href = "http://www.naver.com";
		location.href = "login.html";
	}else{
		// location.href = "http://www.daum.com";
		loaction.href = "error.html";
	}
}else{alert("나가세요")}
	loaction.href = "error.html";