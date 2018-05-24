<? include '../include/top.php' ?>
	<div class="popupTitle">
		<div class="wMode">
			<span>업체</span>등록
		</div>
	</div>
	<div class="wMode">
		<form action="" id="" name="" method="post">
		<div id="companyInfoBox">
			<div class="infoBoxRow">
				<div class="infoTitle">업체명</div>
				<div class="infoInput"><input type="text" id="cpnName" name="cpnName" class="form-control" placeholder="업체명을 입력하세요"/></div>
			</div>
			<div class="infoBoxRow">
				<div class="infoTitle">사업자번호</div>
				<div class="infoInput"><input type="text" id="cpnNum" name="cpnNum" class="form-control" placeholder="사업자번호를 입력하세요"/></div>
			</div>
			<div class="infoBoxRow">
				<div class="infoTitle">운영기간</div>
				<div class="infoInput">
					<div id="dateOperStrart" class="datePicker">
						<input data-format="yyyy-MM-dd" type="text"/>
						<span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
						</span>
					</div>
					<div class="datePickerText">&nbsp;-&nbsp;</div>
					<div id="dateOperEnd" class="datePicker">
						<input data-format="yyyy-MM-dd" type="text"/>
						<span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
						</span>
					</div>
				</div>
				<script type="text/javascript">
					$(function() {
						$('#dateOperStrart').datetimepicker({
						pickTime: false
						});
						$('#dateOperEnd').datetimepicker({
						pickTime: false
						});
					});
				</script>
			</div>
			<div class="infoBoxRow">
				<div class="infoTitle">메모</div>
				<div class="infoInput"><textarea id="cpnMemo" name="cpnMemo" class="form-control" rows="5"></textarea></div>
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
