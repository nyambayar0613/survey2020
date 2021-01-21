<p style = "text-align:left; font-weight:bold;">
    ✔ 응답방법 : 제시하는 문항을 차분히 읽고 빠짐없이 응답해주십시오.
</p>
<p class="alert alert-primary">
    ※ 먼저 귀사 및 귀하의 기본 정보에 대한 사항입니다. 본 질문은 통계적 분류 및 분석을 위하여 이용되는 문항이며, <b>개별적인 정보는 통계법에 의하여 비밀이 보장되며 개별적으로 사용되지 않으니</b> 진솔한 응답 주시면 감사하겠습니다.
</p>
<div class="middle">
    <table class="table table-bordered table-responsive">
        <colspan>
            <col width="18%">
            <col width="82%">
        </colspan>
        <!--<tr>
            <td>응답자  인적사항</td>
            <td><input type="text" name="text" v-model="questions.q1_1" class="form-control"></td>
        </tr>-->
        <tr>
            <td>회사소재지</td>
            <td><input type="text" name="text" v-model="questions.q1_2" class="form-control" placeholder="예시) 경기도 가평군, 충남 천안시 *시군구 단위로 기입해주세요"></td>
        </tr>
        <tr>
            <td>성별</td>
            <td>
                <label>
                    <input type="radio" v-model="questions.q1_3"  value="1">
                    <div class="box4">
                        <span><b>1)</b> 남성</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q1_3" value="2">
                    <div class="box4">
                        <span><b>2)</b> 여성</span>
                    </div>
                </label>
            </td>
        </tr>
        <tr align="center">
            <td>연 령</td>
            <td style="vertical-align:middle;">
                <!--<div class="row center" style="vertical-align: middle">
                    &#8195;만 (&#8195;<input type="text" class="form-control" maxlength="2" v-model="questions.q1_4" style="width: 50px">&#8195;)&#8195;세
                </div>-->
                <label>
                    <input type="radio"  v-model="questions.q1_4" value="1">
                    <div class="box4">
                        <span><b>1)</b> 20대</span>
                    </div>
                </label>
                <label>
                    <input type="radio" v-model="questions.q1_4"  value="2">
                    <div class="box4">
                        <span><b>2)</b> 30대</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q1_4" value="3">
                    <div class="box4">
                        <span><b>3)</b> 40대</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q1_4" value="4">
                    <div class="box4">
                        <span><b>4)</b> 50대</span>
                    </div>
                </label>
                <label>
                    <input type="radio"  v-model="questions.q1_4" value="5">
                    <div class="box4">
                        <span><b>5)</b> 60대</span>
                    </div>
                </label>
            </td>
        </tr>
        <tr>
            <td style="vertical-align:middle;">
                규  모
            </td>
            <td>
                <label class="lblBlock">
                    <input type="radio" v-model="questions.q1_5" value="1">
                    <div class="box5">
                        <span><b>1)</b> 소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)</span>
                    </div>
                </label>

                <label class="lblBlock">
                    <input type="radio" v-model="questions.q1_5" value="2">
                    <div class="box5">
                        <span><b>2)</b> 중기업 (광업, 제조업, 건설업, 운송업 종업원 50~299인, 그외 업종 10~299인)</span>
                    </div>
                </label>
                <label class="lblBlock">
                    <input type="radio" v-model="questions.q1_5" value="3">
                    <div class="box5">
                        <span><b>3)</b> 중견기업 (종업원 >300인, 혹은 매출 >400억, 상호 출자 제한 기업 집단 제외)</span>
                    </div>
                </label>

                <label class="lblBlock">
                    <input type="radio" v-model="questions.q1_5" value="4">
                    <div class="box5">
                        <span><b>4)</b> 대기업 (종업원 >1000인, 혹은 매출 >1500억, 상호 출자 제한 기업 집단)</span>
                    </div>
                </label>
            </td>
        </tr>
    </table>
</div>
