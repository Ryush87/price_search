<? include '../include/top.php' ?>
	<? include '../include/headerBox.php' ?>
	<div id="contentBox">
		<div class="wMode">
			<div class="papeTitle"><span>환경</span>설정</div>
			<div class="settingBoxRow">
				<div class="setTitle">자동검색</div>
				<div id="useAutoSearchBox" class="setInput">
					<div class="setOption1"><input type="checkbox" value="" id="useAutoSearchCheck"/>&nbsp;&nbsp;자동검색 사용</div>
					<div class="setOption2">
						<div class="tS14">매일</div>
						<div id="autoSearchTime" class="timePicker">
							<input data-format="hh:mm:ss" type="text" />
							<span class="add-on">
								<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
							</span>
						</div>
						<script type="text/javascript">
							$(function() {
								$('#autoSearchTime').datetimepicker({
								pickDate: false
								});
							});
						</script>
					</div>
				</div>
			</div>
			<div class="settingBoxRow">
				<div class="setTitle">문자알림</div>
				<div id="tMessageBox" class="setInput">
					<div class="setOption1"><input type="checkbox" value="" id="tMessageCheck"/>&nbsp;&nbsp;문자알림 사용</div>
					<div class="setOption2">
						<div class="tS14">알림조건&nbsp;&nbsp;&nbsp;&nbsp;</div>
						<select name="tMessage" id="tMessage" class="form-control">
							<option value="">할인율</option>
							<option value="1">백팩</option>
							<option value="1">가방</option>
							<option value="1">가방</option>
							<option value="1">가방</option>
						</select>
					</div>
				</div>
			</div>
			<div class="settingBoxRow">
				<div class="setTitle">비밀번호 변경</div>
				<div class="setInput">
					<a href="javascript:popupOpen('passChange','urlData'); void(0)"><div id="passChangeBtn" class="cBtn btnOn">변경하기</div></a>
				</div>
			</div>
			<div class="pageBtnBox">
				<a href="#"><div id="settingSaveBtn" class="cBtn btnOn">설정저장</div></a>
			</div>
		</div>
	</div>
	<? include '../include/footerBox.php' ?>
<? include '../include/bottom.php' ?>
