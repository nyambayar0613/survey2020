
<h5 style="text-align: center"><b><응답자 특성 문항></b></h5>
<br>
<br>
<p><b>SQ1.</b> 귀하의 성별은 무엇입니까?</p>
<div class="middle"  >
<table class="table table-responsive">
        <td style="border-top: 1px solid #fff">
            <label>
                <input type="radio"v-model="questions.q9_1" value="1" />
                <div class="box3" style="width: 80px">
                    <span>1) 남성</span>
                </div>
            </label>
            <label>
                <input type="radio"v-model="questions.q9_1" value="2" />
                <div class="box3" style="width: 80px">
                    <span>2) 여성</span>
                </div>
            </label>
        </td>
</table>
    <hr>
<p><b>SQ2.</b> 귀하의 직책은 무엇입니까?</p>
<table class="table table-responsive ">
        <td style="border-top: 1px solid #fff">
            <label>
                <input type="radio"v-model="questions.q9_2" value="1" />
                <div class=" box3">
                    <span>1) 전임교수</span>
                </div>
            </label>
            <label>
                <input type="radio"v-model="questions.q9_2" value="2" />
                <div class=" box3">
                    <span>2) 비전임교수</span>
                </div>
            </label>
        </td>
</table>
    <hr>
<p><b>SQ3.</b> 귀하의 근속연수는 얼마나 되십니까?</p>
<table class="table table-responsive ">
        <td style="border-top: 1px solid #fff">
            <label>
                <input type="radio"v-model="questions.q9_3" value="1" />
                <div class=" box3" style="width: 90px;">
                    <span>1) 5년 미만</span>
                </div>
            </label>
            <label>
                <input type="radio"v-model="questions.q9_3" value="2" />
                <div class=" box3">
                    <span>2) 5년 이상~ 10년 미만</span>
                </div>
            </label>
            <label>
                <input type="radio"v-model="questions.q9_3" value="3" />
                <div class=" box3">
                    <span>3) 10년 이상</span>
                </div>
            </label>
        </td>
</table>
</div>