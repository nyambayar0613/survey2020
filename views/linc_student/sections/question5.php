
<div class="middle">

    <p><b>SQ1.</b> 귀하의 성별은 무엇입니까?</p>
    <table class="table table-responsive">
        <td style="border-top: 1px solid #fff">
            <label>
                <input type="radio" v-model="questions.q5_1" value="회사(기관)에 취업" />
                <div class=" box3">
                    <span>1) 남성</span>
                </div>
            </label>
            <label>
                <input type="radio" v-model="questions.q5_1" value="창업(자영업)" />
                <div class=" box3">
                    <span>2) 여성</span>
                </div>
            </label>
        </td>
    </table>


    <p><b>SQ2.</b> 귀하의 소속 학과(전공)는 무엇입니까?</p>
    <table class="table table-responsive">
        <td style="border-top: 1px solid #fff">
            <label>
                <input type="radio" v-model="questions.q5_2" value="스마트팜" />
                <div class=" box3">
                    <span>1) 스마트팜</span>
                </div>
            </label>
            <label>
                <input type="radio" v-model="questions.q5_2" value="스마트식물관리" />
                <div class=" box3">
                    <span>2) 스마트식물관리</span>
                </div>
            </label>
            <label>
                <input type="radio" v-model="questions.q5_2" value="스마트축산" />
                <div class=" box3">
                    <span>3) 스마트축산</span>
                </div>
            </label>
            <label>
                <input type="radio" v-model="questions.q5_2" value="반려동물산업" />
                <div class=" box3" style="width: 250px;">
                    <span>4) 반려동물산업</span>
                </div>
            </label>
            <label>
                <input type="radio" v-model="questions.q5_2" value="수의간호복지" />
                <div class=" box3">
                    <span>5) 수의간호복지</span>
                </div>
            </label>
            <label>
                <input type="radio" v-model="questions.q5_2" value="바이오동물산업" />
                <div class=" box3">
                    <span>6) 바이오동물산업</span>
                </div>
            </label>
        </td>
    </table>
    <p><b>SQ3.</b> 귀하는 몇 학년입니까?</p>
    <table class="table table-responsive">
        <td style="border-top: 1px solid #fff">
            <label>
                <input type="radio" v-model="questions.q5_3" value="1학년" />
                <div class="box3">
                    <span>1) 1학년</span>
                </div>
            </label>
            <label>
                <input type="radio" v-model="questions.q5_3" value="2학년" />
                <div class="box3">
                    <span>2) 2학년</span>
                </div>
            </label>
        </td>
    </table>
    </div>
</div>

