<? include '../include/top.php' ?>
	<div class="popupTitle">
		<div class="wMode">
			<span>담당자</span>등록
		</div>
	</div>
	<div class="wMode">
		<form action="" id="" name="" method="post">
		<div id="manageInfoBox">
			<div class="infoBoxRow rowColor1">
				<div class="infoTitle">담당자명</div>
				<div class="infoInput"><input type="text" id="mngName" name="mngName" class="form-control" placeholder="담당자명을 입력하세요"/></div>
			</div>
			<div class="infoBoxRow rowColor2">
				<div class="infoTitle">아이디</div>
				<div class="infoInput">
					<div class="infoOption1"><input type="text" id="mngID" name="mngID" class="form-control" placeholder="아이디를 입력하세요"/></div>
					<div class="infoOption2"><a href="#"><div id="idOverCheck" class="cBtn btnOn">중복체크</div></a></div>
				</div>
			</div>
			<div class="infoBoxRow rowColor1">
				<div class="infoTitle">비밀번호</div>
				<div class="infoInput"><input type="password" id="mngPass" name="mngPass" class="form-control" placeholder="비밀번호를 입력하세요"/></div>
			</div>
			<div class="infoBoxRow rowColor2">
				<div class="infoTitle">비밀번호확인</div>
				<div class="infoInput"><input type="password" id="mngPass" name="mngPass" class="form-control" placeholder="비밀번호를 다시한번 입력하세요"/></div>
			</div>
			<div class="infoBoxRow rowColor1">
				<div class="infoTitle">휴대폰</div>
				<div class="infoInput"><input type="text" id="mngPhon" name="mngPhon" class="form-control" placeholder="'-'없이 휴대폰번호를 입력하세요"/></div>
			</div>
			<div class="infoBoxRow rowColor2">
				<div class="infoTitle">이메일</div>
				<div class="infoInput"><input type="text" id="mngEmail" name="mngEmail" class="form-control" placeholder="이메일를 입력하세요"/></div>
			</div>
			<div class="infoBoxRow rowColor1">
				<div class="infoTitle">부서</div>
				<div class="infoInput"><input type="text" id="mngPost" name="mngPost" class="form-control" placeholder="담당자부서를 입력하세요"/></div>
			</div>
			<div class="infoBoxRow rowColor2">
				<div class="infoTitle">직책</div>
				<div class="infoInput"><input type="text" id="mngDuty" name="mngDuty" class="form-control" placeholder="담당자직책를 입력하세요"/></div>
			</div>
			<div class="infoBoxRow rowColor1">
				<div class="infoTitle">메모</div>
				<div class="infoInput"><textarea id="mngMemo" name="mngMemo" class="form-control" rows="5"></textarea></div>
			</div>
		</div>
		<div class="pageBtnBox">
			<div class="align2BtnBox">
				<a href="javascript:closePopup(); void(0)"><div id="newCompanyBtn" class="cBtn btnOn">취 소</div></a>
				<a href="#"><div id="newCompanyBtn" class="cBtn btnOn">등 록</div></a>
			</div>
		</div>
		</form>
	</div>
<? include '../include/bottom.php' ?>
